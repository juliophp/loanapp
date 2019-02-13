<?php

namespace App\Http\Controllers;

use Auth;
use Alert;
use App\bvn;
use App\Bank;
use App\Loan;
use App\Balance;
use GuzzleHttp\Client;
use Illuminate\Http\Request;


class BankController extends Controller
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
    public function update(Request $request, $id)
    {


        $bank = Bank::findOrFail(Auth::user()->id);
        if($request->has('bankname'))
        {
          $request->validate([
            'bankname'=>'required|string',
            'username' => 'nullable|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'address' => 'required|string',
            'addresscity' => 'required|string',
            'addressstate' => 'required|string',

          ]);
          $bank->bankname = $request->bankname;
          $bank->phone = $request->phone;
          $bank->email = $request->email;
          $bank->address = $request->address;
          $bank->addresscity = $request->addresscity;
          $bank->addressstate = $request->addressstate;
        }else if($request->has('password'))
        {
          $request->validate([
          'password'=>'required|confirmed|min:6',
          ]);
          $bank->password = Hash::make($request->password);

        }else if($request->has('avatar'))
        {
          $request->validate([
          'avatar'=>'required|image',
          ]);
          $name = 'B'.Auth::user()->id.uniqid().'.'.$request->file('avatar')->getClientOriginalExtension();
          $avi = $request->file('avatar')->storeAs('public/photos', $name);
          if($avi)
            $bank->photo = $name;
          else
            alert()->error('error uploading picture', 'Error')->autoclose('3000');

        }
        $bank->save();
        alert()->success('Profile Updated', 'Successful')->autoclose('3000');
        return redirect()->route('bank.banks.show', Auth::user()->id);


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
