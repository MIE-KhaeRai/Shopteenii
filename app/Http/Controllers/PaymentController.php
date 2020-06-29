<?php

namespace App\Http\Controllers;

use App\Payment;
use App\Paymenttype;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $ref_id = $id;
        $sum = 500;
        return view('pages.product-payment',compact('sum', 'ref_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $register_token = $this->getToken();
        if ($register_token->status->code !== 1000) {
            dd('something wrong !');
        }

        $accessToken =  $register_token->data->accessToken;
        $amount = $request->amount;
        $ref_id = "INV".sprintf("%05d",$request->ref_id);
        // $user_id = Auth::user()->id;
        $user_id = 1;
        $amount = 500;

        $qrType = "PP";
        $partner = env('SCB_PARTNER_NAME');
        $ppType = "BILLERID";
        $ppId = env('SCB_PPID');
        $note = "";
        $blockchain = "###TOPUP-MULTI###";


        $payment = new Payment();
        $payment->payment_type_id = Paymenttype::where('type','mobiletopup')->get()->first()->id;
        $payment->ref_id = $ref_id;
        $payment->amount = $amount;
        $payment->user_id = $user_id;
        $payment->save();

        $qr_res = $this->getQrcode(
            $accessToken = $accessToken, 
            $qrType = $qrType, 
            $ppType = $ppType, 
            $ppId = $ppId, 
            $amount = $amount, 
            $ref_id = $ref_id, 
            $ref1 = $ref_id, 
            $ref2 = "", 
            $ref3 = $ref_id);
        
        if($qr_res->status->code !== 1000) {
            dd('something wrong !');
        }

        $qrcode = $qr_res->data->qrRawData;
        return view('pages.payment-qrcode' , compact('qrcode'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }


    public function getQrcode($accessToken = null, $qrType = null, $ppType, $ppId = null, $amount = null, $ref_id = null, $ref1 = null, $ref2 = null, $ref3 = null)
    {
        $headers = [
            'Content-Type' => 'application/json',
            'authorization' => 'Bearer '.$accessToken,
            'requestUId' => 't10assets Api v1',
            'resourceOwnerId' => env('SCB_APPLICATIONKEY'),
            'accept-language' => 'EN',
            ];
    
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', env('SCB_APP_CREATE_QR30_URL'), [
            'headers' => $headers,
            'json' => [
                "qrType" => $qrType,
                "ppType" => $ppType,
                "ppId" => $ppId,
                "amount" => $amount,
                "ref1" => $ref1,
                "ref2" => $ref2,
                "ref3" => $ref3,
            ]
        ]);

        $http_status_code = $response->getStatusCode();
        $response->getHeaderLine('content-type');
        $response->getBody();
        $contents = json_decode($response->getBody());

        return ($http_status_code == 200)? $contents:'';
    }

    public function getToken()
    {
        $headers = [
        'Content-Type' => 'application/json',
        'requestUId' => 't10assets Api v1',
        'resourceOwnerId' => env('SCB_APPLICATIONKEY'),
        'accept-language' => 'EN',
        ];

        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', env('SCB_APP_REQUEST_TOKEN_URL'), [
            'headers' => $headers,
            'json' => [
                "applicationKey" => env('SCB_APPLICATIONKEY'),
                "applicationSecret" => env('SCB_APPLICATIONSECRET'),
            ]
        ]);

        $http_status_code = $response->getStatusCode();
        $response->getHeaderLine('content-type');
        $response->getBody();
        $contents = json_decode($response->getBody());

        return ($http_status_code == 200)? $contents:'';
    }
}
