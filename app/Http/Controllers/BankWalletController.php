<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class BankWalletController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth:bank');
    }


    /**
     * display form to submit username
     *
     * @return \Illuminate\Http\Response
     */
    public function username()
    {
        return view('banks.ewallet.username');
    }

    /**
     * display form to submit username
     *
     * @return \Illuminate\Http\Response
     */
    public function submitusername(Request $request)
    {
        $client = new Client();
        if($request->has('username'))
        {
          $headers = [
          'Content-Type' => 'application/json',
          'principalid' => $request->username
        ];
        $res = $client->request('POST','http://154.113.1.78:81/SwitchPayRestFulChannel/webresources/switchpaychannel?option=submitusername', ['headers'  => $headers, 'json' => ['channel' => '1']]);
        $response = json_decode($res->getBody());
        if($response->responsecode == "00")
          return view('banks.ewallet.username', ['res' => $response]);
        else
          die('error something is wrong');
      }else if($request->has('password'))
      {
        $headers = [
        'Content-Type' => 'application/json',
        'principalid' => $request->token
        ];

        $res = $client->request('POST','http://154.113.1.78:81/SwitchPayRestFulChannel/webresources/switchpaychannel?option=submitpassword', ['headers'  => $headers, 'json' => ['channel' => '1', 'password' => $request->password]]);
        $response = json_decode($res->getBody());
        if($response->responsecode == "00")
          return view('banks.ewallet.profile', ['res' => $response]);
        else
          die('error something is wrong');

      }

    }

    /**
     * Check API Resource for .
     * balance.
     * @return \Illuminate\Http\Response
     */
    public function checkbalance()
    {
      $client = new Client();
      $sessionid = '010000'.date('ymdHis').mt_rand(100000000000, 999999999999);

      $username = 'bemas';
      $hashkey = 'ascendingLight$2018';
      $presharedkey = '513100324378';
      $hash = hash('sha512', $sessionid.$username.$hashkey);

      dd(hash('sha512',$username.$hashkey));
      $headers = [
      'Content-Type' => 'application/json',
      'principalid' => $presharedkey,
      ];
      $res = $client->request('POST','http://154.113.1.78:81/SwitchPayRestFulChannel/webresources/switchpaychannel?option=balanceenquiry',
      [
        'headers'  => $headers,
        'json' => [
          'sessionid' => $sessionid,
          'username' => $username,
          'hashvalue' => $hash
          ]
        ]);
      $response = json_decode($res->getBody());
      dd($response);

    }


    /**
     * Check API Resource for .
     * ministatement.
     * @return \Illuminate\Http\Response
     */
    public function ministatement()
    {
      $client = new Client();

      $username = 'bemas';
      $hashkey = 'ascendingLight$2018';
      $token = '337738394119';
      $hash = hash('sha512', $username.$hashkey);

      $headers = [
        'Content-Type' => 'application/json',
        'principalid' => $token,
        ];
      $res = $client->request('POST','http://154.113.1.78:81/SwitchPayRestFulChannel/webresources/switchpaychannel?option=getministatement',
      [
        'headers'  => $headers,
        'json' => [
          'username' => $username,
          'hashvalue' => $hash
          ]
        ]);
      $response = json_decode($res->getBody());
      return view ('banks.ewallet.statement', ['balance' => $response]);

    }

    /**
     * Display form for fund .
     * transfer on the nair.com API.
     * @return \Illuminate\Http\Response
     */
    public function fundtransfer()
    {
      $client = new Client();

      $username = 'bemas';
      $hashkey = 'ascendingLight$2018';
      $token = '337738394119';
      $hash = hash('sha512', $username.$hashkey);

      $headers = [
        'Content-Type' => 'application/json',
        'principalid' => $token,
        ];
      $res = $client->request('POST','http://154.113.1.78:81/SwitchPayRestFulChannel/webresources/switchpaychannel?option=getfinancialinstitutionlist',
      [
        'headers'  => $headers,
        'json' => [
          'username' => $username,
          'hashvalue' => $hash
          ]
        ]);
      $response = json_decode($res->getBody());
      return view ('banks.ewallet.fundtransfer', ['banks' => $response->financialinstitutions]);

    }

    /**
     * Display form for fund .
     * transfer on the nair.com API.
     * @return \Illuminate\Http\Response
     */
    public function transfer(Request $request)
    {
      $client = new Client();

      $username = 'bemas';
      $accountno = $request->accountnumber;
      $dicode    = $request->fininst;
      $hashkey = 'ascendingLight$2018';
      $token = '337738394119';
      $sessionid = '010000'.date('ymdHis').mt_rand(100000000000, 999999999999);

      $hash = hash('sha512', $sessionid.$dicode.$accountno.$hashkey);

      $headers = [
        'Content-Type' => 'application/json',
        'principalid' => $token,
        ];
      $res = $client->request('POST','http://154.113.1.78:81/SwitchPayRestFulChannel/webresources/switchpaychannel?option=getaccountname',
      [
        'headers'  => $headers,
        'json' => [
          'sessionid' => $sessionid,
          'destinationinstitutioncode' => $dicode,
          'accountnumber' => $accountno,
          'username' => $username,
          'hashvalue' => $hash
          ]
        ]);
      $response = json_decode($res->getBody());
      dd($response);
      return view ('banks.ewallet.fundtransfer', ['banks' => $response->financialinstitutions]);

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('banks.ewallet.username');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
