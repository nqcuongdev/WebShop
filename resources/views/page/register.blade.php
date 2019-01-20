@extends('master-access')
@section('content')
<div class="login-form">
    <form action="{{route('postregister')}}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Full Name</label>
            <input class="au-input au-input--full" type="text" name="fullname" placeholder="Full name">
        </div>
        <div class="form-group">
            <label>Email Address</label>
            <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
        </div>
        <div class="form-group">
                <label>Re Enter Password</label>
                <input class="au-input au-input--full" type="password" name="re_password" placeholder="Password">
            </div>
        <div class="login-checkbox">
            <label>
                <input type="checkbox" name="aggree">Agree the terms and policy
            </label>
        </div>
        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" style="background:#7971ea;">register</button>
    </form>
    <div class="register-link">
        <p>
            Already have account?
            <a href="{{route('getlogin')}}">Sign In</a>
        </p>
    </div>
</div>
@endsection
 