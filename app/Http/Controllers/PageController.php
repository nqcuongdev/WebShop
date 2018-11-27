<?php

namespace App\Http\Controllers;

use App\BannerIndex;
use App\Cart;
use App\TypeProduct;
use App\Products;
use App\Customer;
use App\Bill;
use App\BillDetails;
use App\Users;
use Validator;
use Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PageController extends Controller
{
    public function getIndex(){
        $bannerindex = BannerIndex::all();
        $productFeature = Products::where('feature_id',1)->get();
        return view('page.index',compact('bannerindex','productFeature'));
    }
    public function getProducts(){
        //Pagination
        $product = Products::paginate(6);
        $typeproduct = TypeProduct::all();
        return view('page.products',compact('product','typeproduct'));
    }
    public function getProductsByID($id_type){
        //Fillter product by id
        $product = Products::where('id_type',$id_type)->paginate(6);
        $typeproduct = TypeProduct::all();
        return view('page.products',compact('product','typeproduct'));
    }
    public function getCheckOut(){
        $cart = Session::get('cart');
        return view('page.checkout',['cart'=>Session::get('cart'), 'products_cart' => $cart->items]);
    }
    public function postCheckOut(Request $req){
        $cart = Session::get('cart');

        $customer = new Customer;
        $customer->name = $req->c_fname;
        $customer->email = $req->c_email_address;
        $customer->address = $req->c_address;
        $customer->phone_number = $req->c_phone;
        $customer->note = $req->c_order_notes;
        $customer->save();

        $bill = new Bill;
        $bill->id_customer = $customer->id;
        $bill->date_order = date('Y-m-d');
        $bill->total = $cart->totalPrice;
        $bill->note = $customer->note;
        $bill->save();

        foreach ($cart->items as $key => $value) {
            $bill_details = new BillDetails;
            $bill_details->id_bill = $bill->id;
            $bill_details->id_product = $key;
            $bill_details->quantity = $value['qty'];
            $bill_details->unit_price = ($value['price']/$value['qty']);
            $bill_details->total = $bill->total;
            $bill_details->save();
        }
        Session::forget('cart');
        return redirect('\thanks');
        
    }
    public function getAbout(){return view('page.about');}
    public function getContact(){return view('page.contact');}
    public function cart(){
        if(!Session::has('cart')) return view('page.cart');
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('page.cart',['cart'=>Session::get('cart'), 'products_cart' => $cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);     
    }
    public function getAddtoCart(Request $req,$id){
        //Find products have id = $id
        $product = Products::find($id);
        //Check cart Session
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        //Call contructor
        $cart = new Cart($oldCart);
        $cart->add($product,$id);
        //Put cart into session
        $req->session()->put('cart',$cart);
        return redirect()->back();
    }
    public function reduceOne($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);
        Session::put('cart', $cart);
        return redirect()->back();
    }
    public function increaseOne($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->increaseByOne($id);
        Session::put('cart', $cart);
        return redirect()->back();
    }
    public function removeItem($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart',$id);
        }
        return redirect()->back();
    }
    public function getProductsDetails(Request $req){
        //Receive request and query sql 
        $productDetails = Products::where('id',$req->id)->first();
        $productFeature = Products::where('feature_id',1)->get();
        return view('page.product-details',compact('productDetails','productFeature'));
    }
    public function getThanks(){return view('page.thanks');}
    public function getLogIn(){return view('page.login');}
    public function postLogin(Request $req){
        $credentials = array('email'=>$req->email,'password'=>$req->password);
        if(Auth::attempt($credentials)){
            if(Auth::user()->group_id == 1 || Auth::user()->group_id == 2) return redirect('/admin/dashboard');
            elseif(Auth::user()->group_id == 0) return redirect('/');
        }else{
            return redirect('login');
        }
    }
    public function postlogOut(){
        Auth::logout();
        return redirect('/');       
    }
    public function getRegister(){return view('page.register');}
    public function postRegister(Request $req){
        //Validate form
        $this->validate(
            ['fullname'=>'required','email'=>'required|email|unique:user,email','password'=>'required|min:6|max:20','re_password'=>'required|same:password'],
            ['email.required'=>'Enter your email','email.email'=>'Enter the correct email format','email.unique'=>'Email already exists','password.required'=>'Enter correct password'
            ,'re_password.same'=>'Passwords are not the same','password.min'=>'Password of at least 6 characters']
        );
        $rules = array(
            ['fullname'=>'required','email'=>'required|email|unique:user,email','password'=>'required|min:6|max:20','re_password'=>'required|same:password']
        );
        //validate request from form
        $this->validate($req,$rules);

        $user = new Users;
        $user->full_name = $req->fullname;
        $user->email = $req->email;
        $user->address = "";
        $user->phone_number = "";
        $user->avatar = "";
        $user->password = Hash::make($req->password);
        $user->group_id = 0;
        $user->save();
        return redirect('login');
    }
    public function postSearch(Request $req){
        $product = Products::where('name','like','%'.$req->key.'%')
                            ->orWhere('unit_price',$req->key)
                            ->paginate(4);
        return view('page.search',compact('product'));
    }
    public function getInformation($id){
        $user = Users::find($id)->first;
        return view('page.member-info',compact('user'));
    }
    public function postInformation(Request $req, $id){
        //Need request
        $user = Users::find($id);
        $user->full_name = $req->full_name;
        $user->email = $user->email;
        $user->address = $req->address;
        $user->phone_number = $req->phone_number;

        //Procces upload file
        if($req->hasFile('avatar')){
            $avatar = $req->avatar;
            $avatar->move(public_path('/shoppers/images/avatar/'),$avatar->getClientOriginalName());
            $link = 'shoppers/images/avatar/'.$avatar->getClientOriginalName();
            $user->avatar = $link;
        }else{
            $user->avatar = $user->avatar;
        }
        $user->save();
        return redirect('member-infomation/'.$user->id);
    }
}
