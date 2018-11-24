@extends('master')
@section('content')
@foreach ($bannerindex as $value)
<div class="site-blocks-cover" style="background-image: url({{asset($value -> image)}});" data-aos="fade">
    <div class="container">
    <div class="row align-items-start align-items-md-center justify-content-end">
        <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
        <h1 class="mb-2">{{$value -> typotext}}</h1>
        <div class="intro-text text-center text-md-left">
            <p class="mb-4">{{$value -> smalltext}}</p>
            <p>
            <a href="{{$value -> link}}" class="btn btn-sm btn-primary">{{$value -> buttontext}}</a>
            </p>
        </div>
        </div>
    </div>
    </div>
</div>
@endforeach
<div class="site-section site-section-sm site-blocks-1">
    <div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
        <div class="icon mr-4 align-self-start">
            <span class="icon-truck"></span>
        </div>
        <div class="text">
            <h2 class="text-uppercase">Free Shipping</h2>
            <p>We are always free shipping with great value orders and clothing combos.</p>
        </div>
        </div>
        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
        <div class="icon mr-4 align-self-start">
            <span class="icon-refresh2"></span>
        </div>
        <div class="text">
            <h2 class="text-uppercase">Free Returns</h2>
            <p>Return within 7 days for defective products by the manufacturer.<br>Also, for great value orders we have many years of warranty service.</p>
        </div>
        </div>
        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
        <div class="icon mr-4 align-self-start">
            <span class="icon-help"></span>
        </div>
        <div class="text">
            <a href="{{ route('contact') }}"><h2 class="text-uppercase">Customer Support</h2></a>
            <p>The center always supports 24/24 the questions remain of customers.<br>Also you can live chat with our support 24/7 or may leave information we will contact you directly.</p>
        </div>
        </div>
    </div>
    </div>
</div>

<div class="site-section site-blocks-2">
    <div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
        <a class="block-2-item" href="#">
            <figure class="image">
            <img src="{{asset('shoppers/images/men.jpg')}}" alt="" class="img-fluid">
            </figure>
            <div class="text">
            <span class="text-uppercase">Collections</span>
            <h3>Men</h3>
            </div>
        </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
        <a class="block-2-item" href="#">
            <figure class="image">
            <img src="{{asset('shoppers/images/women.jpg')}}" alt="" class="img-fluid">
            </figure>
            <div class="text">
            <span class="text-uppercase">Collections</span>
            <h3>Women</h3>
            </div>
        </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
        <a class="block-2-item" href="#">
            <figure class="image">
            <img src="{{asset('shoppers/images/assesories.jpg')}}" alt="" class="img-fluid">
            </figure>
            <div class="text">
            <span class="text-uppercase">Collections</span>
            <h3>Assesories</h3>
            </div>
        </a>
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
                            <img src="{{asset($item -> image)}}" alt="Image placeholder" class="img-fluid">
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

<div class="site-section block-8">
    <div class="container">
    <div class="row justify-content-center  mb-5">
        <div class="col-md-7 site-section-heading text-center pt-4">
        <h2>Big Sale!</h2>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-md-12 col-lg-7 mb-5">
        <a href="#"><img src="{{asset('shoppers/images/blog_1.jpg')}}" alt="Image placeholder" class="img-fluid rounded"></a>
        </div>
        <div class="col-md-12 col-lg-5 text-center pl-md-5">
        <h2><a href="#">50% less in all items</a></h2>
        <p class="post-meta mb-4">By <a href="#">Carl Smith</a> <span class="block-8-sep">&bullet;</span> September 3, 2018</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam iste dolor accusantium facere corporis ipsum animi deleniti fugiat. Ex, veniam?</p>
        <p><a href="{{ route('products') }}" class="btn btn-primary btn-sm">Shop Now</a></p>
        </div>
    </div>
    </div>
</div>
@endsection