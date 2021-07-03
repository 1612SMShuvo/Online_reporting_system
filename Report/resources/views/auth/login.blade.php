<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="" />
    
    <title>EUROSIA | Project Management</title>

    <link rel="stylesheet" href="{{  asset('assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css')}}">
    <link rel="stylesheet" href="{{  asset('assets/css/font-icons/entypo/css/entypo.css')}}">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
    <link rel="stylesheet" href="{{  asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{  asset('assets/css/neon-core.css')}}">
    <link rel="stylesheet" href="{{  asset('assets/css/neon-theme.css')}}">
    <link rel="stylesheet" href="{{  asset('assets/css/neon-forms.css')}}">
    <link rel="stylesheet" href="{{  asset('assets/css/custom.css')}}">

    <script src="{{  asset('assets/js/jquery-1.11.0.min.js')}}"></script>
    
    
</head>
<body class="page-body login-page login-form-fall" data-url="http://neon.dev">


<!-- This is needed when you send requests via Ajax --><script type="text/javascript">
var baseurl = '';
</script>

<div class="login-container">
    
    <div class="login-header login-caret">
        
        <div class="login-content">
            
            <a href="index.html" class="logo">
                <img src="assets/images/logo.png" width="120" alt="" />
            </a>
            
            <p class="description">Dear user, log in to access the admin area!</p>
        </div>
        
    </div>
    
   
    
    <div class="login-form">
        
        <div class="login-content">
            
            <div class="form-login-error">
                <h3>Invalid login</h3>
                <p>Enter <strong>demo</strong>/<strong>demo</strong> as login and password.</p>
            </div>
            
           <form method="POST" action="{{ route('login') }}" role="form" >
                @csrf
                <div class="form-group">
                    
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="entypo-user"></i>
                        </div>
                        
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Enter You Email" autocomplete="off" />

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    
                </div>
                
                <div class="form-group">
                    
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="entypo-key"></i>
                        </div>
                        
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" autocomplete="off" />

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                    </div>
                
                
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block btn-login">
                            <i class="entypo-login"></i>
                            Login In
                        </button>
                    </div>          
                </form>
            
            
            {{-- <div class="login-bottom-links">
                
                <a href="extra-forgot-password.html" class="link">Forgot your password?</a>
                
                <br />
                
                <a href="#">ToS</a>  - <a href="#">Privacy Policy</a>
                
            </div> --}}
            
        </div>
        
    </div>
    
</div>


    <!-- Bottom Scripts -->
    <!-- Bottom Scripts -->
    <script src="{{  asset('assets/js/gsap/main-gsap.js')}}"></script>
    <script src="{{  asset('assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js')}}"></script>
    <script src="{{  asset('assets/js/bootstrap.js')}}"></script>
    <script src="{{  asset('assets/js/joinable.js')}}"></script>
    <script src="{{  asset('assets/js/resizeable.js')}}"></script>
    <script src="{{  asset('assets/js/neon-api.js')}}"></script>
    <script src="{{  asset('assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{  asset('assets/js/neon-login.js')}}"></script>
    <script src="{{  asset('assets/js/neon-custom.js')}}"></script>
    <script src="{{  asset('assets/js/neon-demo.js')}}"></script>

</body>
</html>