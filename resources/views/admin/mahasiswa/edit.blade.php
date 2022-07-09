@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Edit Mahasiswa</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="/mahasiswa/{{ $mahasiswa->id }}/update" method="POST">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" name="nama" value="{{ $mahasiswa->nama }}" class="form-control"
                            id="exampleInputEmail1" placeholder="Nama Lengkap">
                    </div>

                    <div class="form-group">
                        <label for="jenkel">Pilih Jenis Kelamin</label>
                        <select name="jenkel" id="" class="custom-select rounded-0">
                            <option selected="">Pilih Jenis Kelamin</option>
                            <option value="laki" @if ($mahasiswa->jenkel == 'laki') selected @endif>Laki</option>
                            <option value="perempuan" @if ($mahasiswa->jenkel == 'perempuan') selected @endif>Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat Lengkap</label>
                        <textarea name="alamat" id="floatingTextArea" class="form-control">{{ $mahasiswa->alamat }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="hp">No HP</label>
                        <input type="number" name="hp" class="form-control" id="exampleInputEmail1" placeholder="+62"
                            value="{{ $mahasiswa->hp }}">
                    </div>

                    <div class="form-group">
                        <label for="jurusan">Tingkat Sekolah</label>
                        <select name="jurusan" id="" class="custom-select rounded-0">
                            <option selected="">--Pilih--</option>
                            <option value="SD" @if ($mahasiswa->jurusan == 'SD') selected @endif>SD</option>
                            <option value="SMP" @if ($mahasiswa->jurusan == 'SMP') selected @endif>SMP
                            </option>
                            <option value="SMA"@if ($mahasiswa->jurusan == 'SMA') selected @endif>SMA</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            placeholder="masukkan email" value="{{ $mahasiswa->email }}">
                    </div>

                    <div class="form-group">
                        <label for="dosen_id">Pilih Nama Buku</label>
                        <select type="number" name="dosen_id" class="form-control" id="exampleInputEmail1"
                            placeholder="Masukkan No Pekerjaan 1 huruf">
                            <option value="">--Pilih--</option>
                            <option value="Erlangga Fokus UN 2022" @if ($mahasiswa->dosen_id == 'Erlangga Fokus UN 2022') selected @endif>Erlangga Fokus UN 2022</option>
                            <option value="UTBK SBMPTN soshum 2022" @if ($mahasiswa->dosen_id == 'UTBK SBMPTN soshum 2022') selected @endif>UTBK SBMPTN soshum 2022</option>
                            <option value="Bahasa Pemogramman" @if ($mahasiswa->dosen_id == 'Bahasa Pemogramman') selected @endif>Bahasa Pemogramman</option>
                            <option value="Wabah dan Pandemi" @if ($mahasiswa->dosen_id == 'Wabah dan Pandemi') selected @endif>Wabah dan Pandemi</option>
                            <option value="Funs With English Kelas 3 SD" @if ($mahasiswa->dosen_id == 'Funs With English Kelas 3 SD') selected @endif>Funs With English Kelas 3 SD</option>
                            <option value="Hakikat Urgensi dan Pembelajaran" @if ($mahasiswa->dosen_id == 'Hakikat Urgensi dan Pembelajaran') selected @endif>Hakikat Urgensi dan Pembelajaran</option>
                            <option value="KSN Matematika SD" @if ($mahasiswa->dosen_id == 'KSN Matematika SD') selected @endif>KSN Matematika SD</option>
                            <option value="Mahir Bahasa Pemogramman PHP" @if ($mahasiswa->dosen_id == 'Mahir Bahasa Pemogramman PHP') selected @endif>Mahir Bahasa Pemogramman PHP</option>
                            <option value="Ujian Sekolah AKM SK & SLB SD/MI 2022" @if ($mahasiswa->dosen_id == 'Ujian Sekolah AKM SK & SLB SD/MI 2022') selected @endif>Ujian Sekolah AKM SK & SLB SD/MI 2022</option>
                            <option value="UTBK Saintek 2022" @if ($mahasiswa->dosen_id == 'UTBK Saintek 2022') selected @endif>UTBK Saintek 2022</option>
                            <option value="Tes Masuk Sekolah Kedinasan 2022" @if ($mahasiswa->dosen_id == 'Tes Masuk Sekolah Kedinasan 2022') selected @endif>Tes Masuk Sekolah Kedinasan 2022</option>
                            <option value="Algoritma Pemogramman" @if ($mahasiswa->dosen_id == 'Algoritma Pemogramman') selected @endif>Algoritma Pemogramman</option>
                        </select>                            
                    </div>

                    <div class="form-group">
                        <label for="jwlkembali">Tanggal Kembalian Buku</label>
                        <input type="date" name="jwlkembali" class="form-control" id="exampleInputEmail1"
                            placeholder="Tanggal Kembalian Buku" value="{{ $mahasiswa->jwlkembali }}">
                        <p class="fw-bold text-danger">Masa Pinjaman bisa sampai 1/2 minggu </p>
                    </div>

                    <div class="form-group">
                        <label for="jumlahpin">Jumlah Pinjaman Buku</label>
                        <input type="text" name="jumlahpin" class="form-control" id="exampleInputEmail1"
                            placeholder="Jumlah Pinjaman Buku" value="{{ $mahasiswa->jumlahpin }}">
                        <p class="fw-bold text-danger">Pinjaman Buku maxsimal bisa 2 buku</p>
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
