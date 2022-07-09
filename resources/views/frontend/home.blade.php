@extends('layouts.main')

@section('content')
    <div class="div">
        <div class="row">
            <div class="col-md-6">
                <div class="jumbotron">
                    <h1 class="display-4 fw-bold">Selamat Datang <br>
                        <span class="text-primary">Online School Library!</span>
                    </h1>
                    <p class="lead">Online School Library adalah aplikasi peminjaman buku secara online yang memudahkan
                        siswa untuk meminjam buku.</p>
                    <a id="button" class="btn btn-primary btn-lg" href="/web/profil" role="button">Daftar Buku</a>
                </div>
            </div>
            <div class="col-md-6 my-3">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner rounded">
                        <div class="carousel-item active">
                            <img src="/img/slideutama.png"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/slideutama1.png"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/slideutama2.png"
                                class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100 rounded"
                            src="https://technext.github.io/elearning/img/about.jpg" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Online School Library!</h1>
                    <p class="mb-4">Online School Library adalah situs web peminjaman buku online yang diperkhususkan
                        untuk siswa.</p>
                    <p class="mb-4">Buku yang kami sediakan, yaitu :</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Matematika</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Bahasa Indonesia</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Bahasa Inggris</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Buku UN</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Buku Bahasa Pemrograman</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Buku Pemrograman Algoritma
                            </p>
                        </div>
                    </div>
                    <a class="btn btn-primary" href="./syarat">Persyaratan</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Team Start -->

    <div class="row my-3">
        <h4 class="fw-bold text-center my-3">DAFTAR BUKU</h3>
            <div class="col-md-3">
                <div class="card rounded mt-3" style="width: 16rem;">
                    <img src="./img/1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Erlangga Fokus UN 2022</h5>
                        <p class="card-text">Penulis : Sukismo, dkk</p>
                        <p class="card-text">Stok Buku : 20</p>
                        <a href="./img/1.png" target="_black" class="">download image</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card rounded mt-3" style="width: 16rem;">
                    <img src="./img/2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">UTBK SBMPTN SOSHUM 2022</h5>
                        <p class="card-text">Penulis : The King Eduka</p>
                        <p class="card-text">Stok Buku : 10</p>
                        <a href="./img/2.png" target="_black" class="">download image</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card rounded mt-2" style="width: 16rem;">
                    <img src="./img/3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Bahasa Pemrograman</h5>
                        <p class="card-text">Penulis : Suprapto</p>
                        <p class="card-text">Stok Buku : 5</p>
                        <a href="./img/3.png" target="_black" class="">download image</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card rounded mt-3" style="width: 16rem;">
                    <img src="./img/4.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Wabah dan Pandemi</h5>
                        <p class="card-text">Penulis : Meera Senthilingam</p>
                        <p class="card-text">Stok Buku : 3</p>
                        <a href="./img/4.png" target="_black" class="">download image</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card rounded mt-3" style="width: 16rem;">
                    <img src="./img/5.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Fun With English kelas 3 SD</h5>
                        <p class="card-text">Penulis : Rudi Trisno</p>
                        <p class="card-text">Stok Buku : 10</p>
                        <a href="./img/5.png" target="_black" class="">download image</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card rounded mt-3" style="width: 16rem;">
                    <img src="./img/6.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Hakikat, Urgensi dan Pembelajarannya</h5>
                        <p class="card-text">Penulis : Asip Suryadi, dkk</p>
                        <p class="card-text">Stok Buku : 15</p>
                        <a href="./img/6.png" target="_black" class="">download image</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card rounded mt-3" style="width: 16rem;">
                    <img src="./img/7.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">KSN Matematika SD</h5>
                        <p class="card-text">Penulis : Muslihun, S.Si., M.Si.</p>
                        <p class="card-text">Stok Buku : 20</p>
                        <a href="./img/7.png" target="_black" class="">download image</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card rounded mt-3" style="width: 16rem;">
                    <img src="./img/8.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Mahir Bahasa Pemrograman PHP</h5>
                        <p class="card-text">Penulis : Sarwandi</p>
                        <p class="card-text">Stok Buku : 10</p>
                        <a href="./img/8.png" target="_black" class="">download image</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card rounded mt-3" style="width: 16rem;">
                    <img src="./img/9.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ujian Sekolah AKM, SK & SLB SD/MI 2022</h5>
                        <p class="card-text">Penulis : Tim Edu Penguin</p>
                        <p class="card-text">Stok Buku : 10</p>
                        <a href="./img/9.png" target="_black" class="">download image</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card rounded mt-3" style="width: 16rem;">
                    <img src="./img/10.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">UTBK Saintek 2022</h5>
                        <p class="card-text">Penulis : Tim Master Eduka</p>
                        <p class="card-text">Stok Buku : 15</p>
                        <a href="./img/10.png" target="_black" class="">download image</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card rounded mt-3" style="width: 16rem;">
                    <img src="./img/11.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tes Masuk Sekolah Kedinasan 2022</h5>
                        <p class="card-text">Penulis : Ika Siwi Tira Ardiyani</p>
                        <p class="card-text">Stok Buku : 30</p>
                        <a href="./img/11.png" target="_black" class="">download image</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card rounded mt-3" style="width: 16rem;">
                    <img src="./img/12.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Algoritma Pemrograman</h5>
                        <p class="card-text">Penulis : Rinaldi Munir</p>
                        <p class="card-text">Stok Buku : 15</p>
                        <a href="./img/12.png" target="_black" class="">download image</a>
                    </div>
                </div>
            </div>
    </div>
    <!-- Team End -->


    <!-- Back to Top -->
    <a href="/" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
@endsection
