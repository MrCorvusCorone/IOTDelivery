<!DOCTYPE html>
<html lang="en">
    <!-- [Head] start -->
    <head>
        <title>Register | IOTDelivery</title>
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
        <link rel="stylesheet" href="{{ ('assets/templates/Mantis-Bootstrap-1.0.0/css/style.css') }}" id="main-style-link" >
        <link rel="stylesheet" href="{{ ('assets/templates/Mantis-Bootstrap-1.0.0/css/style-preset.css') }}" >

    </head><!-- [Head] end -->

    <!-- [Body] Start -->
    <body>
        <!-- [ Pre-loader ] start -->
        <div class="loader-bg">
            <div class="loader-track">
                <div class="loader-fill"></div>
            </div>
        </div><!-- [ Pre-loader ] End -->

        <!-- [ Main Content ] start -->
        <div class="auth-main">
            <div class="auth-wrapper v3">
                <div class="auth-form">
                    <div class="auth-header">
                        {{-- <a href="#"><img src="{{ asset('assets/templates/Mantis-Bootstrap-1.0.0/images/logo-dark.svg') }}" alt="img"></a> --}}
                        <a href="#"><i class="fa-solid fa-truck me-2"></i>IOTDelivery</a>
                    </div>
                    <div class="card my-5">
                        <form action="/register" method="post">
                            @method('post')
                            @csrf
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-end mb-4">
                                    <h3 class="mb-0"><b>Register</b></h3>
                                    <a href="/login" class="link-primary">Already have an account?</a>
                                </div>
                                <div class="row">                            
                                    <div class="form-group mb-3">
                                        <label class="form-label">User Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name" id="name" value="{{ old('name') }}">
                                        @error('name')
                                             <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>                                           
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Email Address*</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" name="email" id="email" value="{{ old('email') }}">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" id="password">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>                                           
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Retype Password</label>
                                    <input type="password" class="form-control @error('retypepassword') is-invalid @enderror" placeholder="Retype Password" name="retypepassword" id="retypepassword">
                                    @error('retypepassword')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>                                           
                                    @enderror
                                </div>
                                <p class="mt-4 text-sm text-muted">By Signing up, you agree to our <a href="#" class="text-primary"> Terms of Service </a> and <a href="#" class="text-primary"> Privacy Policy</a></p>
                                <div class="d-grid mt-3">
                                    <button type="submit" class="btn btn-primary">Create Account</button>
                                </div>
                                {{-- <div class="saprator mt-3">
                                    <span>Sign up with</span>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="d-grid">
                                            <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                                                <img src="{{ asset('assets/templates/Mantis-Bootstrap-1.0.0/images/authentication/google.svg') }}" alt="img"> 
                                                <span class="d-none d-sm-inline-block"> Google</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="d-grid">
                                            <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                                                <img src="{{ asset('assets/templates/Mantis-Bootstrap-1.0.0/images/authentication/twitter.svg') }}" alt="img"> 
                                                <span class="d-none d-sm-inline-block"> Twitter</span>
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
                                </div>                 --}}
                            </div>
                        </form>
                    </div>
                    <div class="auth-footer row">
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
            
        {{-- <div class="offcanvas pct-offcanvas offcanvas-end" tabindex="-1" id="offcanvas_pc_layout">
            <div class="offcanvas-header bg-primary">
                <h5 class="offcanvas-title text-white">Mantis Customizer</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="pct-body" style="height: calc(100% - 60px)">
                <div class="offcanvas-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a class="btn border-0 text-start w-100" data-bs-toggle="collapse" href="#pctcustcollapse1">
                                <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <div class="avtar avtar-xs bg-light-primary">
                                    <i class="ti ti-layout-sidebar f-18"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-1">Theme Layout</h6>
                                    <span>Choose your layout</span>
                                </div>
                                <i class="ti ti-chevron-down"></i>
                                </div>
                            </a>
                            <div class="collapse show" id="pctcustcollapse1">
                                <div class="pct-content">
                                    <div class="pc-rtl">
                                        <p class="mb-1">Direction</p>
                                        <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="layoutmodertl">
                                        <label class="form-check-label" for="layoutmodertl">RTL</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <a class="btn border-0 text-start w-100" data-bs-toggle="collapse" href="#pctcustcollapse2">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avtar avtar-xs bg-light-primary">
                                            <i class="ti ti-brush f-18"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Theme Mode</h6>
                                        <span>Choose light or dark mode</span>
                                    </div>
                                    <i class="ti ti-chevron-down"></i>
                                </div>
                            </a>
                            <div class="collapse show" id="pctcustcollapse2">
                                <div class="pct-content">
                                    <div class="theme-color themepreset-color theme-layout">
                                        <a href="#!" class="active" onclick="layout_change('light')" data-value="false">
                                            <span><img src="{{ asset('assets/templates/Mantis-Bootstrap-1.0.0/images/customization/default.svg') }}" alt="img"></span>
                                            <span>Light</span>
                                        </a>
                                        <a href="#!" class="" onclick="layout_change('dark')" data-value="true">
                                            <span><img src="{{ asset('assets/templates/Mantis-Bootstrap-1.0.0/images/customization/dark.svg') }}" alt="img"></span>
                                            <span>Dark</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <a class="btn border-0 text-start w-100" data-bs-toggle="collapse" href="#pctcustcollapse3">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avtar avtar-xs bg-light-primary">
                                            <i class="ti ti-color-swatch f-18"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Color Scheme</h6>
                                        <span>Choose your primary theme color</span>
                                    </div>
                                    <i class="ti ti-chevron-down"></i>
                                </div>
                            </a>
                            <div class="collapse show" id="pctcustcollapse3">
                                <div class="pct-content">
                                    <div class="theme-color preset-color">
                                        <a href="#!" class="active" data-value="preset-1">
                                            <span><img src="{{ asset('assets/templates/Mantis-Bootstrap-1.0.0/images/customization/theme-color.svg') }}" alt="img"></span>
                                            <span>Theme 1</span>
                                        </a>
                                        <a href="#!" class="" data-value="preset-2">
                                            <span><img src="{{ asset('assets/templates/Mantis-Bootstrap-1.0.0/images/customization/theme-color.svg') }}" alt="img"></span>
                                            <span>Theme 2</span>
                                        </a>
                                        <a href="#!" class="" data-value="preset-3">
                                            <span><img src="{{ asset('assets/templates/Mantis-Bootstrap-1.0.0/images/customization/theme-color.svg') }}" alt="img"></span>
                                            <span>Theme 3</span>
                                        </a>
                                        <a href="#!" class="" data-value="preset-4">
                                            <span><img src="{{ asset('assets/templates/Mantis-Bootstrap-1.0.0/images/customization/theme-color.svg') }}" alt="img">
                                            </span><span>Theme 4</span>
                                        </a>
                                        <a href="#!" class="" data-value="preset-5">
                                            <span><img src="{{ asset('assets/templates/Mantis-Bootstrap-1.0.0/images/customization/theme-color.svg') }}" alt="img"></span>
                                            <span>Theme 5</span>
                                        </a>
                                        <a href="#!" class="" data-value="preset-6">
                                            <span><img src="{{ asset('assets/templates/Mantis-Bootstrap-1.0.0/images/customization/theme-color.svg') }}" alt="img"></span>
                                            <span>Theme 6</span>
                                        </a>
                                        <a href="#!" class="" data-value="preset-7">
                                            <span><img src="{{ asset('assets/templates/Mantis-Bootstrap-1.0.0/images/customization/theme-color.svg') }}" alt="img"></span>
                                            <span>Theme 7</span>
                                        </a>
                                        <a href="#!" class="" data-value="preset-8">
                                            <span><img src="{{ asset('assets/templates/Mantis-Bootstrap-1.0.0/images/customization/theme-color.svg') }}" alt="img"></span>
                                            <span>Theme 8</span>
                                        </a>
                                        <a href="#!" class="" data-value="preset-9">
                                            <span><img src="{{ asset('assets/templates/Mantis-Bootstrap-1.0.0/images/customization/theme-color.svg') }}" alt="img"></span>
                                            <span>Theme 9</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item pc-boxcontainer">
                            <a class="btn border-0 text-start w-100" data-bs-toggle="collapse" href="#pctcustcollapse4">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avtar avtar-xs bg-light-primary">
                                            <i class="ti ti-border-inner f-18"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Layout Width</h6>
                                        <span>Choose fluid or container layout</span>
                                    </div>
                                    <i class="ti ti-chevron-down"></i>
                                </div>
                            </a>
                            <div class="collapse show" id="pctcustcollapse4">
                                <div class="pct-content">
                                    <div class="theme-color themepreset-color boxwidthpreset theme-container">
                                        <a href="#!" class="active" onclick="change_box_container('false')" data-value="false">
                                            <span><img src="{{ asset('assets/templates/Mantis-Bootstrap-1.0.0/images/customization/default.svg') }}" alt="img"></span>
                                            <span>Fluid</span>
                                        </a>
                                        <a href="#!" class="" onclick="change_box_container('true')" data-value="true">
                                            <span><img src="{{ asset('assets/templates/Mantis-Bootstrap-1.0.0/images/customization/container.svg') }}" alt="img">
                                            </span><span>Container</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <a class="btn border-0 text-start w-100" data-bs-toggle="collapse" href="#pctcustcollapse5">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avtar avtar-xs bg-light-primary">
                                            <i class="ti ti-typography f-18"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Font Family</h6>
                                        <span>Choose your font family.</span>
                                    </div>
                                    <i class="ti ti-chevron-down"></i>
                                </div>
                            </a>
                            <div class="collapse show" id="pctcustcollapse5">
                                <div class="pct-content">
                                    <div class="theme-color fontpreset-color">
                                        <a href="#!" class="active" onclick="font_change('Public-Sans')" data-value="Public-Sans"><span>Aa</span><span>Public Sans</span></a>
                                        <a href="#!" class="" onclick="font_change('Roboto')" data-value="Roboto"><span>Aa</span><span>Roboto</span></a>
                                        <a href="#!" class="" onclick="font_change('Poppins')" data-value="Poppins"><span>Aa</span><span>Poppins</span></a>
                                        <a href="#!" class="" onclick="font_change('Inter')" data-value="Inter"><span>Aa</span><span>Inter</span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="collapse show">
                                <div class="pct-content">
                                    <div class="d-grid">
                                        <button class="btn btn-light-danger" id="layoutreset">Reset Layout</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div> --}}
    </body><!-- [Body] end -->
</html>