@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Data Diri Peminjam</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ url('/mahasiswa/store') }}" method="POST">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                            placeholder="Nama Lengkap">
                    </div>

                    <div class="form-group">
                        <label for="jenkel">Pilih Jenis Kelamin</label>
                        <select name="jenkel" id="" class="custom-select rounded-0">
                            <option selected="">Pilih Jenis Kelamin</option>
                            <option value="laki">Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat Lengkap</label>
                        <textarea name="alamat" id="floatingTextArea" class="form-control" rows="3" placeholder="Alamat"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="hp">No HP</label>
                        <input type="number" name="hp" class="form-control" id="exampleInputEmail1" placeholder="+62">
                    </div>

                    <div class="form-group">
                        <label for="jurusan">Tingkat Sekolah</label>
                        <select name="jurusan" id="" class="custom-select rounded-0">
                            <option value="">--Pilih--</option>
                            <option value="Web Developer">SD</option>
                            <option value="SSoftwere Developer">SMP</option>
                            <option value="Data Analis">SMA</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            placeholder="masukkan email">
                    </div>

                    <div class="form-group">
                        <label for="dosen_id">Pilih Nama Buku</label>
                        <select type="number" name="dosen_id" class="form-control" id="exampleInputEmail1"
                            placeholder="Masukkan No Pekerjaan 1 huruf">
                            <option value="">--Pilih--</option>
                            <option value="1">Erlangga Fokus UN 2022</option>
                            <option value="2">UTBK SBMPTN soshum 2022</option>
                            <option value="3">Bahasa Pemogramman</option>
                            <option value="4">Wabah dan Pandemi</option>
                            <option value="5">Funs With English Kelas 3 SD</option>
                            <option value="6">Hakikat Urgensi dan Pembelajaran</option>
                            <option value="7">KSN Matematika SD</option>
                            <option value="8">Mahir Bahasa Pemogramman PHP</option>
                            <option value="9">Ujian Sekolah AKM SK & SLB SD/MI 2022</option>
                            <option value="10">UTBK Saintek 2022</option>
                            <option value="11">Tes Masuk Sekolah Kedinasan 2022</option>
                            <option value="12">Algoritma Pemogramman</option>
                        </select>                            
                    </div>

                    <div class="form-group">
                        <label for="jwlkembali">Tanggal Kembalian Buku</label>
                        <input type="date" name="jwlkembali" class="form-control" id="exampleInputEmail1" placeholder="Tanggal Kembalian Buku">
                        <p class="fw-bold text-danger">Masa Pinjaman bisa sampai 1/2 minggu </p>
                    </div>

                    <div class="form-group">
                        <label for="jumlahpin">Jumlah Pinjaman Buku</label>
                        <input type="text" name="jumlahpin" class="form-control" id="exampleInputEmail1" placeholder="Jumlah Pinjaman Buku">
                        <p class="fw-bold text-danger">Pinjaman Buku maxsimal bisa 2 buku</p>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                {{-- <a href="/mahasiswa/{{ $mahasiswa->id }}/edit" class="btn btn-primary" target="_blank">CETAK PDF</a> --}}
            </form>
        </div>
    </div>
@endsection
