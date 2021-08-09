<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Closure;
use Illuminate\Support\Facades\Auth;

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
        //return view('home');
         if (Auth::check()&&Auth::user()->email == "tuananh.tpt@gmail.com") {
            return view("admin/index");
        } else {
            return view("giaovien/index");
        }
    }
}
