@extends('master')
@section('content')
<div class="bg-light py-3">
    <div class="container">
    <div class="row">
        <div class="col-md-12 mb-0"><a href="{{ route('index') }}">Home</a> <span class="mx-2 mb-0">/</span> <a href="{{ route('cart') }}">Cart</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Checkout</strong></div>
    </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
    <div class="row mb-5">
        <div class="col-md-12">
        <div class="border p-4 rounded" role="alert">
            Returning customer? <a href="{{route('getlogin')}}">Click here</a> to login
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-5 mb-md-0">
        <h2 class="h3 mb-3 text-black">Billing Details</h2>
        <form action="{{route('submitcheckout')}}" method="POST" class="form-group">
            {{csrf_field()}}
            <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                <div class="col-md-12">
                    <label for="c_fname" class="text-black">Full Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="c_fname">
                </div>
                </div>
                <div class="form-group row">
                <div class="col-md-12">
                    <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_address" name="c_address">
                </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <label for="c_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_email_address" name="c_email_address">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_phone" name="c_phone">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <label for="c_order_notes" class="text-black">Order Notes</label>
                        <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Write your notes here..."></textarea>
                    </div>
                </div>
                <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" href="">Create an account</a></h3>
                </div>
            </div>
            </div>
            <div class="col-md-6">

            <div class="row mb-5">
                <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Coupon Code</h2>
                <div class="p-3 p-lg-5 border">
                    <label for="c_code" class="text-black mb-3">Enter your coupon code if you have one</label>
                    <div class="input-group w-75">
                    <input type="text" class="form-control" id="c_code" placeholder="Coupon Code" aria-label="Coupon Code" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary btn-sm" type="button" id="button-addon2">Apply</button>
                    </div>
                    </div>

                </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Your Order</h2>
                <div class="p-3 p-lg-5 border">
                    <table class="table site-block-order-table mb-5">
                    <thead>
                        <th>Product</th>
                        <th>Total</th>
                    </thead>
                    @if(Session::has('cart'))
                        <tbody>
                            @foreach($products_cart as $product_details)
                                <tr>
                                <td>{{$product_details['item']['name']}}{{Session::get('cart')->products_cart}}<strong class="mx-2">x</strong>{{$product_details['qty']}}</td>
                                <td>$ {{$product_details['item']['unit_price']}}</td>
                                </tr>
                            @endforeach
                                <tr>
                                <td class="text-black font-weight-bold"><strong>Shipping</strong> </td>
                                <td class="text-black">$@if($shipping = Session::get('cart')->totalPrice > 300) 0 @else {{$shipping = 20}}  @endif</td>
                                </tr>
                                <tr>
                                <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                                <td class="text-black font-weight-bold"><strong>$ {{Session::get('cart')->totalPrice + $shipping}}</strong></td>
                                </tr>
                        </tbody>
                    @endif
                    </table>
                    <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='{{route('thanks')}}'">Order Now</button>
                    </div>               
                </div>
                </div>
            </div>
            </div>
        </form>
    </div>
    </div>
</div>
@endsection