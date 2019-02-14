<?php

namespace App\Http\Controllers;

use Auth;
use App\Credit;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class CreditController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth:bank');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request, $id)
    {
        //
        $verify = Credit::where('user_id', $id)->get();
        if($verify->count() > 0)
          return redirect()->route('bank.loans.show', $id);
        else
        {
            $headers = [
            'clientid' => '100410',
            'hashtoken' => hash('sha256', '1004106552da655207b7e9ac0eb5eac1b23a36a964ea4dd856e742a74bbb8dc87cc83f')
          ];
          $client = new Client();
          $res = $client->request('GET', 'https://confirmme.com/CustomerAPI2/crc/bvnSearch?bvn='.$request->bvn);
          $body = json_decode($res->getBody());
          $file = '/Users/admin/Document/laravelcodes/loanapp/crc.json';
          $json = file_get_contents($file);
          $report = json_decode($body);
          if($report['0']->ResponseCode == 00)
          {
            foreach ($report as $rep)
            {
              $crc = new Credit();
              $crc->ConfidenceScore  = $rep->ConfidenceScore;
              $crc->BureauID =  $rep->BureauID;
              $crc->DateOfBirth = $rep->DateOfBirth;
              $crc->Gender =   $rep->Gender;
              $crc->PhoneNumber = $rep->PhoneNumber;
              $crc->ImagePath =  $rep->ImagePath;
              $crc->Message = $rep->Message;
              $crc->ReferenceNo = $rep->ReferenceNo;
              $crc->user_id = $id;
              $crc->bank_id = Auth::user()->id;
              $crc->save();
            }
            alert()->success('CRC Verified', 'Successful')->autoclose('3000');
            return redirect()->route('bank.loans.show', $id);
          }
          else
          {
            alert()->error('Unable to verify', 'Error')->autoclose('3000');
            return redirect()->route('bank.loans.show', $id);
         }
        }
      


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Credit  $credit
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $credit = Credit::findOrFail($id);
        $base64 = $credit->ImagePath;
        $binary = base64_decode($base64);
        header('Content-type: application/pdf');
        header('Content-Disposition: inline; filename="CreditReport.pdf"');
        echo $binary;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Credit  $credit
     * @return \Illuminate\Http\Response
     */
    public function edit(Credit $credit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Credit  $credit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Credit $credit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Credit  $credit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Credit $credit)
    {
        //
    }
}
