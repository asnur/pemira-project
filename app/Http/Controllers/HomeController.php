<?php

namespace App\Http\Controllers;

use App\Models\Saran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
  public function index()
  {
    if (Auth::check()) {
      $saran = Saran::where('name', Auth::user()->name)->first();
    } else {
      $saran = null;
    }

    return view('pages.home', compact('saran'));
  }
}
