<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Jquery --}}
    <script src="{{ asset('assets/plugins/jquery/jquery-3.7.1.min.js')}}"></script>

    {{-- Bootstrap 5.3.2 CSS--}}
    <link rel="stylesheet" href="{{ asset('assets/templates/Mantis-Bootstrap-1.0.0/css/plugins/bootstrap.min.css') }}">

    {{-- fontawesome6.4.0 --}}
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free-6.4.0/css/all.min.css') }}">

    {{-- Icon Title --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('') }}">

    {{-- Style CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/templates/Carousel/css/style.css') }}">

    {{-- Other Library --}}
    @yield('headLibrary')
  </head>
  <body>
    <header class="fixed-top">
      <nav class="navbar navbar-expand-lg mx-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                {{-- <img src="{{ asset('assets/img/icons/community.PNG') }}" class="me-2 mb-1" alt="Bootstrap" width="30" height="24">IOTRukunWarga --}}
                <i class="fa-solid fa-truck me-2"></i>IOTDelivery
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/"><i class="fa-solid fa-house"></i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Komunitas
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Komunitas Kurir</a></li>
                            <li><a class="dropdown-item" href="#">Komunitas Warehouse</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Informasi
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Sewa Gudang</a></li>
                            <li><a class="dropdown-item" href="#">Ekspedisi dan Mitra</a></li>
                            <li><a class="dropdown-item" href="#">Info Loker</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user"></i>
                        </a>
                        <ul class="dropdown-menu">
                            @auth
                            {{-- User ter-authentifikasi -- start --}}
                                <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                                <form action="/logout" method="post">
                                    @method('post')
                                    @csrf
                                    <li><button type="submit" class="dropdown-item">Logout</button></li>
                                </form>
                            {{-- User ter-authentifikasi -- end --}}
                            @else 
                            {{-- User belum ter-authentifikasi -- start --}}
                                <li><a class="dropdown-item" href="/login">Login</a></li>
                                <li><a class="dropdown-item" href="/register">Resgistrasi</a></li>{{-- User belum ter-authentifikasi -- end --}}
                            @endauth
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
      </nav>
    </header>

    <main>
        {{-- Hero --}}
        @yield('hero')
        {{-- /. hero --}}

        {{-- tentangApplikasi --}}
        <section class="tentangKepengurusan pt-5 pb-5">
            <div class="container">
                <div class="text-center">
                    <h4 class="mb-4">IOT Delivery App</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias inventore saepe ipsum adipisci ea voluptate magni aliquid reiciendis hic perferendis, sit, veniam blanditiis dolores nam nostrum voluptatibus explicabo, nisi ut quas voluptas quaerat fugiat dolore. Assumenda, quis qui eos iste asperiores eaque perspiciatis quaerat dolor laborum deserunt necessitatibus ab voluptates.
                    </p>
                    <button class="btn btn-outline-primary"><i class="fa-solid fa-circle-info me-2"></i>Lihat Detail</button>
                </div>
            </div>
        </section>
    </main>
    
    {{-- Footer --}}
    @yield('footer')
    {{-- /. footer --}}

    @yield('JavaScript')

    {{-- Bootstrap 5.3.2 JS--}}
    <script src="{{ asset('assets/templates/Mantis-Bootstrap-1.0.0/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/templates/Mantis-Bootstrap-1.0.0/js/plugins/bootstrap.bundle.min.js') }}"></script>
  </body>
</html>