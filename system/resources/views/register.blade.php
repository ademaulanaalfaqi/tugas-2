<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Arowana</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="{{url('public/landing')}}/img/favicon.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{url('public/landing')}}/css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{url('public/landing')}}/css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{url('public/landing')}}/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{url('public/landing')}}/css/responsive.css">
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="body-wrapper">


    <div class="ltn__utilize-overlay"></div>

    <!-- LOGIN AREA START (Register) -->
    <div class="ltn__login-area pb-110 mt-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area text-center">
                        <h1 class="section-title">Register <br>Your Account</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="account-login-inner">
                        <form action="{{url('login')}}" method="POST" class="ltn__form-box contact-form-box">
                        @csrf
                            <input type="text" name="nama" placeholder="Nama">
                            <input type="text" name="username" placeholder="Username">
                            <input type="text" name="email" placeholder="Email*">
                            <input type="password" name="password" placeholder="Password*">
                            <div class="btn-wrapper">
                                <button class="theme-btn-1 btn reverse-color btn-block" type="submit">CREATE ACCOUNT</button>
                            </div>
                        </form>
                        <div class="by-agree text-center">
                            <p>By creating an account, you agree to our:</p>
                            <p><a href="#">TERMS OF CONDITIONS  &nbsp; &nbsp; | &nbsp; &nbsp;  PRIVACY POLICY</a></p>
                            <div class="go-to-btn mt-50">
                                <a href="{{url('login')}}">ALREADY HAVE AN ACCOUNT ?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGIN AREA END -->

</div>
<!-- Body main wrapper end -->

    <!-- All JS Plugins -->
    <script src="{{url('public/landing')}}/js/plugins.js"></script>
    <!-- Main JS -->
    <script src="{{url('public/landing')}}/js/main.js"></script>
  
</body>
</html>

