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
                                @foreach($product as $items)
                                <form action="{{route('postedit-product',$items->id)}}" enctype="multipart/form-data" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label class="control-label mb-1">Name</label>
                                        <input name="name" type="text" class="form-control" value="{{$items->name}}">
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label class=" form-control-label">Type</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="pr_type" class="form-control">
                                                @foreach($product_type as $item)
                                                <option @if($items->id == $item->id) selected @endif value="{{$item->id}}">{{$item->name_type}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label mb-1">Small Title</label>
                                        <input name="smtitle" type="text" class="form-control" value="{{$items->fastdescription}}">
                                    </div>
                                    <div class="form-group">
                                            <label class="control-label mb-1">Description</label>
                                            <textarea name="description" rows="9" class="form-control">{{$items->description}}</textarea>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label class="control-label mb-1">Unit Price</label>
                                            <input name="unitprice" type="text" class="form-control" value="{{$items->unit_price}}">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="control-label mb-1">Promotion Price</label>
                                            <input name="promotion" type="text" class="form-control" value="{{$items->promotion_price}}">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="control-label mb-1">Seling Product</label>
                                            <select name="sellingpr" class="form-control">
                                                <option @if($items->feature_id == 0) selected @endif value="0">Normal</option>
                                                <option @if($items->feature_id == 1) selected @endif value="1">Best Selling</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label mb-1">Image</label>
                                        <img src="{{url($items->image)}}" alt="Image Product {{$items->name}}" style="width:30%;" class="m-b-10">
                                        <input name="image" type="file" class="form-control">
                                    </div>
                                    <div>
                                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">Submit</button>
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
