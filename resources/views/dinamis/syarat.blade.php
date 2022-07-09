@extends('layouts.main')

@section('content')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h1 class="mb-5">Persyaratan Peminjaman Buku di Online School Library</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="card">
                        <p><i class="bi bi-circle-fill"></i> 
                            Berdomisili di kota Lhokseumawe.
                        </p>
                        <p>
                            <i class="bi bi-circle-fill"></i>
                            Bersedia memberikan data informasi lengkap sebagai konfirmasi ke petugas perpustakaan nasional.
                            Data informasi tersebut berupa nama, alamat, nomor HP, dan email.
                        </p>
                        <p>
                            <i class="bi bi-circle-fill"></i>
                            Waktu peminjaman selama 6 hari.
                        </p>
                        <p>
                            <i class="bi bi-circle-fill"></i>
                            Bagi peminjam yang melanggar aturan akan dikenakan sanksi, terutama bagi yang terlambat mengembalikan buku, mengalami kerusakan pada buku, atau kehilangan buku.
                        </p>
                        <p>
                            <i class="bi bi-circle-fill"></i>
                            Jika dalam waktu 14 hari peminjam tetap tidak mengembalikan buku, petugas perpustakaan akan datang ke alamat peminjam.
                        </p>
                        <p>
                            <i class="bi bi-circle-fill"></i>
                            Peminjam wajib mengganti buku yang hilang maupun rusak dengan koleksi yang sama
                        </p>
                        <p>
                            <i class="bi bi-circle-fill"></i>
                            Maksimal meminjam 2 buku
                        </p>
                    </div>
                    <a class="btn btn-primary my-3" href="https://forms.gle/fnKZPsq5v3fT3QQo6" target="_black">Lengkapi Persyaratan</a>
                </div>
            </div>
        </div>
    </div>
@endsection
