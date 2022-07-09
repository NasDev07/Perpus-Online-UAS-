<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class DinamisController extends Controller
{
    public function beranda()
    {
        return view('dinamis.beranda');
    }

    public function profil()
    {
        return view('dinamis.profil');
    }

    public function kontak()
    {
        return view('dinamis.kontak');
    }

    public function index()
    {
        $mahasiswa = Buku::all();
        return view('frontend.buku.index', ['mahasiswa' => $mahasiswa]);
    }


    public function syarat() {
        return view('dinamis.syarat');
    }
}
