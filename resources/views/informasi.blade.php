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
    url('{{ asset('images/informasi-hero.jpg') }}');
    background-size:cover;
    background-position:center;
    display:flex;
    align-items:center;
">

    <div class="container text-center text-white">

        <span class="badge bg-primary px-3 py-2 mb-4">
            Pusat Informasi MBG
        </span>

        <h1 class="display-3 fw-bold">
            Informasi Program MBG
        </h1>

        <p class="lead mt-4">
            Data distribusi, menu harian,
            lokasi SPPG dan statistik penerima.
        </p>

    </div>

</section>

<!-- STATISTIK -->

<section class="section-space">

    <div class="container">

        <div class="row g-4">

            <div class="col-md-3">

                <div class="glass-card p-4 text-center">

                    <h2 class="text-primary fw-bold">
                        10.245
                    </h2>

                    <p>
                        Penerima
                    </p>

                </div>

            </div>

            <div class="col-md-3">

                <div class="glass-card p-4 text-center">

                    <h2 class="text-primary fw-bold">
                        150
                    </h2>

                    <p>
                        Sekolah
                    </p>

                </div>

            </div>

            <div class="col-md-3">

                <div class="glass-card p-4 text-center">

                    <h2 class="text-primary fw-bold">
                        12
                    </h2>

                    <p>
                        SPPG
                    </p>

                </div>

            </div>

            <div class="col-md-3">

                <div class="glass-card p-4 text-center">

                    <h2 class="text-primary fw-bold">
                        3.250
                    </h2>

                    <p>
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

                Menu Mingguan MBG

            </h2>

        </div>

        <div class="row g-4">

            <div class="col-lg">

                <div class="food-card">

                    <img
                        src="{{ asset('images/menu-senin.jpg') }}"
                        class="w-100">

                    <div class="p-3">

                        <span class="badge bg-primary">
                            Senin
                        </span>

                        <h5 class="mt-3">
                            Nasi, Ayam, Sayur
                        </h5>

                    </div>

                </div>

            </div>

            <div class="col-lg">

                <div class="food-card">

                    <img
                        src="{{ asset('images/menu-selasa.jpg') }}"
                        class="w-100">

                    <div class="p-3">

                        <span class="badge bg-primary">
                            Selasa
                        </span>

                        <h5 class="mt-3">
                            Telur, Sayur, Buah
                        </h5>

                    </div>

                </div>

            </div>

            <div class="col-lg">

                <div class="food-card">

                    <img
                        src="{{ asset('images/menu-rabu.jpg') }}"
                        class="w-100">

                    <div class="p-3">

                        <span class="badge bg-primary">
                            Rabu
                        </span>

                        <h5 class="mt-3">
                            Ikan, Sayur, Susu
                        </h5>

                    </div>

                </div>

            </div>

            <div class="col-lg">

                <div class="food-card">

                    <img
                        src="{{ asset('images/menu-kamis.jpg') }}"
                        class="w-100">

                    <div class="p-3">

                        <span class="badge bg-primary">
                            Kamis
                        </span>

                        <h5 class="mt-3">
                            Daging, Sayur, Buah
                        </h5>

                    </div>

                </div>

            </div>

            <div class="col-lg">

                <div class="food-card">

                    <img
                        src="{{ asset('images/menu-jumat.jpg') }}"
                        class="w-100">

                    <div class="p-3">

                        <span class="badge bg-primary">
                            Jumat
                        </span>

                        <h5 class="mt-3">
                            Menu Sehat Lengkap
                        </h5>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- SPPG -->

<section class="section-space">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="section-title">

                Lokasi SPPG

            </h2>

        </div>

        <div class="row g-4">

            @foreach([
            'SPPG Baturaja Utara',
            'SPPG Baturaja Timur',
            'SPPG Lubuk Batang',
            'SPPG Pengandonan'
            ] as $sppg)

            <div class="col-md-3">

                <div class="feature-card card h-100">

                    <div class="card-body text-center p-4">

                        <div class="feature-icon">

                            <i class="bi bi-geo-alt-fill"></i>

                        </div>

                        <h5 class="mt-4">

                            {{ $sppg }}

                        </h5>

                    </div>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>

<!-- DISTRIBUSI -->

<section class="section-space bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="section-title">

                Distribusi Terbaru

            </h2>

        </div>

        <div class="glass-card p-4">

            <div class="table-responsive">

                <table class="table align-middle">

                    <thead>

                        <tr>

                            <th>Tanggal</th>
                            <th>SPPG</th>
                            <th>Sekolah</th>
                            <th>Penerima</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>01 Juli 2026</td>
                            <td>SPPG Baturaja Utara</td>
                            <td>SD Negeri 01</td>
                            <td>500</td>

                        </tr>

                        <tr>

                            <td>02 Juli 2026</td>
                            <td>SPPG Baturaja Timur</td>
                            <td>SMP Negeri 02</td>
                            <td>450</td>

                        </tr>

                        <tr>

                            <td>03 Juli 2026</td>
                            <td>SPPG Pengandonan</td>
                            <td>SMA Negeri 01</td>
                            <td>350</td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</section>

<!-- STATISTIK CHART -->

<section class="section-space">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="section-title">

                Statistik Penerima

            </h2>

        </div>

        <div class="glass-card p-4">

            <canvas id="penerimaChart"></canvas>

        </div>

    </div>

</section>

<!-- FAQ -->

<section class="section-space bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="section-title">

                Pertanyaan Umum

            </h2>

        </div>

        <div class="accordion" id="faq">

            <div class="accordion-item">

                <h2 class="accordion-header">

                    <button
                        class="accordion-button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faq1">

                        Apa itu MBG?

                    </button>

                </h2>

                <div
                    id="faq1"
                    class="accordion-collapse collapse show">

                    <div class="accordion-body">

                        Program Makan Bergizi Gratis
                        untuk mendukung kesehatan dan
                        pendidikan peserta didik.

                    </div>

                </div>

            </div>

            <div class="accordion-item">

                <h2 class="accordion-header">

                    <button
                        class="accordion-button collapsed"
                        data-bs-toggle="collapse"
                        data-bs-target="#faq2">

                        Siapa penerima MBG?

                    </button>

                </h2>

                <div
                    id="faq2"
                    class="accordion-collapse collapse">

                    <div class="accordion-body">

                        PAUD, SD, SMP dan SMA.

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection

@push('scripts')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

const ctx =
document.getElementById('penerimaChart');

new Chart(ctx, {

    type: 'bar',

    data: {

        labels: [

            'PAUD',
            'SD',
            'SMP',
            'SMA'

        ],

        datasets: [{

            label: 'Jumlah Penerima',

            data: [

                1500,
                5000,
                2500,
                1245

            ]

        }]

    },

    options: {

        responsive: true

    }

});

</script>

@endpush