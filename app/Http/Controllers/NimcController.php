<?php

namespace App\Http\Controllers;

use App\Nimc;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class NimcController extends Controller
{
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
            $nimc->birthcountry = $body->ResponseNimc->birthcountry;
            $nimc->birthdate = $body->ResponseNimc->birthdate;
            $nimc->birthlga = $body->ResponseNimc->birthlga;
            $nimc->birthstate = $body->ResponseNimc->birthstate;
            $nimc->documentno = $body->ResponseNimc->documentno;
            $nimc->educationallevel = $body->ResponseNimc->educationallevel;
            $nimc->email = $body->ResponseNimc->email;
            $nimc->emplymentstatus = $body->ResponseNimc->emplymentstatus;
            $nimc->firstname = $body->ResponseNimc->firstname;
            $nimc->gender = $body->ResponseNimc->gender;
            $nimc->heigth = $body->ResponseNimc->heigth;
            $nimc->maidenname = $body->ResponseNimc->maidenname;
            $nimc->maritalstatus = $body->ResponseNimc->maritalstatus;
            $nimc->middlename = $body->ResponseNimc->middlename;
            $nimc->nin = $body->ResponseNimc->nin;
            $nimc->nok_address1 = $body->ResponseNimc->nok_address1;
            $nimc->nok_address2 = $body->ResponseNimc->nok_address2;
            $nimc->nok_firstname = $body->ResponseNimc->nok_firstname;
            $nimc->nok_lga = $body->ResponseNimc->nok_lga;
            $nimc->nok_middlename = $body->ResponseNimc->nok_middlename;
            $nimc->nok_postalcode = $body->ResponseNimc->nok_postalcode;
            $nimc->nok_state = $body->ResponseNimc->nok_state;
            $nimc->nok_surname = $body->ResponseNimc->nok_surname;
            $nimc->nspokenlang = $body->ResponseNimc->nspokenlang;
            $nimc->ospokenlang = $body->ResponseNimc->ospokenlang;
            $nimc->othername = $body->ResponseNimc->othername;
            $nimc->pfirstname = $body->ResponseNimc->pfirstname;
            $nimc->pmiddlename = $body->ResponseNimc->pmiddlename;
            $nimc->profession = $body->ResponseNimc->profession;
            $nimc->psurname = $body->ResponseNimc->psurname;
            $nimc->religion = $body->ResponseNimc->religion;
            $nimc->residence_AdressLine1 = $body->ResponseNimc->residence_AdressLine1;
            $nimc->residence_AdressLine2 = $body->ResponseNimc->residence_AdressLine2;
            $nimc->residence_Town = $body->ResponseNimc->residence_Town;
            $nimc->residence_lga = $body->ResponseNimc->residence_lga;
            $nimc->residence_postalcode = $body->ResponseNimc->residence_postalcode;
            $nimc->residence_state = $body->ResponseNimc->residence_state;
            $nimc->self_origin_lga = $body->ResponseNimc->self_origin_lga;
            $nimc->self_origin_place = $body->ResponseNimc->self_origin_place;
            $nimc->self_origin_state = $body->ResponseNimc->self_origin_state;
            $nimc->signature = $body->ResponseNimc->signature;
            $nimc->surname = $body->ResponseNimc->surname;
            $nimc->telephoneno = $body->ResponseNimc->telephoneno;
            $nimc->title = $body->ResponseNimc->title;
            $nimc->trackingId = $body->ResponseNimc->trackingId;
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
        return view('banks.ninreport', ['nin' => $nin]);
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
