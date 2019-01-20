@extends('master-access')
@section('content')
<div class="login-form">
    <form action="{{ route('postlogin') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Email Address</label>
            <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
        </div>
        <div class="login-checkbox">
            <label>
                <input type="checkbox" name="remember">Remember Me
            </label>
            <label>
                <a href="#">Forgotten Password?</a>
            </label>
        </div>
        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" style="background:#7971ea;">sign in</button>
    </form>
    <div class="register-link">
        <p>
            Don't you have account?
            <a href="{{ route('getregister') }}">Sign Up Here</a>
        </p>
    </div>
</div>
@endsection