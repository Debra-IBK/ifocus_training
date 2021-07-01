<?php

namespace App\Http\Controllers\Payments;

use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserCourse;
use Illuminate\Support\Facades\Http;

class PaypalController extends Controller
{
    /**
     * Paypal API Base Url
     * @var string
     */
    protected $baseUrl;

    /**
     * Paypal Secret Key
     * @var string
     */
    protected $secretKey;

    protected $clientid;

    protected $accessToken;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware(['auth', 'verified']);
        $this->setBaseUrl();
        $this->setkey();
        $this->setClientId();
        $this->getAccessToken();
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function handlePayment(Request $request)
    {
        return $this->payment_processor($request);
    }

    /**
     * Handle verification of payment
     *
     * @param  \App\Models\Payment $payment
     * @return \Illuminate\Http\Response
     */
    public function verifyPayment(Payment $payment)
    {
        return $this->verify_order_details($payment);
    }

    /**
     * Handle verification of payment
     *
     * @param  \App\Models\Payment $payment
     * @return \Illuminate\Http\Response
     */
    protected function verify_order_details(Payment $payment)
    {
        $response =  Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->withToken($this->accessToken)->get($this->baseUrl . 'v2/checkout/orders/' . $payment['paypal_id'], [])->throw()->json();
        $payment->update([
            'status'    => $response['status'] == 'COMPLETED' ? Payment::STATUS['success'] : Payment::STATUS['pending'],
            'meta_data' => $response
        ]);
        if ($payment['status'] == Payment::STATUS['success']) {
            UserCourse::create([
                'course_id' => $payment['course_id'],
                'payment_id' => $payment['id']
            ]);
            return  redirect()->route('portal.index')->with('success', 'Payment was successful');
        }
        return back()->with('error', 'Payment was unsuccessful!');
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function payment_processor(Request $request)
    {
        $response =  Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->withToken($this->accessToken)->post($this->baseUrl . 'v2/checkout/orders', [
            'intent' => 'CAPTURE',
            'purchase_units' => [
                [
                    "amount" =>  [
                        "currency_code" => "USD",
                        "value" => $request['amount']
                    ]
                ]
            ],
        ])->throw()->json();

        Payment::create([
            'course_id' => $request['course'],
            'amount'    => $request['amount'],
            'paypal_id' => $response['id'],
            'status'    => Payment::STATUS['pending']
        ]);
        return $response;
    }

    protected function setBaseUrl()
    {
        return $this->baseUrl = 'https://api-m.sandbox.paypal.com/';
    }


    protected function setkey()
    {
        return $this->secretKey = env('PAYPAL_SANDBOX_SECRET');
    }

    protected function setClientId()
    {
        return $this->clientid = env('PAYPAL_SANDBOX_CLIENT_ID');
    }

    protected function getAccessToken()
    {
        $response = Http::withBasicAuth($this->clientid, $this->secretKey)->asForm()->post($this->baseUrl . 'v1/oauth2/token', [
            'grant_type' => 'client_credentials'
        ])->throw()->json();
        return $this->accessToken = $response['access_token'];
    }
}
