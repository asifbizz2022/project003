<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title></title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="{{url('/')}}/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{url('/')}}/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{url('/')}}/assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="{{ url('/') }}/assets/css/main.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <link href="{{url('/')}}/assets/css/pages/auth-light.css" rel="stylesheet" />
</head>

<body class="bg-secondary"> 
    <div class="content">
        <div class="brand pb-5">
            <!-- <a class="link" href="#"> <img src="{{url('/')}}/assets/img/logos/bnm.png"></a>  -->
           
        </div>
        <div>
                @if(Session::has('message'))
                <div class="alert alert-danger">
                    <strong class="text-sm text-center">
                        {{Session::get('message')}}
                    </strong>
                </div>
                @endif
        </div>
        <form class="login-form mt-5" id="login-form"  >
            @csrf
           
            <h2 class="login-title">Log in</h2>
            <div class="form-group">
                <div class="input-group-icon right email">
                    <div class="input-icon"><i class="fa fa-envelope"></i></div>
                    <input id="email" type="email" class="form-control  " name="email" value="{{ old('email') }}"   autocomplete="email" autofocus placeholder="Email">
                   
                    <span class="email-errors"> </span>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group-icon right password">
                    <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                    <input id="password" type="password" class="form-control  " name="password"   autocomplete="current-password" placeholder="Password">
                    <span class="password-errors"> </span>
                </div>
            </div>
            <div class="form-group d-flex justify-content-between">
                <label class="ui-checkbox ui-checkbox-info">
                    <input type="checkbox">
                    <span class="input-span"></span>Remember me</label>
                
               @if (Route::has('password.request'))
                  <a href="{{ route('password.request') }}">Forgot password?</a>  
                @endif  
            </div>
            <div class="form-group">
                <button class="btn btn-info btn-block login-btn" type="button">Login</button>
                <div class="text-center error-section text-danger text-sm mt-1">
                    <!-- @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password') }}
                    </a>
					@endif --> 
                </div>
            </div> 
 
            
        </form>

    </div>
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS -->
    <script src="{{ url('/') }}/assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="{{ url('/') }}/assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="{{ url('/') }}/assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS -->
    <script src="{{ url('/') }}/assets/vendors/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="{{ url('/') }}/assets/js/app.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">
        $(function() {
           
            $('.login-btn').click(function(){
                $('.error-section').empty();
               
                $.ajax({
                    'url': '{{ route("login") }}',
                    'method' : 'POST',
                    'data' : $('.login-form').serialize(),

                    success : function(xhr){
                        
                      if(xhr){
                        document.location.href= '{{ url("dashboard") }}';
                      } else {
                          $('.error-section').append('<p class="alert alert-danger text-sm">Invalid Credentials</p>');    
                      }
                    }
                    ,
                    error : function(xhr){

                        $.each(xhr.responseJSON.errors, function(key, value){
                           
                            $('.error-section').append('<p class="alert alert-danger text-sm">'+value+'</p>'); 
                        });
                        
                        
                        
                    }
                });
            });
        });
    </script>
</body>

</html>