<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('backend/home');
    }


    public function replay_videos()
    {
        return view('backend/replay');
    }

    public function profile()
    {
        return view('backend/profile');
    }


    public function make_payment()
    {
        return view('backend/payment', ['courses' => \App\Models\Courses::all()]);
    }

    public function  payment_receipt()
    {
        return view('backend/receipt');
    }
   

    public function  dashboard()
    {
        return view('backend/dashboard');
    }
}
