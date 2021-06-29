<?php

namespace App\Http\Controllers\Payments;

use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        // $this->middleware('guest');
        $this->setBaseUrl();
        $this->setkey();
        $this->setClientId();
        $this->getAccessToken();
    }

    //
    public function handlePayment(Request $request)
    {
        return $this->payment_processor($request);
    }

    protected function payment_processor(Request $request)
    {
        Payment::create([
            
        ]);
        return Http::withHeaders([
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

        // dd($response, $response['links']);

        // return redirect($response['links'][3]['href']);
        // if ($response->successful()) {
            // $link = $response->collect()->get('href');
            // $check_out = Http::get($link);
        // }
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
