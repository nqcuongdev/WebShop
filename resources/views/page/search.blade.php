@extends('master')
@section('content')
<div class="bg-light py-3">
    <div class="container">
    <div class="row">
        <div class="col-md-12 mb-0"><a href="{{ route('index') }}">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Results</strong></div>
    </div>
    </div>
</div>
<div class="site-section">
    <div class="container">
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
                {{-- Tự phân trang từ hàm paginate --}}
            </div>
            </div>
        </div>
    </div>
</div>
@endsection