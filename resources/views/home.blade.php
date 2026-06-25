<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MBG - Makan Bergizi Gratis</title>

    <meta name="description"
        content="Program Makan Bergizi Gratis Indonesia">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css"
        rel="stylesheet">

    <style>

        :root{
            --primary:#0D6EFD;
            --secondary:#084298;
            --dark:#071C3A;
            --light:#F8FAFF;
        }

        html{
            scroll-behavior:smooth;
        }

        body{
            font-family:'Segoe UI',sans-serif;
            background:#fff;
            overflow-x:hidden;
        }

        a{
            text-decoration:none;
        }

        /* NAVBAR */

        .navbar-custom{

            position:fixed;
            top:0;
            left:0;
            width:100%;

            z-index:9999;

            transition:.4s ease;

            padding:20px 0;

        }

        .navbar-scrolled{

            background:white;

            box-shadow:
            0 5px 25px rgba(0,0,0,.08);

            padding:12px 0;

        }

        .navbar-brand{

            font-size:32px;
            font-weight:800;
            color:white;

        }

        .navbar-scrolled .navbar-brand{

            color:var(--primary);

        }

        .navbar-custom .nav-link{

            color:white;
            font-weight:600;
            margin-left:20px;

        }

        .navbar-scrolled .nav-link{

            color:#222;

        }

        .nav-link:hover{

            color:var(--primary);

        }

        /* SECTION */

        .section-space{

            padding:110px 0;

        }

        .section-title{

            font-size:46px;
            font-weight:800;
            color:#071C3A;

        }

        .section-subtitle{

            color:#6c757d;

        }

        /* GLASS */

        .glass-card{

            background:
            rgba(255,255,255,.92);

            backdrop-filter:blur(12px);

            border-radius:25px;

            box-shadow:
            0 10px 40px rgba(0,0,0,.08);

        }

        /* FEATURE */

        .feature-card{

            border:none;

            border-radius:25px;

            transition:.4s;

            overflow:hidden;

            box-shadow:
            0 10px 30px rgba(0,0,0,.08);

        }

        .feature-card:hover{

            transform:translateY(-10px);

        }

        .feature-icon{

            width:80px;
            height:80px;

            margin:auto;

            display:flex;

            align-items:center;
            justify-content:center;

            border-radius:50%;

            background:#EEF5FF;

            color:var(--primary);

            font-size:36px;

        }

        /* FOOD */

        .food-card{

            border:none;

            border-radius:25px;

            overflow:hidden;

            transition:.4s;

            box-shadow:
            0 10px 30px rgba(0,0,0,.08);

        }

        .food-card:hover{

            transform:translateY(-10px);

        }

        .food-card img{

            height:240px;

            object-fit:cover;

        }

        /* NEWS */

        .news-card{

            border:none;

            border-radius:25px;

            overflow:hidden;

            transition:.4s;

            box-shadow:
            0 10px 30px rgba(0,0,0,.08);

        }

        .news-card:hover{

            transform:translateY(-10px);

        }

        /* CTA */

        .cta-box{

            background:
            linear-gradient(
            135deg,
            #0D6EFD,
            #084298
            );

            color:white;

            border-radius:40px;

        }

        /* FOOTER */

        footer{

            background:#071C3A;

            color:white;

        }

        .footer-title{

            font-weight:700;

            margin-bottom:20px;

        }

        .footer-link{

            display:block;

            color:#d9d9d9;

            margin-bottom:10px;

        }

        .footer-link:hover{

            color:white;

        }

        /* HERO WAVE */

        .wave{

            margin-top:-1px;

        }

        /* MOBILE */

        @media(max-width:991px){

            .navbar-custom{

                background:white;

            }

            .navbar-brand{

                color:var(--primary);

            }

            .navbar-custom .nav-link{

                color:#222;

                margin-left:0;

            }

            .section-title{

                font-size:34px;

            }

        }

    </style>

</head>

