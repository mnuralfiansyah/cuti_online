<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login | Aplikasi Cuti Online</title>
    {{-- sebelum diganti --}}
    <link href="/template/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/template/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/template/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="/template/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/template/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
              <h1>Login</h1>
              <div>
                <input name="email" type="email" class="form-control" placeholder="Email" required />
              </div>
              <div>
                <input name="password" type="password" class="form-control" placeholder="Password" required />
              </div>
              <div>
                <button class="btn btn-default submit" href="index.html">Log in</button>

              </div>

              <div class="clearfix"></div>

              <div class="separator">


                <div class="clearfix"></div>
                <br />

                <div class="row text-left">
                  <div class="col-md-3 col-sm-3 col-xs-3">
                    User Level
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-6">
                    Email
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3">
                    Password
                  </div>
                </div>

                <div class="row text-left">
                  <div class="col-md-3 col-sm-3 col-xs-3">
                    Admin
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-6">
                    admin@admin.com
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3">
                    123456
                  </div>
                </div>

                <div class="row text-left">
                  <div class="col-md-3 col-sm-3 col-xs-3">
                    HRD
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-6">
                    hrd@hrd.com
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3">
                    123456
                  </div>
                </div>

                <div class="row text-left">
                  <div class="col-md-3 col-sm-3 col-xs-3">
                    Karyawan
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-6">
                    karyawan@karyawan.com
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3">
                    123456
                  </div>
                </div>

                <br><br>

                <div>
                  <h1><i class="fa fa-paw"></i> Aplikasi Cuti Online</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>


      </div>
    </div>
  </body>
</html>
