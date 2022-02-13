<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
  public function index()
  {
    $mahasiswa = count(User::all());
    return view('pages.admin.dashboard', compact('mahasiswa'));
  }

  public function voting()
  {
    return view('pages.admin.voting');
  }
}
