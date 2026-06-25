@extends('layouts.app')

@section('content')

<!-- HERO -->

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

@endsection