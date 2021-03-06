<?php

namespace App\Http\Controllers;

use App\TypeProduct;
use App\Bill;
use App\BillDetails;
use App\Customer;
use App\Products;
use App\User;
use App\BannerIndex;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getIndex(){
        $list_order = Bill::orderby('id','asc')->get();
        $product_order = BillDetails::all();
        $product_type = TypeProduct::all();
        $customer = Customer::all();
        return view('admin.dashboard',compact('list_order','product_order','product_type','customer'));
    }
    public function getProductsManagement(){
        $products = Products::join('type_products','products.id_type','=','type_products.id')
                    ->select('products.*','type_products.name_type')
                    ->orderby('products.id','asc')
                    ->get();
        return view('admin.products-management',compact('products'));
    }
    public function getAddProducts(){
        $product_type = TypeProduct::all();
        return view('admin.addproduct',compact('product_type'));
    }
    public function postAddProducts(Request $req){
        $product = new Products;
        $product->name = $req->name;
        $product->id_type = $req->pr_type;
        $product->fastdescription = $req->smtitle;
        $product->description = $req->description;
        $product->unit_price = $req->unitprice;
        $product->promotion_price = $req->promotion;
        $product->feature_id = $req->sellingpr;

        //Process upload file
        $image = $req->image;
        $image->move(public_path('/shoppers/images'),$image->getClientOriginalName());
        $link = 'shoppers/images/'.$image->getClientOriginalName();
        $product->image = $link;
        $product->save();
        return redirect('admin/products-management');
    }
    public function getEditProducts($id){
        $product = Products::where('id',$id)->get();
        $product_type = TypeProduct::all();
        return view('admin.editproducts',compact('product','product_type'));
    }
    public function postEditProducts(Request $req,$id){
        $product = Products::find($id);
        $product->name = $req->name;
        $product->id_type = $req->pr_type;
        $product->fastdescription = $req->smtitle;
        $product->description = $req->description;
        $product->unit_price = $req->unitprice;
        $product->promotion_price = $req->promotion;
        $product->feature_id = $req->sellingpr;

        //Proccess upload file
        if($req->hasFile('image')){
            $image = $req->image;
            $image->move(public_path('/shoppers/images'),$image->getClientOriginalName());
            $link = 'shoppers/images/'.$image->getClientOriginalName();
            $product->image = $link;
        }else{
            $product->image = $product->image;
        }
        $product->save();
        return redirect('admin/products-management');
    }
    public function getDeleteProducts($id){
        $product = Products::find($id);
        if($product->delete()){
            return redirect('admin/products-management');
        }
    }
    public function getOrderProducts(){
        $list_order = Bill::join('bill_details','bills.id','=','bill_details.id_bill')
                    ->join('products','bill_details.id_product','=','products.id')
                    ->join('customer','bills.id_customer','=','customer.id')
                    ->select('bills.*','bill_details.id_bill','bill_details.id_product','bill_details.quantity','bill_details.total','customer.name','customer.email','products.name AS name_pr')
                    ->orderby('bills.id','asc')
                    ->get();
        return view('admin.order-management',compact('list_order'));
    }
    public function getMemberManagement(){
        $customer = Customer::all();
        $user = User::all();
        return view('admin.member-manager',compact('customer','user'));
    }

    public function getDeleteMember($id){
        $customer = Customer::find($id);
        if(Auth::user()->group_id == 1){
            $customer->delete();
        }
        return redirect()->back();
    }

    public function getDeleteUser($id){
        $user = User::find($id);
        if(Auth::user()->group_id == 1){
            $user->delete();
        }
        return redirect()->back();
    }

    public function getIndexManagement(){
        $bannerIndex = BannerIndex::all();
        return view('admin.index-management',compact('bannerIndex'));
    }

    public function getEditIndex(){
        $bannerIndex = BannerIndex::all();
        return view('admin.edit-indexpage',compact('bannerIndex'));
    }

    public function postEditIndex(Request $request){
        $bannerIndex = BannerIndex::find($request->id);
        $bannerIndex->id = $bannerIndex->id;

        if(isset($request->typotext))
            $bannerIndex->typotext = $request->typotext;
        else
            $bannerIndex->typotext = $bannerIndex->typotext;
        
        if(isset($request->smalltext))
            $bannerIndex->smalltext = $request->smalltext;
        else
            $bannerIndex->smalltext = $bannerIndex->smalltext;

        if(isset($request->link))
            $bannerIndex->link = $request->link;
        else
            $bannerIndex->link = $bannerIndex->link;

        //Proccess upload file
        if($request->hasFile('image')){
            $image = $request->image;
            $image->move(public_path('/shoppers/images'),$image->getClientOriginalName());
            $link = 'shoppers/images/'.$image->getClientOriginalName();
            $bannerIndex->image = $link;
        }else{
            $bannerIndex->image = $bannerIndex->image;
        }
        $bannerIndex->save();
        return redirect()->back();
    }
}
