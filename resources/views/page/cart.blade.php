@extends('master')
@section('content')
<div class="bg-light py-3">
    <div class="container">
    <div class="row">
        <div class="col-md-12 mb-0"><a href="{{ route('index') }}">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Cart</strong></div>
    </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
    <div class="row mb-5">
        <form class="col-md-12" method="post">
        <div class="site-blocks-table">
            <table class="table table-bordered">
            <thead>
                <tr>
                <th class="product-thumbnail">Image</th>
                <th class="product-name">Product</th>
                <th class="product-price">Price</th>
                <th class="product-quantity">Quantity</th>
                <th class="product-total">Total</th>
                <th class="product-remove">Remove</th>
                </tr>
            </thead>
            <tbody>
                @foreach($product as $product_details)
                    <tr>
                    <td class="product-thumbnail">
                        <img src="{{ asset($product_details['image']) }}" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                        <h2 class="h5 text-black">{{ $product_details['item']['name']}}</h2>
                    </td>
                    <td>${{ $product_details['item']['unit_price'] }}</td>
                    <td>
                        <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                            <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                        </div>
                        </div>

                    </td>
                    <td>${{ $product_details['item']['unit_price'] }}</td>
                    <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        </form>
    </div>

    <div class="row">
        <div class="col-md-6">
        <div class="row mb-5">
            <div class="col-md-6">
            <a class="btn btn-outline-primary btn-sm btn-block" href="{{ route('products') }}">Continue Shopping</a>
            </div>
        </div>
        </div>
        <div class="col-md-6 pl-5">
        <div class="row justify-content-end">
            <div class="col-md-7">
            <div class="row">
                <div class="col-md-12 text-right border-bottom mb-5">
                <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                <span class="text-black">Taxes</span>
                </div>
                <div class="col-md-6 text-right">
                <strong class="text-black">$230.00</strong>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                <span class="text-black">Shipping</span>
                </div>
                <div class="col-md-6 text-right">
                <strong class="text-black">$230.00</strong>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-6">
                <span class="text-black">Total</span>
                </div>
                <div class="col-md-6 text-right">
                <strong class="text-black">$230.00</strong>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='{{ route('checkout') }}'">Proceed To Checkout</button>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection
