<?php

namespace App\Http\Controllers;

use Auth;
use App\Nimc;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class NimcController extends Controller
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
        $verify = Nimc::where('user_id', $id)->get();
        if($verify->count() > 0)
          return redirect()->route('bank.loans.show', $id);
        else
        {
            $headers = [
            'clientid' => '100410',
            'hashtoken' => hash('sha256', '1004106552da655207b7e9ac0eb5eac1b23a36a964ea4dd856e742a74bbb8dc87cc83f'.$request->nin)];
          $client = new Client();
          $res = $client->request('GET', 'https://confirmme.com/CustomerAPI2/VerifyNIN?regNo='.$request->nin, ['headers'  => $headers]);
          $body = json_decode($res->getBody());
          //dd($body);
          if($res->getStatusCode() == 200 && $body->ResponseCode == 00)
          {
            $nimc = new Nimc();
            $nimc->birthcountry = $body->ResponseNIMC->birthcountry;
            $nimc->birthdate = $body->ResponseNIMC->birthdate;
            $nimc->birthlga = $body->ResponseNIMC->birthlga;
            $nimc->birthstate = $body->ResponseNIMC->birthstate;
            $nimc->centralID = $body->ResponseNIMC->centralID;
            $nimc->documentno = $body->ResponseNIMC->documentno;
            $nimc->educationallevel = $body->ResponseNIMC->educationallevel;
            $nimc->email = $body->ResponseNIMC->email;
            $nimc->emplymentstatus = $body->ResponseNIMC->emplymentstatus;
            $nimc->firstname = $body->ResponseNIMC->firstname;
            $nimc->gender = $body->ResponseNIMC->gender;
            $nimc->heigth = $body->ResponseNIMC->heigth;
            $nimc->maidenname = $body->ResponseNIMC->maidenname;
            $nimc->maritalstatus = $body->ResponseNIMC->maritalstatus;
            $nimc->middlename = $body->ResponseNIMC->middlename;
            $nimc->nin = $body->ResponseNIMC->nin;
            $nimc->nok_address1 = $body->ResponseNIMC->nok_address1;
            $nimc->nok_address2 = $body->ResponseNIMC->nok_address2;
            $nimc->nok_firstname = $body->ResponseNIMC->nok_firstname;
            $nimc->nok_lga = $body->ResponseNIMC->nok_lga;
            $nimc->nok_middlename = $body->ResponseNIMC->nok_middlename;
            $nimc->nok_postalcode = $body->ResponseNIMC->nok_postalcode;
            $nimc->nok_state = $body->ResponseNIMC->nok_state;
            $nimc->nok_surname = $body->ResponseNIMC->nok_surname;
            $nimc->nok_town = $body->ResponseNIMC->nok_town;
            $nimc->nspokenlang = $body->ResponseNIMC->nspokenlang;
            $nimc->ospokenlang = $body->ResponseNIMC->ospokenlang;
            $nimc->othername = $body->ResponseNIMC->othername;
            $nimc->photo = $body->ResponseNIMC->photo;
            $nimc->pfirstname = $body->ResponseNIMC->pfirstname;
            $nimc->pmiddlename = $body->ResponseNIMC->pmiddlename;
            $nimc->profession = $body->ResponseNIMC->profession;
            $nimc->psurname = $body->ResponseNIMC->psurname;
            $nimc->religion = $body->ResponseNIMC->religion;
            $nimc->residence_AdressLine1 = $body->ResponseNIMC->residence_AdressLine1;
            $nimc->residence_AdressLine2 = $body->ResponseNIMC->residence_AdressLine2;
            $nimc->residence_Town = $body->ResponseNIMC->residence_Town;
            $nimc->residence_lga = $body->ResponseNIMC->residence_lga;
            $nimc->residence_postalcode = $body->ResponseNIMC->residence_postalcode;
            $nimc->residence_state = $body->ResponseNIMC->residence_state;
            $nimc->residencestatus = $body->ResponseNIMC->residencestatus;
            $nimc->self_origin_lga = $body->ResponseNIMC->self_origin_lga;
            $nimc->self_origin_place = $body->ResponseNIMC->self_origin_place;
            $nimc->self_origin_state = $body->ResponseNIMC->self_origin_state;
            $nimc->signature = $body->ResponseNIMC->signature;
            $nimc->surname = $body->ResponseNIMC->surname;
            $nimc->telephoneno = $body->ResponseNIMC->telephoneno;
            $nimc->title = $body->ResponseNIMC->title;
            $nimc->trackingId = $body->ResponseNIMC->trackingId;
            $nimc->user_id = $id;
            $nimc->bank_id = Auth::user()->id;
            $nimc->save();
            alert()->success('NIN Verified', 'Successful')->autoclose('3000');
            return redirect()->route('bank.loans.show', $id);
          }
          else
          {
            alert()->error('Service Unavailable', 'Error')->autoclose('3000');
            return redirect()->route('bank.loans.show', $id);

          }

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nimc  $nimc
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $nin = Nimc::where('user_id', $id)->get();
        return view('banks.ninreport', ['nin' => $nin[0]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nimc  $nimc
     * @return \Illuminate\Http\Response
     */
    public function edit(Nimc $nimc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nimc  $nimc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nimc $nimc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nimc  $nimc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nimc $nimc)
    {
        //
    }
}
