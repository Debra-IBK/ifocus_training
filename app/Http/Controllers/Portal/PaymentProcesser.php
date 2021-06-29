<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Payments\PaypalController;
use Illuminate\Http\Request;

class PaymentProcesser extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        (array) $valid = $request->validate([
            'course' => 'required|numeric',
            'payment_type' => 'required|string|in:one-time,installment',
            'amount'       => 'required|numeric'
        ]);
        // Find the course in your database
        // Use payment selected from your database
        $paypal = new PaypalController();
        return $paypal->handlePayment($request);
    }


    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function captureOrder(Request $request)
    {
        // (array) $valid = ;
        return $this->captured_order($request->validate([
            'orderID' => 'required|string',
            'details' => 'required|json'
        ]));
    }

    protected function captured_order(array $validated)
    {
        // Find the course in your database
        // Use payment selected from your database
        // $paypal = new PaypalController();
        // return $paypal->handleOrder($request);
    }
}
