<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Alert;
use App\User;
use App\Guarantor;
use App\University;
use GuzzleHttp\Client;


class StudentController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      //
      return view('students.index');
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
      $client = new Client();
      $st = $client->get('https://gist.githubusercontent.com/segebee/7dde9de8e70a207e6e19/raw/90c91f7318d67c9534e3a4d74e4bd755b144e01e/gistfile1.txt');
      $st->getStatusCode();
      $states  = json_decode($st->getBody());

      $res = $client->get('http://restcountries.eu/rest/v2/all');
      $data  = json_decode($res->getBody());
      return view('students.edit', ['std' => User::findorFail($id), 'unis' => University::all(), 'states' => $states, 'countries' => $data]);
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

    $request->validate([
          'firstname'=>'string|nullable',
          'middlename' => 'string|nullable',
          'lastname'=> 'string|nullable',
          'username' => 'string|nullable',
          'gender'  => 'string|nullable',
          'dob' => 'string|nullable',
          'phone' => 'string|nullable',
          'bank' => 'string|nullable',
          'accountnumber' => 'string|nullable',
          'email' => 'string|nullable',
          'nationality' => 'string|nullable',
          'stateoforigin' => 'string|nullable',
          'bvn' => 'string|nullable',
          'nin' => 'string|nullable',
          'facebookhandle' => 'string|nullable',
          'twitterhandle' => 'string|nullable',
          'university' => 'string|nullable',
          'program' => 'string|nullable',
          'yearofgraduation' => 'string|nullable',
          'department' => 'string|nullable',
          'cgpa' => 'string|nullable',
          'currentgpa' => 'string|nullable',
          'addresslineone' => 'string|nullable',
          'gaddress' => 'string|nullable',
          'gfirstname' => 'string|nullable',
          'glastname' => 'string|nullable',
          'gphone' => 'string|nullable',
          'gemail' => 'string|nullable',
          'goccupation' => 'string|nullable',
          'addresslinetwo' => 'string|nullable',
          'addresscity' => 'string|nullable',
          'addressstate' => 'string|nullable',
          'addressyears' => 'string|nullable',
          'addresscountry' => 'string|nullable',
          'photo' => 'mimes:jpeg,png,bmp,tiff |max:4096',
          'photoid' => 'mimes:jpeg,png,bmp,tiff |max:4096'
        ]);

      $std = User::findorFail($id);

      if($request->has('university'))
      {
        $std->university_id = $request->university;
        $std->program = $request->program;
        $std->matricno = $request->matricno;
        $std->tuitionfee = $request->tuitionfee;
        $std->yearofgraduation = $request->yearofgraduation;
        $std->department = $request->department;
        $std->cgpa = $request->cgpa;
        $std->currentgpa = $request->currentgpa;
      }
      else if($request->has('addresslineone'))
      {
        $std->addresslineone = $request->addresslineone;
        $std->addresslinetwo = $request->addresslinetwo;
        $std->addresscity = $request->addresscity;
        $std->addressstate = $request->addressstate;
        $std->addressyears = $request->addressyears;
        $std->addresscountry = $request->addresscountry;
      }
      else if($request->has('gfirstname'))
      {
        if($std->guarantor){
            $guarantor = Guarantor::where('user_id', Auth::user()->id)->get();
            $guarantor->first()->firstname = $request->gfirstname;
            $guarantor->first()->lastname = $request->glastname;
            $guarantor->first()->phone = $request->gphone;
            $guarantor->first()->email = $request->gemail;
            $guarantor->first()->occupation = $request->goccupation;
            $guarantor->first()->address = $request->gaddress;
            $guarantor->first()->user_id = Auth::user()->id;
            $guarantor->first()->save();}
        else
          {$guarantor = new Guarantor();
          $guarantor->firstname = $request->gfirstname;
          $guarantor->lastname = $request->glastname;
          $guarantor->phone = $request->gphone;
          $guarantor->email = $request->gemail;
          $guarantor->occupation = $request->goccupation;
          $guarantor->address = $request->gaddress;
          $guarantor->user_id = Auth::user()->id;
          $guarantor->save();}

      }else if($request->has('photo'))
      {
        $p = 'p'.Auth::user()->id.uniqid().'.'.$request->file('photo')->getClientOriginalExtension();
        $pid = 'pid'.Auth::user()->id.uniqid().'.'.$request->file('photoid')->getClientOriginalExtension();

        $photo = $request->file('photo')->storeAs('public/photos', $p);
        $photoid = $request->file('photoid')->storeAs('public/photos', $pid);

        if($photo && $photoid)
        {
            $std->photo = $p;
            $std->photoid = $pid;
        }else
        alert()->error('error uploading picture', 'Error')->autoclose('3000');

      }else
      {
        $std->firstname = $request->firstname;
        $std->middlename = $request->middlename;
        $std->lastname = $request->lastname;
        $std->gender = $request->gender;
        $std->dob = $request->dob;
        $std->bank = $request->bank;
        $std->accountnumber = $request->accountnumber;
        $std->phone = $request->phone;
        $std->email = $request->email;
        $std->nationality= $request->nationality;
        $std->stateoforigin= $request->stateoforigin;
        $std->bvn = $request->bvn;
        $std->nin = $request->nin;
        $std->twitterhandle = $request->twitterhandle;
        $std->facebookhandle = $request->facebookhandle;
      }
      alert()->success('Data updated', 'Successful')->autoclose('3000');
      $std->save();


      //
      return redirect()->route('students.edit', Auth::user()->id);

  }

}
