@extends('master')
@section('content')
<div class="bg-light py-3">
    <div class="container">
    <div class="row">
        <div class="col-md-12 mb-0"><a href="{{ route('index') }}">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Shop</strong></div>
    </div>
    </div>
</div>

<div class="site-section">
    <div class="container">

    <div class="row mb-5">
        <div class="col-md-9 order-2">

        <div class="row">
            <div class="col-md-12 mb-5">
            <div class="float-md-left mb-4"><h2 class="text-black h5">Shop All</h2></div>
            <div class="d-flex">
                <div class="dropdown mr-1 ml-md-auto">
                <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Fillter
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                        <a class="dropdown-item" href="{{ route('products') }}">All</a>
                    @foreach ($typeproduct as $type)
                        <a class="dropdown-item" href="{{ route('product',$type -> id) }}">{{ $type->name_type }}</a>
                    @endforeach

                </div>
                </div>
                <div class="btn-group">
                <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuReference" data-toggle="dropdown">Sort</button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                    <a class="dropdown-item" href="#">New</a>
                    <a class="dropdown-item" href="#">Featured</a>
                    <a class="dropdown-item" href="#">Name A to Z</a>
                    <a class="dropdown-item" href="#">Name Z to A</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Price low to high</a>
                    <a class="dropdown-item" href="#">Price high to low</a>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="row mb-5">

            @foreach ($product as $item)
                
            
            <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
            <div class="block-4 text-center border">
                <figure class="block-4-image">
                <a href="{{ route('product-details',$item -> id) }}"><img src="{{asset($item -> image)}}" alt="Image placeholder" class="img-fluid"></a>
                </figure>
                <div class="block-4-text p-4">
                <h3><a href="{{ route('product-details',$item -> id) }}"></a>{{ $item -> name}}</h3>
                <p class="mb-0">{{ $item -> fastdescription}}</p>
                <p class="text-primary font-weight-bold">${{ $item -> unit_price}}</p>
                </div>
            </div>
            </div>

            @endforeach

        </div>
        <div class="row" data-aos="fade-up">
            <div class="col-md-12 text-center">
            <div class="site-block-27">
                {{$product -> links()}}
                {{-- Auto pagination make by pagiate of SQL --}}
            </div>
            </div>
        </div>
        </div>

        <div class="col-md-3 order-1 mb-5 mb-md-0">
        <div class="border p-4 rounded mb-4">
            <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
            <ul class="list-unstyled mb-0">
                @foreach ($typeproduct as $type)
            <li class="mb-1">
                <a href="{{ route('product',$type -> id) }}" class="d-flex">
                    <span>{{ $type -> name_type}}</span>
                    <span class="text-black ml-auto"></span>
                </a>
            </li>
                @endforeach
            
            </ul>
        </div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
        <div class="site-section site-blocks-2">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-7 site-section-heading text-center pt-4">
                <h2>Categories</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
                <a class="block-2-item" href="#">
                    <figure class="image">
                    <img src="{{asset('shoppers/images/men.jpg')}}" alt="" class="img-fluid">
                    </figure>
                    <div class="text">
                    <span class="text-uppercase">Collections</span>
                    <h3>Man</h3>
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
                    <span class="text-uppercase">Assesories</span>
                    <h3>Men</h3>
                    </div>
                </a>
                </div>
            </div>
            
        </div>
        </div>
    </div>
    </div>
</div>
@endsection