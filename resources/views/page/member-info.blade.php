@extends('master')
@section('content')
<div class="bg-light py-3">
    <div class="container">
    <div class="row">
        <div class="col-md-12 mb-0"><a href="{{ route('index') }}">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Infomation</strong></div>
    </div>
    </div>
</div>
@if(Auth::check())
@if(Auth::user()->group_id == 0)
<div class="site-section border-bottom" data-aos="fade">
    <div class="container">
    <div class="row mb-5">
        <div class="col-md-3">
        <div class="block-16">
            <figure>
                <img src="{{url(Auth::user()->avatar)}}" alt="Person information" class="img-fluid rounded">
            </figure>
        </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-7">
        <div class="site-section-heading pt-3 mb-4">
            <h2 class="text-black">Update your Information</h2>
        </div>
        <form action="{{route('memberinfomation',Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group row">
                <div class="col-md-12">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="full_name" value="{{Auth::user()->full_name}}">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <label for="">Email</label>
                    <input disabled type="text" class="form-control" name="email" value="{{Auth::user()->email}}">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <label for="">Address</label>
                    <input type="text" class="form-control" name="address" value="{{Auth::user()->address}}">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <label for="">Number Phone</label>
                    <input type="text" class="form-control" name="phone_number" value="{{Auth::user()->phone_number}}">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <label for="">Avatar</label>
                    <input type="file" name="avatar" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="col md 6">
                        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Change">
                </div>
            </div>
        </form>
        
        </div>
    </div>
    </div>
</div>
@endif
@endif
@endsection