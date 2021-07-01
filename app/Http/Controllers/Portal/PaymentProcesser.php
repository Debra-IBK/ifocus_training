<?php

namespace App\Http\Controllers\Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Payments\PaypalController;
use App\Models\Payment;

class PaymentProcesser extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createOrder(Request $request)
    {
        $request->validate([
            'course'        => 'required|numeric',
            'payment_type'  => 'required|string|in:one-time,installment',
            'amount'        => 'required|numeric'
        ]);
        // Find the course in your database
        // Use payment selected from your database
        $paypal = new PaypalController();
        return $paypal->handlePayment($request);
    }

    /**
     * Handle verification of payment
     *
     * @param  \App\Models\Payment $payment
     * @param \App\Http\Controllers\Payments\PaypalController $paypal
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function capturedOrder(Payment $payment, PaypalController $paypal)
    {
        return $paypal->verifyPayment($payment);
    }
}
