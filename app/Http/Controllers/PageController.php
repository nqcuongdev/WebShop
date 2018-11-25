<?php

namespace App\Http\Controllers;

use App\BannerIndex;
use App\Cart;
use App\TypeProduct;
use App\Products;
use App\Customer;
use App\Bill;
use App\BillDetails;
use Session;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        //Lấy toàn bộ dữ liệu trong table tableindex để truyền dữ liệu
        //kiểu mảng vào trang index
        $bannerindex = BannerIndex::all();
        //Lấy dữ liệu sản phẩm feature (chỉ 2 giá trị 0 và 1) để truyền vào carousel
        $productFeature = Products::where('feature_id',1)->get();
        return view('page.index',compact('bannerindex','productFeature'));
    }
    public function getProducts(){
        //Lấy toàn bộ dữ liệu trong table products để truyền dữ liệu
        //kiểu mảng vào trang products
        //paginate 1 hàm phân trang có sẵn
        $product = Products::paginate(6);
        //Lấy toàn bộ dữ liệu trong table typeproduct để truyền dữ liệu
        //kiểu mảng vào trang products
        $typeproduct = TypeProduct::all();
        return view('page.products',compact('product','typeproduct'));
    }
    public function getProductsByID($id_type){
        //Tương tự như trên nhưng lọc sản phẩm theo id
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
        //Tìm sản phẩm có $id
        $product = Products::find($id);
        //Kiểm trả cart có session hay không nếu có lấy ko thì null
        //Toán tử 3 ngôi check Session
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        //Truyền oldcart vào contructor
        $cart = new Cart($oldCart);
        $cart->add($product,$id);
        //Put cart vào session
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
        //Nhận request là 1 id sau đó query và lấy giá trị đầu tiền (mỗi products có id riêng)
        $productDetails = Products::where('id',$req->id)->first();
        $productFeature = Products::where('feature_id',1)->get();
        return view('page.product-details',compact('productDetails','productFeature'));
    }
    public function getThanks(){return view('page.thanks');}
    public function getLogIn(){return view('page.login');}
    public function getRegister(){return view('page.register');}
    public function postRegister(Request $req){
        // $this->validate(
        //     ['fullname'=>'required','email'=>'required|email|unique:user,email','password'=>'required|min:6|max:20','re_password'=>'required|same:password'],
        //     ['email.required'=>'Enter your email','email.email'=>'Enter the correct email format','email.unique'=>'Email already exists','password.required'=>'Enter correct password'
        //     ,'re_password.same'=>'Passwords are not the same','password.min'=>'Password of at least 6 characters']
        // );
        //1 chuẩn quy định của req nhận vào
        $rules = array(
            ['fullname'=>'required','email'=>'required|email|unique:user,email','password'=>'required|min:6|max:20','re_password'=>'required|same:password']
        );
        //validate quy định và cái request từ form
        $this->validate($req,$rules);
        $user = new User();
        $user->full_name = $req->fullname;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->group_id = 0;
        $user->save();
        return redirect()->back()->with('success','Your Account has been created !');
    }
}
