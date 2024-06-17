@extends('master')
@section('title', 'Panduan Evakuasi Bencana')

@section('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center" style="background-image: url('');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2>Pannduan Evakuasi</h2>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="{{ url('/') }}">Beranda</a></li>
                        <li>Panduan Evakuasi</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Breadcrumbs -->

    <!-- ======= Evacuation Guide Section ======= -->
    <section id="evacuation-guide" class="evacuation-guide">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Panduan Evakuasi Bencana</h2>
                <p>Informasi dan panduan langkah-langkah evakuasi yang harus dilakukan saat terjadi bencana.</p>
            </div>

            <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                    <div class="guide-box card" style="background: #fff; border: none; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                        <div class="card-body">
                            <h4 class="card-title">Evakuasi Saat Gempa Bumi</h4>
                            <ul>
                                <li>Segera keluar dari bangunan.</li>
                                <li>Cari tempat terbuka yang aman.</li>
                                <li>Jauhi bangunan tinggi, pohon, dan tiang listrik.</li>
                                <li>Tetap tenang dan jangan panik.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="guide-box card" style="background: #fff; border: none; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                        <div class="card-body">
                            <h4 class="card-title">Evakuasi Saat Banjir</h4>
                            <ul>
                                <li>Pindahkan barang-barang berharga ke tempat yang lebih tinggi.</li>
                                <li>Pindah ke tempat yang lebih tinggi atau ke posko evakuasi.</li>
                                <li>Matikan aliran listrik di rumah.</li>
                                <li>Ikuti arahan dari petugas evakuasi.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="guide-box card" style="background: #fff; border: none; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                        <div class="card-body">
                            <h4 class="card-title">Evakuasi Saat Kebakaran</h4>
                            <ul>
                                <li>Segera keluar dari bangunan melalui jalur evakuasi.</li>
                                <li>Tutup mulut dan hidung dengan kain basah untuk menghindari asap.</li>
                                <li>Jangan gunakan lift, gunakan tangga darurat.</li>
                                <li>Hubungi pemadam kebakaran di 113.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- End Guide Container -->

        </div>
    </section><!-- End Evacuation Guide Section -->

</main><!-- End #main -->
@endsection
