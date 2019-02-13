<?php

namespace App\Http\Controllers;

use Auth;
use Alert;
use Excel;
use App\User;
use App\Loan;
use App\Imports\UsersImport;
use App\Imports\LoansImport;
use Illuminate\Http\Request;

class DonorStudentController extends Controller
{


    public function __construct()
    {
      $this->middleware('auth:donor');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $loans = Loan::all();
        return view('donor.students', ['students' => User::all(), 'loans' => $loans]);
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
        return view('donor.showstudent', ['user' => User::findorFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function accepted()
    {
        $loans = Auth::user()->loans;
        return view('donor.accepted', ['loans' => $loans]);
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
     * Upload student result from.
     * csv format
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        //
        if($request->hasfile('loanfile')){
          \Excel::import(new LoansImport, $request->file('loanfile'));}
        else
        \Excel::import(new UsersImport, $request->file('file'));

        alert()->success('File has been uploaded.', 'Successful!')->autoclose('3000');


    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function getupload()
    {
        //
        return view('donor.upload');
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
