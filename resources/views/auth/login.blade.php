<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>{{ __('Login') }}</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="{{ asset('') }}assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="{{ asset('') }}assets/plugins/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
	<link href="{{ asset('') }}assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet" />
	<link href="{{ asset('') }}assets/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="{{ asset('') }}assets/css/default/style.min.css" rel="stylesheet" />
	<link href="{{ asset('') }}assets/css/default/style-responsive.min.css" rel="stylesheet" />
	<link href="{{ asset('') }}assets/css/default/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{ asset('') }}assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top bg-white">
	<!-- begin #page-loader --> 
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
	    <!-- begin login -->
        <div class="login login-with-news-feed">
            <!-- begin news-feed -->
            <div class="news-feed">
                <div class="news-image" style="background-image:"></div>
                <img src="{{ Storage::url('public/login-bg/login-bg-3.jpg')}}">
                <div class="news-caption">
                   
                    <p>
                       
                </div>
            </div>
            <!-- end news-feed -->
            <!-- begin right-content -->
            <div class="right-content">
                <!-- begin login-header -->
                <div class="login-header">
                    <div class="brand">
                        <span class="logo"></span> <b>HALAMAN</b> LOGIN
                        <small>Silahkan untuk masuk ke aplikasi</small>
                    </div>
                    <div class="icon">
                        <i class="fa fa-sign-in"></i>
                    </div>
                </div>
                <!-- end login-header -->
                <!-- begin login-content -->
                <div class="login-content">
                    <form method="POST" action="{{ route('login') }}" class="margin-bottom-0">
                          @csrf
    <div class="form-group m-b-15">
        <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email"
            value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
</div>
                       <div class="form-group m-b-15">
                                <input id="password" type="password"
                                    class="form-control form-control-lg @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>
                         <div class="checkbox checkbox-css m-b-30">
                
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>

                        </div>
                        <div class="login-buttons">
                           
                                <button type="submit" class="btn btn-success btn-block btn-lg">
                                    {{ __('Login') }}
                                </button>

                                {{-- @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif --}}
                       
                        </div>
                        <div class="m-t-20 m-b-40 p-b-40 text-inverse">
                            Not a member yet? Click <a href="register_v3.html" class="text-success">here</a> to register.
                        </div>
                        <hr />
                        <p class="text-center text-grey-darker">
                            &copy; Alfin-Dev All Right Reserved 2023
                        </p>
                    </form>
                </div>
                <!-- end login-content -->
            </div>
            <!-- end right-container -->
        </div>
        <!-- end login -->
        
        <!-- begin theme-panel -->
      
        <!-- end theme-panel -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{ asset('') }}assets/plugins/jquery/jquery-3.2.1.min.js"></script>
	<script src="{{ asset('') }}assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="{{ asset('') }}assets/plugins/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
	<!--[if lt IE 9]>
		<script src="{{ asset('') }}assets/crossbrowserjs/html5shiv.js"></script>
		<script src="{{ asset('') }}assets/crossbrowserjs/respond.min.js"></script>
		<script src="{{ asset('') }}assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="{{ asset('') }}assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="{{ asset('') }}assets/plugins/js-cookie/js.cookie.js"></script>
	<script src="{{ asset('') }}assets/js/theme/default.min.js"></script>
	<script src="{{ asset('') }}assets/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>
</body>
</html>
