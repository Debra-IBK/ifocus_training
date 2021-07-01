<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Show the portal create payment page
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('portal.payment.create', ['courses' => \App\Models\Courses::all()]);
    }
}
