<?php

namespace App\Http\Controllers;

use App\BannerIndex;
use App\Cart;
use App\TypeProduct;
use App\Products;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        return view('page.checkout');
    }

    public function getAbout(){
        return view('page.about');
    }

    public function getContact(){
        return view('page.contact');
    }

    public function getAddtoCart(Request $req,$id){
        //Tìm sản phẩm có $id
        $product = Products::find($id);
        //Kiểm trả cart có session hay không nếu có lấy ko thì null
        $oldCart = Session('keyCart')?Session::get('keyCart'):null;
        //Khởi tạo $cart từ Model Cart để sử dụng các phương thức trong đó
        $cart = new Cart($oldCart);
        $cart->add($product,$id);
        //Put cart vào session
        $req->session()->put('keyCart',$cart);
        redirect('page.thanks');
        return view('page.cart',compact('product'));
    }

    public function getProductsDetails(Request $req){
        //Nhận request là 1 id sau đó query và lấy giá trị đầu tiền (mỗi products có id riêng)
        $productDetails = Products::where('id',$req->id)->first();
        $productFeature = Products::where('feature_id',1)->get();
        return view('page.product-details',compact('productDetails','productFeature'));
    }

    public function getThanks(){
        return view('page.thanks');
    }
}
