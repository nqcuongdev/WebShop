@extends('master-admin')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-20">
                <div class="col-md-12">
                    <h2 class="title-1 m-b-25">Change Banner Sale</h2>
                    <div class="table-responsive m-b-40">
                            <table class="table table-borderless table-data3">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>TypoText</th>
                                        <th>Small Text</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($bannerIndex as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>
                                                <img class="img-fluid" style="width:100px; height:50px;" src="{{ url($item->image) }}" alt="Image of Banner">
                                            </td>
                                            <td>{{ $item->typotext }}</td>
                                            <td>{{ $item->smalltext }}</td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <a class="item" href="{{ route('get.editIndexManagement') }}">
                                                        <i class="zmdi zmdi-edit"></i>
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