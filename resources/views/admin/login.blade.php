<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin - Login</title>

    <!-- Bootstrap -->
    <link href="{{url('/admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{url('/admin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{url('/admin/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{url('vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{url('/admin/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="/login">
              <h1>DoubleC Shop</h1>
              @csrf
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div class="form-group">
                <input type="submit" name="login" class="btn btn-default btn-sm submit" value="Log In">
                <a class="reset_pass" href="">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form method="POST" action="">
              <h1>Create Account</h1>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div class="form-group">
                  <input type="submit" name="login" class="btn btn-default btn-sm submit" value="Register">
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
