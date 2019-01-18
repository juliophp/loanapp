<?php

namespace App\Http\Controllers;

use Auth;
use App\bvn;
use App\Bank;
use App\Loan;
use GuzzleHttp\Client;
use Illuminate\Http\Request;


class BankController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth:bank');
    }

    /**
     * Verifies the BVN process by.
     * communicating with confirmme api.
     * @return \Illuminate\Http\Response
     */
    public function verifybvn(Request $request, $id)
    {
        $verify = bvn::where('user_id', $id)->get();
        if($verify->count() > 0)
        {
          return redirect()->route('bank.loans.show', $id);
        }
        else
        {
          $headers = [
          'clientid' => '100410',
          'hashtoken' => hash('sha256', '1004106552da655207b7e9ac0eb5eac1b23a36a964ea4dd856e742a74bbb8dc87cc83f'.$request->bvn)];
        $client = new Client();
        $res = $client->request('GET', 'https://confirmme.com/CustomerAPI2/verifyBVNs?BVNs='.$request->bvn, ['headers'  => $headers]);
        $body = json_decode($res->getBody());
        if($res->getStatusCode() == 200 && $body->ResponseData[0]->ResultStatus == 00)
        {
          $bvn = new bvn();
          $bvn->bvn = $body->ResponseData[0]->Bvn;
          $bvn->imagebase64 = $body->ResponseData[0]->ImageBase64;
          $bvn->basicdetailsbase64 = $body->ResponseData[0]->BasicDetailBase64;
          $bvn->user_id = $id;
          $bvn->save();
          return redirect()->route('bank.loans.show', $id);
        }
        else
          die("Unable to Verify");
        }


    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $loans = Loan::where('isclaimed', '0')->whereNull('donor_id')->get();
        return view('banks.home', ['loans' => $loans]);
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
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
          $bank = Bank::findOrFail($id);
          return view('banks.edit', ['bank' => $bank]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function edit(Bank $bank)
    {
        //
        return view('banks.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bank $bank)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bank $bank)
    {
        //
    }
}
