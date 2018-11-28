@extends('master-admin')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-20">
                <div class="col-md-12">
                    <h2 class="title-1 m-b-25">Guest Member</h2>
                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">email</th>
                                    <th class="text-center">adrress</th>
                                    <th class="text-center">phone number</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customer as $person)
                                    <tr>
                                        <td>GUEST{{$person->id}}</td>
                                        <td class="text-center">{{$person->name}}</td>
                                        <td class="text-center">{{$person->email}}</td>
                                        <td class="text-center">{{$person->address}}</td>
                                        <td class="text-center">{{$person->phone_number}}</td>
                                        <td>
                                            <div class="table-data-feature">
                                                <a class="item" data-toggle="tooltip" href="{{route('delete-member',$person->id)}}">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <h2 class="title-1 m-b-25">User</h2>
                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">email</th>
                                    <th class="text-center">address</th>
                                    <th class="text-center">phone number</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(Auth::user()->group_id == 1)
                                @foreach($user as $person)
                                <tr>
                                    <td>{{$person->id}}</td>
                                    <td class="text-center">{{$person->full_name}}</td>
                                    <td class="text-center">{{$person->email}}</td>
                                    <td class="text-center">{{$person->address}}</td>
                                    <td class="text-center">{{$person->phone_number}}</td>
                                    @if($person->group_id == 1)
                                    <td>
                                        <span class="role admin">boss</span>
                                    </td>
                                    <td></td>
                                    @elseif($person->group_id == 2)
                                    <td>
                                        <span class="role user">admin</span>
                                    </td>
                                    <td>
                                        <div class="table-data-feature">
                                            <a class="item" data-toggle="tooltip" href="#">
                                                <i class="zmdi zmdi-edit"></i>
                                            </a>
                                        </div>
                                    </td>
                                    @elseif($person->group_id == 0)
                                    <td>
                                        <span class="role member">user</span>
                                    </td>
                                    <td>
                                        <div class="table-data-feature">
                                            <a class="item" data-toggle="tooltip" href="#">
                                                <i class="zmdi zmdi-edit"></i>
                                            </a>
                                        </div>
                                    </td>

                                    @endif
                                </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>  
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
