 <!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title></title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="{{url('/')}}/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{url('/')}}/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{url('/')}}/assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="{{url('/')}}/assets/css/main.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <link href="{{ url('/') }}/assets/css/pages/auth-light.css" rel="stylesheet" />
</head>

<body class="bg-secondary">
    <div class="content ">
        <div class="brand pb-5">
            <!-- <a class="link" href="#"> <img src="{{url('/')}}/assets/img/logos/bnm.png"></a> -->
        </div>
        <form class="register-form">
            @csrf
            <h2 class="login-title">Sign Up</h2>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <div class="input-group-icon right">
                        <input id="name" type="text" class="form-control " name="name" value="{{ old('name') }}"  autocomplete="name" autofocus placeholder="Name">

                       
                        </div>
                    </div>
                </div>
                 
            </div>
            <div class="form-group">
                <div class="input-group-icon right">
                <div class="input-icon"><i class="fa fa-envelope"></i></div>
                <input id="email" type="email" class="form-control " name="email" value="{{ old('email') }}"  autocomplete="email" placeholder="Email">

                
                </div>
            </div>
            <div class="form-group">
                <div class="input-group-icon right">
                <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
               <input id="password" type="password" class="form-control " name="password" required autocomplete="new-password" placeholder="Password">

                
                </div>
            </div>
            <div class="form-group">
                <div class="input-group-icon right">
                <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                </div>  
            </div>
             

            
            <!-- <div class="form-group text-left">
                <label class="ui-checkbox ui-checkbox-info">
                    <input type="checkbox" name="agree">
                    <span class="input-span"></span>I agree the terms and policy</label>
            </div> -->
            <div class="form-group">
                <button type="button" class="btn btn-info btn-block register-btn" type="submit">Sign up</button>
            </div>
            <div class="text-danger text-center error-section">

            </div>
            <div class="social-auth-hr">
                <span>Or Sign up with</span>
            </div>
           
            <div class="text-center">Already a member?
                <a class="color-blue" href="{{ url('login/page') }}">Login here</a>
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
            
            $('.register-btn').click(function(){
                $('.error-section').empty();
               
                $.ajax({
                    'url': '{{ route("register") }}',
                    'method' : 'POST',
                    'data' : $('.register-form').serialize(),

                    success : function(xhr){ 
                        document.location.href = '{{ url("login/page") }}';
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