<body>

    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg navbar-custom">

        <div class="container">

            <a class="navbar-brand" href="/">

                MBG

            </a>

            <button
                class="navbar-toggler bg-white"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div
                class="collapse navbar-collapse"
                id="navbarNav">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">

                        <a class="nav-link"
                            href="/">

                            Beranda

                        </a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link"
                            href="/tentang">

                            Tentang

                        </a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link"
                            href="/informasi">

                            Informasi

                        </a>

                    </li>

                </ul>

            </div>

        </div>

    </nav>

<section
    class="position-relative d-flex align-items-center"
    style="
    min-height:100vh;
    background:
    linear-gradient(rgba(0,0,0,.55),rgba(0,0,0,.55)),
    url('{{ asset('images/home-hero.jpg') }}');
    background-size:cover;
    background-position:center;
">

    <div class="container">

        <div class="row">

            <div class="col-lg-7">

                <span
                    class="badge bg-primary px-3 py-2 mb-3">

                    Program Nasional

                </span>

                <h1
                    class="display-3 fw-bold text-white mb-4">

                    Makan Bergizi Gratis
                    Untuk Generasi Indonesia Emas

                </h1>

                <p
                    class="lead text-light mb-4">

                    Program MBG bertujuan meningkatkan
                    kualitas gizi peserta didik,
                    menekan angka stunting,
                    dan mendukung proses belajar
                    yang lebih optimal.

                </p>

                <a
                    href="/informasi"
                    class="btn btn-primary btn-lg px-4 me-2">

                    Lihat Informasi

                </a>

                <a
                    href="/tentang"
                    class="btn btn-outline-light btn-lg px-4">

                    Pelajari Program

                </a>

            </div>

        </div>

    </div>

</section>

<!-- STATISTIK -->

<section class="py-5 bg-white">

    <div class="container">

        <div class="row text-center g-4">

            <div class="col-md-3">

                <div class="glass-card p-4">

                    <h2 class="fw-bold text-primary">
                        10.000+
                    </h2>

                    <p class="mb-0">
                        Penerima Manfaat
                    </p>

                </div>

            </div>

            <div class="col-md-3">

                <div class="glass-card p-4">

                    <h2 class="fw-bold text-primary">
                        50+
                    </h2>

                    <p class="mb-0">
                        Sekolah
                    </p>

                </div>

            </div>

            <div class="col-md-3">

                <div class="glass-card p-4">

                    <h2 class="fw-bold text-primary">
                        12
                    </h2>

                    <p class="mb-0">
                        SPPG
                    </p>

                </div>

            </div>

            <div class="col-md-3">

                <div class="glass-card p-4">

                    <h2 class="fw-bold text-primary">
                        120+
                    </h2>

                    <p class="mb-0">
                        Distribusi
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- MENU MINGGUAN -->

<section class="section-space bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="section-title">

                Menu MBG Mingguan

            </h2>

            <p class="section-subtitle">

                Contoh menu bergizi yang didistribusikan.

            </p>

        </div>

        <div class="row g-4">

            <div class="col-lg-4">
                <div class="food-card card">
                    <img src="{{ asset('images/menu-senin.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h5>Senin</h5>
                        <p>Nasi, ayam, sayur, buah.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="food-card card">
                    <img src="{{ asset('images/menu-selasa.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h5>Selasa</h5>
                        <p>Nasi, ikan, sayur hijau.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="food-card card">
                    <img src="{{ asset('images/menu-rabu.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h5>Rabu</h5>
                        <p>Nasi, telur, tempe, buah.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- GALERI -->

