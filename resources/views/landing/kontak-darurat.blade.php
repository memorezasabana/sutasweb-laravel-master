@extends('master')

@section('title', 'Kontak Darurat Bencana - Surabaya')

@section('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center" style="background-image: url('');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2>Kontak Darurat</h2>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="{{ url('/') }}">Beranda</a></li>
                        <li>Kontak Darurat</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container py-4">
            <div class="section-header">
                <h2>Kontak Darurat Bencana</h2>
                <p>Informasi kontak darurat yang dapat dihubungi saat terjadi bencana di Surabaya.</p>
            </div>

            <div class="row gy-4">
                <div class="col-lg-4">
                    <div class="info-box card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-telephone-fill text-primary fs-3"></i>
                                <div class="ms-3">
                                    <h3>Telepon Darurat</h3>
                                    <ul>
                                        <li><strong>Polisi:</strong> 110</li>
                                        <li><strong>Ambulans:</strong> 118</li>
                                        <li><strong>Pemadam Kebakaran:</strong> 113</li>
                                        <li><strong>BNPB:</strong> (031) 8430313</li>
                                        <li><strong>BPBD:</strong> (031) 8495444</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="info-box card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-geo-alt-fill text-primary fs-3"></i>
                                <div class="ms-3">
                                    <h3>Alamat Kantor BPBD Surabaya</h3>
                                    <address>
                                        Jl. Jemursari Timur II No.2,<br>
                                        Jemur Wonosari, Kec. Wonocolo,<br>
                                        Surabaya, Jawa Timur 60237
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="info-box card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-envelope-fill text-primary fs-3"></i>
                                <div class="ms-3">
                                    <h3>Email dan Media Sosial</h3>
                                    <ul>
                                        <li><strong>Email:</strong> <a href="mailto:info@bpbd.surabaya.go.id">info@bpbd.surabaya.go.id</a></li>
                                        <li><strong>Twitter:</strong> <a href="https://twitter.com/bpbdsurabaya" target="_blank">@bpbdsurabaya</a></li>
                                        <li><strong>Facebook:</strong> <a href="https://www.facebook.com/bpbdsurabaya" target="_blank">BPBD Surabaya</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection