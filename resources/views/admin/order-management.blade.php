@extends('master-admin')
@section('content')
<div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row m-t-20">
                    <div class="col-md-12">
                        <h2 class="title-1 m-b-25">List Products</h2>
                        <div class="table-responsive table-responsive-data2">
                            <div class="table-data__tool">
                                <button class="au-btn au-btn-icon au-btn--blue au-btn--small">export excel</button>
                            </div>
                            <table class="table table-data2">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name Customer</th>
                                        <th>email</th>
                                        <th class="desc">product</th>
                                        <th>date</th>
                                        <th>price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($list_order as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->name}}</td>
                                            <td class="block-email">{{$item->email}}</td>
                                            <td>{{$item->name_pr}}</td>
                                            <td>{{$item->date_order}}</td>
                                            <th>{{$item->total}}</th>
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