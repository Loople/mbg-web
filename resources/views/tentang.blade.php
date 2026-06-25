@extends('layouts.app')

@section('content')

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

@endsection