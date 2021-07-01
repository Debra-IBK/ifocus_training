<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the portal dashboard
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('portal.index');
    }

    public function replay_videos()
    {
        return view('portal.replay');
    }

    public function profile()
    {
        return view('portal.profile');
    }

    public function  payment_receipt()
    {
        return view('portal.receipt');
    }
    
}
