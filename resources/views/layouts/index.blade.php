<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <!-- Bootstrap -->
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('fonts/css/all.min.css') }}">
</head>
<body>
<div class="content">              
    <div class="content-body">   
        <nav class="navbar navbar-expand-lg d-flex fixed-top shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://dev.cekstore.com/assets/logo/logo-header.png" alt="" width="100" onclick="window.location='https://dev.cekstore.com'">
            </a>
            <div class="search-item">
                <div class="">
                        <div class="nav-item dropdown">
                            <div class="input-group search-bar" aria-haspopup="true" id="dropsearchdown" aria-expanded="false">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
                            <input type="text" name="q" placeholder="Cari..." id="searchProds" class="form-control input-box" autocomplete="off">
                        </div>
                    </div>
                </div>
            </div>
                    
            <div class="hasil-cari">
                <ul class="position-absolute resultsearch shadow dropdown-menu" aria-labelledby="dropsearchdown"></ul>
            </div>
            
            <button class="navbar-toggler border-0 d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span><i class="fa fa-bars-staggered text-light"></i></span>
            </button>

            <div class="offcanvas offcanvas-end w-75" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">
                        <img src="https://dev.cekstore.com/assets/logo/logo-header.png" alt="" width="100" onclick="window.location='https://dev.cekstore.com'">
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                    <div class="offcanvas-body d-lg-none eniv-menu-list">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link" href="https://dev.cekstore.com"><i class="fa-solid fa-house"></i> Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://dev.cekstore.com/cari"><i class="fa-solid fa-magnifying-glass"></i> Lacak Pesanan</a>
                            </li>
                            <div class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle text-white" id="dropdownMenuButton1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-calculator"></i> Calculator</a>
                                            <ul class="dropdown-menu dropdown-menu-dark shadow mb-2" aria-labelledby="dropdownMenu2">
                                            <li class="nav-item">
                                        <a href="https://dev.cekstore.com/hitungwr" class="dropdown-item text-white"><i class="fas fa-address-card"></i> Win Rate</a>
                                        </li>
                                        <li class="nav-item">
                                        <a href="https://dev.cekstore.com/hitungpointmw" class="dropdown-item text-white"><i class="fas fa-address-card"></i> Magic Wheel</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="https://dev.cekstore.com/hitungpointzodiac" class="dropdown-item text-white"><i class="fas fa-address-card"></i> Zodiac</a>
                                        </li>
                                        </ul>
                            </div>
                            <li class="nav-item">
                                <a class="nav-link" href="https://dev.cekstore.com/login"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
                            </li>                      
                        </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <hr>
        <footer class="footer mt-3">
            <div class="">
                <div class="row">
                    <div class="col-md-3 col-lg-4 p-4">
                            <img src="https://dev.cekstore.com/assets/logo/logo-header.png" alt="LOGO" class="logo-bawah w-50">
                            <div class="mt-2 ratakirikanan">
                            <p>dev.cekstore.com Top up Free Fire, Arena of Valor, Call of Duty Mobile dan berbagai game lainnya menggunakan Indomaret, Telkomsel, DANA, ShopeePay, QRIS dan Garema Shell Di Indonesia yang Tercepat, Termurah dan Terpercaya.</p>
                            </div>
                        </div>
                        
                    <div class="col-md-3 col-lg-4 p-4">
                    <h5 class="mt-2 mb-1">  Metode Pembayaran <a class="example-2"></a></h5>
                    <div class="mt-3">
                            <img src="{{ asset('images/payment/qris.webp') }}" class="cekstore-pgimg">
                            <img src="{{ asset('images/payment/OVO.webp') }}" class="cekstore-pgimg">
                            <img src="{{ asset('images/payment/Shopeepay.webp') }}" class="cekstore-pgimg">
                            <img src="{{ asset('images/payment/dana.png') }}" class="cekstore-pgimg">
                            <img src="{{ asset('images/payment/Gopay.webp') }}" class="cekstore-pgimg">
                            
                </div>
                    </div>
                    <div class="col-md-3 col-lg-2 p-4">
                    <h5 class="mt-2 mb-1">Site Map</h5>
                    <div class="mt-3">
                                <i class="fas fa-angle-right"></i> <i class="fa-solid fa-house"></i><a href="https://dev.cekstore.com" class="text-white text-decoration-none active"> Home</a><br>
                        <i class="fas fa-angle-right"></i> <i class="fa-solid fa-magnifying-glass"></i><a href="https://dev.cekstore.com/cari" class="text-white text-decoration-none ">
                        Lacak Pesanan</a><br>
                        <i class="fas fa-angle-right"></i> <i class="fa fa-list"></i><a href="https://dev.cekstore.com/daftar-harga" class="text-white text-decoration-none ">
                        Daftar Harga</a><br>
                        <i class="fas fa-angle-right"></i> <i class="fa-solid fa-scale-unbalanced-flip"></i><a href="https://dev.cekstore.com/legalitas" class="text-white text-decoration-none ">
                        Kebijakan</a><br>
                            </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid mt-2">
                <div class="row" id="footer-credit">
                <div class="col">
                    <div class="container mt-2 mb-2 text-center">
                    <small>Copyright © {{ date('Y') }} <a href="https://dev.cekstore.com" class="text-white text-decoration-none">{{ config('app.name') }}</a> All Rights Reserved</small>
                    </div>
                </div>
                </div>
            </div>
                        
            <section id="custom-social-proof" class="custom-social-proof">
                <div class="altumcode altumcode-bottom_left altumcode-clickable on-fadeIn" data-position="bottom_left" data-on-animation="fadeIn" data-off-animation="fadeOut" data-notification-id="323" style="display: block; bottom: 20px;">
                    <div role="dialog" class="altumcode-wrapper altumcode-wrapper-rounded altumcode-wrapper-shadow  altumcode-conversions-wrapper" style="font-family: inherit!important;background-color: var(--warna_3);border-width: 0px;border-color: #000;;">
                        <div class="altumcode-conversions-content" id="notif-message">
                            
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact -->
            <div class="fab-container">
            <div class="fab fab-icon-holder"  style="background-color: #fff;">
                <img src="{{ asset('images/callcenter.png') }}" style="width: 100%; height: auto; display: block; margin: 0 auto;">
            </div>
            <ul class="fab-options">
            <li>
                <a href="https://instagram.com/" class="text-decoration-none" target="_blank">
                    <div class="fab-icon-holder" style="background-color: #e61c6d;">
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                </a>
            </li>
            <li>
                <a href="https://wa.me/6282387508540?text=Hii%20min" class="text-decoration-none" target="_blank">
                    <div class="fab-icon-holder" style="background-color: #25D366;">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                </a>
            </li>
            <li>
                <a href="https://m.facebook.com/" class="text-decoration-none" target="_blank">
                    <div class="fab-icon-holder" style="background-color: #1877f2;">
                        <i class="fab fa-facebook"></i>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="act-btn-top text-decoration-none" target="_blank" style="display: none; background-color: #bd4cae; bottom: 19px;">
                    <i class="fas fa-angle-up mt-2"></i>
                </a>
            </li>
            
            
        </footer>

        <!-- Animated Background -->
        <div class="area">
            <ul class="circles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div> 
</div>        
</body>
</html>