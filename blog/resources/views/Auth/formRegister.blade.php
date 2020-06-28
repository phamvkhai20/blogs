<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Abstack - Responsive Web App Kit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    <script src="assets/js/modernizr.min.js"></script>

</head>


<body class="bg-accpunt-pages">

    <!-- HOME -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <div class="wrapper-page">

                        <div class="account-pages">
                            <div class="account-box">
                                <div class="account-logo-box">
                                    <h2 class="text-uppercase text-center">
                                        <a href="index.html" class="text-success">
                                            <span><img src="assets/images/logo_dark.png" alt="" height="18"></span>
                                        </a>
                                    </h2>
                                    <h6 class="text-uppercase text-center font-bold mt-4">Register</h6>
                                </div>
                                <div class="account-content">
                                    <form class="col s12" method="POST" action="{{ route('website.signup')}}">
                                        @csrf
                                        <div class="form-group row m-b-20">
                                            <div class="col-12">
                                                <label for="username">Full Name</label>
                                                <input class="form-control" type="text" name="name"
                                                    placeholder="Michael Zenaty" value="{{old('name')}}">
                                            </div>
                                        </div>
                                        @error('name')
                                        <small style="color:red">{{$message}}</small>
                                        @enderror
                                        <div class="form-group row m-b-20">
                                            <div class="col-12">
                                                <label for="emailaddress">Email address</label>
                                                <input class="form-control" text="email" name="email" id="address"
                                                    placeholder="john@deo.com"  value="{{old('email')}}">
                                            </div>
                                        </div>
                                        @error('email')
                                        <small style="color:red">{{$message}}</small>
                                        @enderror
                                        <div class="form-group row m-b-20">
                                            <div class="col-12">
                                                <label for="password">Password</label>
                                                <input class="form-control" type="password" value="{{old('password')}}" name="password"
                                                    id="password" placeholder="Enter your password">
                                            </div>
                                        </div>
                                        @error('password')
                                        <small style="color:red">{{$message}}</small>
                                        @enderror
                                        <div class="form-group row m-b-20">
                                            <div class="col-12">
                                                <label for="password">Confirm Password</label>
                                                <input class="form-control" type="password" name="cf_password"
                                                    id="password" placeholder="Enter your password">
                                            </div>
                                        </div>
                                        <input  type="hidden" name="status" value="true"
                                                 >
                                        @error('cf_password')
                                        <small style="color:red">{{$message}}</small>
                                        @enderror

                                        <div class="form-group row m-b-20">
                                            <div class="col-12">

                                                <div class="checkbox checkbox-success">
                                                    <input id="remember" type="checkbox" checked="">
                                                    <label for="remember">
                                                        I accept <a href="#">Terms and Conditions</a>
                                                    </label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="form-group row text-center m-t-10">
                                            <div class="col-12">
                                                <button class="btn btn-block btn-gradient waves-effect waves-light"
                                                    type="submit">Sign Up Free</button>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="row m-t-50">
                                        <div class="col-sm-12 text-center">
                                            <p class="text-muted">Already have an account? <a href="{{route('formlogin')}}"
                                                    class="text-dark m-l-5"><b>Sign In</b></a></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end card-box-->


                    </div>
                    <!-- end wrapper -->

                </div>
            </div>
        </div>
    </section>
    <!-- END HOME -->


    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>

    <!-- App js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>

</body>

</html>