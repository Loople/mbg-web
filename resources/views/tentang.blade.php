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
<!-- HERO -->

<section
    style="
    min-height:70vh;
    background:
    linear-gradient(
    rgba(0,0,0,.65),
    rgba(0,0,0,.65)
    ),
    url('{{ asset('images/tentang-hero.jpg') }}');
    background-size:cover;
    background-position:center;
    display:flex;
    align-items:center;
">

    <div class="container text-center text-white">

        <span
            class="badge bg-primary px-3 py-2 mb-4">

            Tentang Program MBG

        </span>

        <h1
            class="display-3 fw-bold">

            Membangun Generasi Indonesia Sehat

        </h1>

        <p
            class="lead mt-4">

            Program Makan Bergizi Gratis merupakan
            langkah strategis dalam meningkatkan
            kualitas sumber daya manusia Indonesia.

        </p>

    </div>

</section>

<!-- TENTANG -->

<section class="section-space">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6">

                <img
                    src="{{ asset('images/gallery1.jpg') }}"
                    class="img-fluid rounded-4 shadow">

            </div>

            <div class="col-lg-6">

                <span
                    class="badge bg-primary mb-3">

                    Tentang MBG

                </span>

                <h2
                    class="section-title">

                    Apa Itu MBG?

                </h2>

                <p class="mt-4">

                    Program Makan Bergizi Gratis (MBG)
                    adalah program nasional yang bertujuan
                    meningkatkan kualitas gizi peserta didik
                    melalui penyediaan makanan sehat,
                    aman dan bergizi.

                </p>

                <p>

                    Program ini diharapkan mampu
                    meningkatkan kesehatan,
                    mendukung proses belajar,
                    dan memperkuat kualitas generasi muda Indonesia.

                </p>

            </div>

        </div>

    </div>

</section>

<!-- VISI MISI -->

<section
    class="section-space bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <h2
                class="section-title">

                Visi dan Misi

            </h2>

        </div>

        <div class="row g-4">

            <div class="col-lg-6">

                <div class="glass-card p-5 h-100">

                    <h3
                        class="fw-bold text-primary">

                        Visi

                    </h3>

                    <p class="mt-4">

                        Mewujudkan generasi Indonesia
                        yang sehat, cerdas,
                        unggul dan produktif melalui
                        pemenuhan gizi berkualitas.

                    </p>

                </div>

            </div>

            <div class="col-lg-6">

                <div class="glass-card p-5 h-100">

                    <h3
                        class="fw-bold text-primary">

                        Misi

                    </h3>

                    <ul class="mt-4">

                        <li>
                            Meningkatkan kualitas gizi peserta didik.
                        </li>

                        <li>
                            Mendukung kesehatan dan pertumbuhan anak.
                        </li>

                        <li>
                            Mengurangi risiko stunting.
                        </li>

                        <li>
                            Mendukung prestasi belajar siswa.
                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- TUJUAN -->

<section class="section-space">

    <div class="container">

        <div class="text-center mb-5">

            <h2
                class="section-title">

                Tujuan Program

            </h2>

        </div>

        <div class="row g-4">

            <div class="col-lg-3">

                <div class="card feature-card h-100">

                    <div class="card-body text-center p-4">

                        <div class="feature-icon">

                            <i class="bi bi-heart-pulse"></i>

                        </div>

                        <h5 class="mt-4">

                            Kesehatan

                        </h5>

                        <p>

                            Mendukung kesehatan peserta didik.

                        </p>

                    </div>

                </div>

            </div>

            <div class="col-lg-3">

                <div class="card feature-card h-100">

                    <div class="card-body text-center p-4">

                        <div class="feature-icon">

                            <i class="bi bi-book"></i>

                        </div>

                        <h5 class="mt-4">

                            Pendidikan

                        </h5>

                        <p>

                            Membantu meningkatkan konsentrasi belajar.

                        </p>

                    </div>

                </div>

            </div>

            <div class="col-lg-3">

                <div class="card feature-card h-100">

                    <div class="card-body text-center p-4">

                        <div class="feature-icon">

                            <i class="bi bi-shield-check"></i>

                        </div>

                        <h5 class="mt-4">

                            Pencegahan

                        </h5>

                        <p>

                            Membantu mengurangi risiko stunting.

                        </p>

                    </div>

                </div>

            </div>

            <div class="col-lg-3">

                <div class="card feature-card h-100">

                    <div class="card-body text-center p-4">

                        <div class="feature-icon">

                            <i class="bi bi-people"></i>

                        </div>

                        <h5 class="mt-4">

                            SDM Unggul

                        </h5>

                        <p>

                            Mendukung generasi Indonesia masa depan.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ALUR -->

<section
    class="section-space bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <h2
                class="section-title">

                Alur Distribusi MBG

            </h2>

        </div>

        <div class="row text-center g-4">

            <div class="col-lg">

                <div class="glass-card p-4">

                    <i class="bi bi-house-fill fs-1 text-primary"></i>

                    <h5 class="mt-3">
                        SPPG
                    </h5>

                </div>

            </div>

            <div class="col-lg">

                <div class="glass-card p-4">

                    <i class="bi bi-box-seam fs-1 text-primary"></i>

                    <h5 class="mt-3">
                        Produksi
                    </h5>

                </div>

            </div>

            <div class="col-lg">

                <div class="glass-card p-4">

                    <i class="bi bi-truck fs-1 text-primary"></i>

                    <h5 class="mt-3">
                        Distribusi
                    </h5>

                </div>

            </div>

            <div class="col-lg">

                <div class="glass-card p-4">

                    <i class="bi bi-building fs-1 text-primary"></i>

                    <h5 class="mt-3">
                        Sekolah
                    </h5>

                </div>

            </div>

            <div class="col-lg">

                <div class="glass-card p-4">

                    <i class="bi bi-person-check fs-1 text-primary"></i>

                    <h5 class="mt-3">
                        Penerima
                    </h5>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- GALERI -->

<section class="section-space">

    <div class="container">

        <div class="text-center mb-5">

            <h2
                class="section-title">

                Galeri Program

            </h2>

        </div>

        <div class="row g-4">

            @for($i=1; $i<=6; $i++)

            <div class="col-md-4">
                 <div class="ratio ratio-1x1 overflow-hidden rounded shadow">
                    <img
                        src="{{ asset('images/gallery'.$i.'.jpg') }}"
                        class="img-fluid rounded-4 shadow w-100 h-100 object-fit-cover">
                </div>
            </div>

            @endfor

        </div>

    </div>

</section>

<!-- CTA -->

<section class="container mb-5">

    <div class="cta-box p-5 text-center">

        <h2
            class="fw-bold">

            Bersama Mewujudkan Indonesia Sehat

        </h2>

        <p class="mt-3">

            Membangun generasi unggul melalui
            Program Makan Bergizi Gratis.

        </p>

        <a
            href="/informasi"
            class="btn btn-light btn-lg rounded-pill px-5">

            Lihat Informasi

        </a>

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