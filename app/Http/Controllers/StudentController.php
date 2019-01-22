<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\User;
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
      //dd($states);
      // foreach ($states as $state) {
      //   echo "<pre>";
      //   print_r($state->state->locals[1]);
      //   echo "</pre>";
      // }
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
          'email' => 'string|nullable',
          'nationality' => 'string|nullable',
          'stateoforigin' => 'string|nullable',
          'bvn' => 'string|nullable',
          'university' => 'string|nullable',
          'program' => 'string|nullable',
          'yearofgraduation' => 'string|nullable',
          'department' => 'string|nullable',
          'cgpa' => 'string|nullable',
          'currentgpa' => 'string|nullable',
          'addresslineone' => 'string|nullable',
          'addresslinetwo' => 'string|nullable',
          'addresscity' => 'string|nullable',
          'addressstate' => 'string|nullable',
          'addressyears' => 'string|nullable',
          'addresscountry' => 'string|nullable',
        ]);

      $std = User::findorFail($id);

      if($request->has('university'))
      {
        $std->university_id = $request->university;
        $std->program = $request->program;
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
      }else
      {
        $std->firstname = $request->firstname;
        $std->middlename = $request->middlename;
        $std->lastname = $request->lastname;
        $std->gender = $request->gender;
        $std->dob = $request->dob;
        $std->phone = $request->phone;
        $std->email = $request->email;
        $std->nationality= $request->nationality;
        $std->stateoforigin= $request->stateoforigin;
        $std->bvn = $request->bvn;
      }

      $std->save();


      //
      alert()->success('User have been updated', 'Successful');
      return redirect()->route('home');

  }

}
