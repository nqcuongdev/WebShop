@extends('master')
@section('content')
<div class="bg-light py-3">
    <div class="container">
    <div class="row">
        <div class="col-md-12 mb-0"><a href="{{ route('index') }}">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">About</strong></div>
    </div>
    </div>
</div>  

<div class="site-section border-bottom" data-aos="fade">
    <div class="container">
    <div class="row mb-5">
        <div class="col-md-6">
        <div class="block-16">
            <figure>
            <img src="{{url('shoppers/images/blog_1.jpg')}}" alt="Image placeholder" class="img-fluid rounded">
            </figure>
        </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
        
        
        <div class="site-section-heading pt-3 mb-4">
            <h2 class="text-black">How We Started</h2>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius repellat, dicta at laboriosam, nemo exercitationem itaque eveniet architecto cumque, deleniti commodi molestias repellendus quos sequi hic fugiat asperiores illum. Atque, in, fuga excepturi corrupti error corporis aliquam unde nostrum quas.</p>
        <p>Accusantium dolor ratione maiores est deleniti nihil? Dignissimos est, sunt nulla illum autem in, quibusdam cumque recusandae, laudantium minima repellendus.</p>
        
        </div>
    </div>
    </div>
</div>

<div class="site-section border-bottom" data-aos="fade">
    <div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-7 site-section-heading text-center pt-4">
        <h2>The Team</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-6" style="magin:auto;">
        <div class="block-38 text-center">
            <div class="block-38-img">
            <div class="block-38-header">
                <img src="{{url('shoppers/images/person_2.jpg')}}" alt="Image placeholder" class="mb-4">
                <h3 class="block-38-heading h4">Nguyen Quoc Cuong</h3>
                <p class="block-38-subheading">Founder</p>
            </div>
            <div class="block-38-body">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit distinctio recusandae doloribus ut fugit officia voluptate soluta. </p>
            </div>
            </div>
        </div>
        </div>
        <div class="col-md-6 col-lg-6" style="magin:auto;">
        <div class="block-38 text-center">
            <div class="block-38-img">
            <div class="block-38-header">
                <img src="{{url('shoppers/images/person_4.jpg')}}" alt="Image placeholder" class="mb-4">
                <h3 class="block-38-heading h4">Nguyen Van Chau</h3>
                <p class="block-38-subheading">Sales</p>
            </div>
            <div class="block-38-body">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit distinctio recusandae doloribus ut fugit officia voluptate soluta. </p>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>


<div class="site-section site-section-sm site-blocks-1 border-0" data-aos="fade">
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
@endsection