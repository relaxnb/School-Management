@if(session()->has('ADMIN_LOGIN'))
     <script type="text/javascript">
            window.location.href="{{url('/dashboard')}}";
        </script>
@endif

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{asset('assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('assets/admin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('assets/admin/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('assets/admin/vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('assets/admin/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="{{url('admin_login')}}"> 
            @csrf	
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" placeholder="Useremail" required="required" name="email" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="required" name="password" />
              </div>
              <div>
                <button type="submit" class="btn btn-primary">Log In</button>
              </div>

              <div class="clearfix"></div>
            </form>
            @if(session()->has('error'))
                <div class="alert alert-danger alert-dismissible " role="alert">
                    {{session('error')}}
                  </div>
            @endif
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
