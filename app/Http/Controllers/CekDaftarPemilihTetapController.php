<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CekDaftarPemilihTetapController extends Controller
{
    public function index()
    {
        return view('pages.cek-daftar-pemilih-tetap');
    }
}
