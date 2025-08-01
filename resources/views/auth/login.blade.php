<!DOCTYPE html>
<html lang="en">
    <!-- [Head] start -->
    <head>
        <title>Login | IOTDelivery</title>
        <!-- [Meta] -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
        <meta name="keywords" content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
        <meta name="author" content="CodedThemes">

        <!-- [Favicon] icon -->
        <link rel="icon" href="{{ asset('assets/templates/Mantis-Bootstrap-1.0.0/images/favicon.svg') }}" type="image/x-icon"> <!-- [Google Font] Family -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">
        
        <!-- [Tabler Icons] https://tablericons.com -->
        <link rel="stylesheet" href="{{ asset('assets/templates/Mantis-Bootstrap-1.0.0/fonts/tabler-icons.min.css') }}" >
        
        <!-- [Feather Icons] https://feathericons.com -->
        <link rel="stylesheet" href="{{ asset('assets/templates/Mantis-Bootstrap-1.0.0/fonts/feather.css') }}" >
        
        <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
        <link rel="stylesheet" href="{{ asset('assets/templates/Mantis-Bootstrap-1.0.0/fonts/fontawesome.css') }}" >

        {{-- Font Awesome 6.4.0 --}}
        <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free-6.4.0/css/all.min.css') }}">
        
        <!-- [Material Icons] https://fonts.google.com/icons -->
        <link rel="stylesheet" href="{{ asset('assets/templates/Mantis-Bootstrap-1.0.0/fonts/material.css') }}" >
        
        <!-- [Template CSS Files] -->
        <link rel="stylesheet" href="{{ asset('assets/templates/Mantis-Bootstrap-1.0.0/css/style.css') }}" id="main-style-link" >
        <link rel="stylesheet" href="{{ asset('assets/templates/Mantis-Bootstrap-1.0.0/css/style-preset.css') }}" >
    </head><!-- [Head] end -->

    <!-- [Body] Start -->
    <body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
        <div class="loader-fill"></div>
        </div>
    </div><!-- [ Pre-loader ] End -->

    <div class="auth-main">
        <div class="auth-wrapper v3">
            <div class="auth-form">
                <div class="auth-header">
                    {{-- <a href="#"><img src="{{ asset('assets/templates/Mantis-Bootstrap-1.0.0/images/logo-dark.svg') }}" alt="img"></a> --}}
                    <a href="/"><i class="fa-solid fa-truck me-2"></i>IOTDelivery</a>
                </div>
                <!-- [ Alert Registrasi Berhasil ] start -->
                @if (session()->has('register_success'))
                    <div class="row mt-4 pt-4 d-flex justify-content-center">
                        <div class="col-lg-12"> 
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>{{ session('register_success') }}</strong> 
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    </div>
                @endif<!-- [ Alert Registrasi Berhasil ] end -->

                <!-- [ Alert Login Gagal ] start -->
                @if (session()->has('login_failed'))
                    <div class="row mt-4 pt-4 d-flex justify-content-center">
                        <div class="col-lg-12"> 
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ session('login_failed') }}</strong> 
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    </div>
                @endif<!-- [ Alert Login Gagal ] end -->
                
                <div class="card my-5">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-end mb-4">
                            <h3 class="mb-0"><b>Login</b></h3>
                            <a href="/register" class="link-primary">Don't have an account?</a>
                        </div>
                        <form action="/login" method="post">
                            @method('post')
                            @csrf
                            <div class="form-group mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" name="email" id="email" value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>                                           
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                            </div>
                            {{-- <div class="d-flex mt-1 justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input input-primary" type="checkbox" id="customCheckc1" checked="">
                                    <label class="form-check-label text-muted" for="customCheckc1">Keep me sign in</label>
                                </div>
                                <h5 class="text-secondary f-w-400">Forgot Password?</h5>
                            </div> --}}
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                        {{-- <div class="saprator mt-3">
                            <span>Login with</span>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="d-grid">
                                    <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                                        <img src="{{ asset('assets/templates/Mantis-Bootstrap-1.0.0/images/authentication/google.svg') }}" alt="img"> <span class="d-none d-sm-inline-block"> Google</span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-grid">
                                    <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                                        <img src="{{ asset('assets/templates/Mantis-Bootstrap-1.0.0/images/authentication/twitter.svg') }}" alt="img"> <span class="d-none d-sm-inline-block"> Twitter</span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-grid">
                                    <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                                        <img src="{{ asset('assets/templates/Mantis-Bootstrap-1.0.0/images/authentication/facebook.svg') }}" alt="img"> <span class="d-none d-sm-inline-block"> Facebook</span>
                                    </button>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="auth-footer row">
                <!-- <div class=""> -->
                    <div class="col my-1">
                        <p class="m-0">Copyright © <a href="#">Mr.TytoAlba</a></p>
                    </div>
                    <div class="col-auto my-1">
                        <ul class="list-inline footer-link mb-0">
                            <li class="list-inline-item"><a href="#">Home</a></li>
                            <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                            <li class="list-inline-item"><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                <!-- </div> -->
                </div>
            </div>
        </div>
    </div><!-- [ Main Content ] end -->

        <!-- Required Js -->
        <script src="{{ asset('assets/templates/Mantis-Bootstrap-1.0.0/js/plugins/popper.min.js') }}"></script>
        <script src="{{ asset('assets/templates/Mantis-Bootstrap-1.0.0/js/plugins/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/templates/Mantis-Bootstrap-1.0.0/js/plugins/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/templates/Mantis-Bootstrap-1.0.0/js/fonts/custom-font.js') }}"></script>
        <script src="{{ asset('assets/templates/Mantis-Bootstrap-1.0.0/js/pcoded.js') }}"></script>
        <script src="{{ asset('assets/templates/Mantis-Bootstrap-1.0.0/js/plugins/feather.min.js') }}"></script>

        <script>layout_change('light');</script>

        <script>change_box_container('false');</script>
        
        <script>layout_rtl_change('false');</script>
        
        <script>preset_change("preset-1");</script>
        
        <script>font_change("Public-Sans");</script>
    
    </body><!-- [Body] end -->
</html>