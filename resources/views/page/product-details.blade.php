@extends('master')
@section('content')
    
<div class="bg-light py-3">
    <div class="container">
    <div class="row">
    <div class="col-md-12 mb-0"><a href="{{ route('index') }}">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">{{ $productDetails -> name }}</strong></div>
    </div>
    </div>
</div>  

<div class="site-section">
    <div class="container">
    <div class="row">
        <div class="col-md-6">
        <img src="{{url($productDetails -> image)}}" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6">
        <h2 class="text-black">{{ $productDetails -> name }}</h2>
        <p>{{ $productDetails -> description }}</p>
        <p class="mb-4"></p>
        <p><strong class="text-primary h4">${{ $productDetails -> unit_price }}</strong></p>
        <div class="mb-4">
            <div class="d-flex mr-3 mb-3">
                <div class="input-group mb-3 mr-2" style="max-width: 120px;">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                    </div>
                    <input type="text" class="form-control text-center" value="1" aria-label="Example text with button addon" aria-describedby="button-addon1">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                    </div>
            </div>
            <div class="d-flex mr-3 mb-3">
                @if ($productDetails -> id_type == 1 || $productDetails -> id_type == 2 || $productDetails -> id_type == 4)
                    <select class="form-control text-center">
                        <option value="1">Small</option>
                        <option value="2">Medium</option>
                        <option value="3">Large</option>
                        <option value="4">Extra Large</option>
                    </select>

                @elseif ($productDetails -> id_type == 5)
                    <select class="form-control">
                        @for ($i = 34; $i <= 49; $i++){
                            <option value="{{$i}}">{{$i}}</option>
                        }
                        @endfor
                    </select>
                @endif
            </div>
            
        </div>

        </div>
        <p><a href="{{ route('addtocart',$productDetails -> id) }}" class="buy-now btn btn-sm btn-primary">Add To Cart</a></p>

        </div>
    </div>
    </div>
</div>


<div class="site-section block-3 site-blocks-2 bg-light">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Featured Products</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <div class="nonloop-block-3 owl-carousel">
            @foreach ($productFeature as $item)
                <div class="item">
                    <div class="block-4 text-center">
                        <figure class="block-4-image">
                            <img src="{{url($item -> image)}}" alt="Image placeholder" class="img-fluid">
                        </figure>
                        <div class="block-4-text p-4">
                            <h3><a href="{{ route('product',$item -> id)}}">{{ $item -> name }}</a></h3>
                            <p class="mb-0">{{ $item -> fastdescription }}</p>
                            <p class="text-primary font-weight-bold">${{ $item -> unit_price }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        </div>
    </div>
    </div>
</div>
@endsection