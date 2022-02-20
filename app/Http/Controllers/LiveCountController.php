<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiveCountController extends Controller
{
    public function index()
    {
        return view('pages.live-count');
    }
}
