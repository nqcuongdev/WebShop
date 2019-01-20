@extends('master-admin')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                        <div class="card" style="max-width:650px; margin: 0 auto;">
                            <div class="card-header">Edit Product</div>
                            <div class="card-body">
                                @foreach($bannerIndex as $item)
                                <form action="{{ route('post.editIndexManagement') }}" enctype="multipart/form-data" method="POST">
                                    {{ csrf_field() }}
                                    <input name="id" type="text" class="form-control" hidden value="{{ $item->id }}">

                                    <div class="form-group">
                                        <label class="control-label mb-1">Big Title</label>
                                        <input name="typotext" type="text" class="form-control" value="{{ $item->typotext }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label mb-1">Small Title</label>
                                        <input name="smalltext" type="text" class="form-control" value="{{ $item->smalltext }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label mb-1">Link Products</label>
                                        <input name="link" type="text" class="form-control" value="{{ $item->link }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label mb-1">Image</label>
                                        <img src="{{url($item->image)}}" alt="Image of Banner" class="m-b-10 img-fluid">
                                        <input name="image" type="file" class="form-control">
                                    </div>
                                    <div>
                                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">Edit</button>
                                    </div>                                   
                                </form>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
