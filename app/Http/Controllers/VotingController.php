<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VotingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * DI DISABLE DULU BIAR BISA NGOLAH /
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    // -----------------------------------

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.voting');
    }
}
