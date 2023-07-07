<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Register | Admin & Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- App favicon -->

    <!-- Layout Js -->
    <script src="{{ asset('admin') }}/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('admin') }}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('admin') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin') }}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />




</head>

<body>
    <div class="auth-maintenance d-flex align-items-center">
        <div class="bg-overlay bg-light"></div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="auth-full-page-content d-flex ">
                        <div class="w-100">
                            <div class="d-flex flex-column ">


                                <div class="card my-auto overflow-hidden">
                                    <div class="row g-0">
                                        <div class="col-lg-6">
                                            <div class="bg-overlay bg-primary"></div>
                                            <div class="h-100 bg-auth align-items-end">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="p-lg-5 p-4">
                                                <div>
                                                    <div class="text-center mt-1">
                                                        <h4 class="font-size-18">Register account</h4>
                                                        <p class="text-muted">Get your free Tocly account now.</p>
                                                    </div>

                                                    <form action="" class="auth-input">
                                                        <div class="mb-2">
                                                            <label for="useremail" class="form-label">Email</label>
                                                            <input type="email" class="form-control" id="useremail"
                                                                placeholder="Enter email">
                                                        </div>

                                                        <div class="mb-2">
                                                            <label for="username" class="form-label">Username</label>
                                                            <input type="text" class="form-control" id="username"
                                                                placeholder="Enter username">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="password-input">Password</label>
                                                            <input type="password" class="form-control"
                                                                placeholder="Enter password">
                                                        </div>

                                                        <div>
                                                            <p class="mb-0">By registering you agree to the Tocly <a
                                                                    href="#" class="text-primary">Terms of Use</a>
                                                            </p>
                                                        </div>

                                                        <div class="mt-3">
                                                            <button class="btn btn-primary w-100"
                                                                type="submit">Register</button>
                                                        </div>

                                                        <div class="mt-4 pt-2 text-center">
                                                            <div class="signin-other-title">
                                                                <h5 class="font-size-14 mb-4 title">Sign In with</h5>
                                                            </div>
                                                            <div class="pt-2 hstack gap-2 justify-content-center">
                                                                <button type="button" class="btn btn-primary btn-sm"><i
                                                                        class="ri-facebook-fill font-size-16"></i></button>
                                                                <button type="button" class="btn btn-danger btn-sm"><i
                                                                        class="ri-google-fill font-size-16"></i></button>
                                                                <button type="button" class="btn btn-dark btn-sm"><i
                                                                        class="ri-github-fill font-size-16"></i></button>
                                                                <button type="button" class="btn btn-info btn-sm"><i
                                                                        class="ri-twitter-fill font-size-16"></i></button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                                <div class="mt-4 text-center">
                                                    <p class="mb-0">Already have an account ? <a
                                                            href="{{url('admin/login')}}" class="fw-medium text-primary">
                                                            Login</a> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->


                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </div>




    <!-- JAVASCRIPT -->
    <script src="{{ asset('admin') }}/assets/libs/jquery/jquery.min.js"></script>
    <script src="{{ asset('admin') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('admin') }}/assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="{{ asset('admin') }}/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('admin') }}/assets/libs/node-waves/waves.min.js"></script>

    <!-- Icon -->
    <script src="{{ asset('admin') }}/assets/bundle.js"></script>

    <script src="{{ asset('admin') }}/assets/js/app.js"></script>

</body>


</html>