<section class="section-space">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="section-title">

                Galeri Kegiatan

            </h2>

            <p class="section-subtitle">

                Dokumentasi pelaksanaan Program MBG.

            </p>

        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="ratio ratio-1x1 overflow-hidden rounded shadow">
                    <img src="{{ asset('images/gallery1.jpg') }}"
                        class="w-100 h-100 object-fit-cover">
                </div>
            </div>

            <div class="col-md-4">
                <div class="ratio ratio-1x1 overflow-hidden rounded shadow">
                    <img src="{{ asset('images/gallery2.jpg') }}"
                        class="w-100 h-100 object-fit-cover">
                </div>
            </div>

            <div class="col-md-4">
                <div class="ratio ratio-1x1 overflow-hidden rounded shadow">
                    <img src="{{ asset('images/gallery3.jpg') }}"
                        class="w-100 h-100 object-fit-cover">
                </div>
            </div>

            <div class="col-md-4">
                <div class="ratio ratio-1x1 overflow-hidden rounded shadow">
                    <img src="{{ asset('images/gallery4.jpg') }}"
                        class="w-100 h-100 object-fit-cover">
                </div>
            </div>

            <div class="col-md-4">
                <div class="ratio ratio-1x1 overflow-hidden rounded shadow">
                    <img src="{{ asset('images/gallery5.jpg') }}"
                        class="w-100 h-100 object-fit-cover">
                </div>
            </div>

            <div class="col-md-4">
                <div class="ratio ratio-1x1 overflow-hidden rounded shadow">
                    <img src="{{ asset('images/gallery6.jpg') }}"
                        class="w-100 h-100 object-fit-cover">
                </div>
            </div>

        </div>

    </div>

</section>

<!-- INFORMASI -->

<section class="section-space bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="section-title">

                Fakta MBG

            </h2>

        </div>

        <div class="row g-4">

            <div class="col-md-4">

                <div class="feature-card card h-100">

                    <div class="card-body text-center p-4">

                        <div class="feature-icon mb-3">

                            <i class="bi bi-heart-pulse"></i>

                        </div>

                        <h5>

                            Mendukung Kesehatan

                        </h5>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="feature-card card h-100">

                    <div class="card-body text-center p-4">

                        <div class="feature-icon mb-3">

                            <i class="bi bi-graph-up"></i>

                        </div>

                        <h5>

                            Mengurangi Stunting

                        </h5>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="feature-card card h-100">

                    <div class="card-body text-center p-4">

                        <div class="feature-icon mb-3">

                            <i class="bi bi-mortarboard"></i>

                        </div>

                        <h5>

                            Mendukung Pendidikan

                        </h5>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

    <footer class="pt-5">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4">

                    <h2 class="fw-bold">

                        MBG

                    </h2>

                    <p class="mt-3">

                        Program Makan Bergizi Gratis
                        untuk mendukung generasi Indonesia
                        yang sehat, cerdas dan produktif.

                    </p>

                </div>

                <div class="col-lg-2">

                    <h5 class="footer-title">

                        Navigasi

                    </h5>

                    <a href="/"
                        class="footer-link">

                        Beranda

                    </a>

                    <a href="/tentang"
                        class="footer-link">

                        Tentang

                    </a>

                    <a href="/informasi"
                        class="footer-link">

                        Informasi

                    </a>

                </div>

                <div class="col-lg-3">

                    <h5 class="footer-title">

                        Informasi

                    </h5>

                    <a href="#"
                        class="footer-link">

                        Menu Mingguan

                    </a>

                    <a href="#"
                        class="footer-link">

                        Lokasi SPPG

                    </a>

                    <a href="#"
                        class="footer-link">

                        Statistik

                    </a>

                </div>

                <div class="col-lg-3">

                    <h5 class="footer-title">

                        Kontak

                    </h5>

                    <p>

                        Baturaja, Indonesia

                    </p>

                    <p>

                        Loperkasa@gmail.com

                    </p>

                    <p>

                        (+62) 882-8615-4778

                    </p>

                </div>

            </div>

            <hr>

            <div class="text-center">

                © 2026 MBG - Makan Bergizi Gratis
            </div>
            <div class="text-center py-3" style='font-size: 24px;'>
            By M. Raka Perdiana
            </div>

        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>

        AOS.init({

            duration:1000,
            once:true

        });

        window.addEventListener('scroll',()=>{

            const navbar =
            document.querySelector('.navbar-custom');

            navbar.classList.toggle(
                'navbar-scrolled',
                window.scrollY > 50
            );

        });

    </script>

</body>

</html>