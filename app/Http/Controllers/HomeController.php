<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Absensimasuk;
use App\Absensipulang;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $am = Absensimasuk::All();
        $ap =Absensipulang::All();

        return view('home', compact('am', 'ap'));
    }
    public function admin()
    {
        return view('welcome');
    }
}
