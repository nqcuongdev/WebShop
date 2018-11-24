@extends('master-admin')
@section('content')
<div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row m-t-20">
                    <div class="col-md-12">
                        <h2 class="title-1 m-b-25">List Products</h2>
                        <div class="table-responsive m-b-40">
                            <div class="table-data__tool">
                                <a class="au-btn au-btn-icon au-btn--green au-btn--small" href="{{route('addproduct')}}"><i class="zmdi zmdi-plus"></i>add item</a>
                                <button class="au-btn au-btn-icon au-btn--blue au-btn--small">export excel</button>
                            </div>
                            <table class="table table-borderless table-data3">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th class="text-center">product type</th>
                                        <th class="text-center">manufacturer</th>
                                        <th class="text-center">unit price</th>
                                        <th>image</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->name}}</td>
                                            <td class="text-center">{{$item->name_type}}</td>
                                            <td class="text-center">{{$item->unit_price}}</td>
                                            <td class="text-center">{{$item->promotion_price}}</td>
                                            <td>
                                                <img src="{{url($item->image)}}" alt="Products {{$item->name}}" style="height:20%;">
                                            </td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <a class="item" href="{{route('editproduct',$item->id)}}">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </a>
                                                    <a class="item" data-toggle="tooltip" href="{{route('delete-product',$item->id)}}">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection