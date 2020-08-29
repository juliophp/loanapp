<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use Alert;
use App\Loan;
use App\University;
use Illuminate\Http\Request;

class UniversityController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth:uni');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $id = Auth::user()->id;
      //$users = Loan::all()->unique('user_id')->get()->user;
      $users = DB::select('SELECT * FROM
        users WHERE university_id = :id AND
        id IN (SELECT user_id FROM loans where loanstatus = "pending verification")', [":id" => $id]);

        return view('uni.index', ['users' => $users]);
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\University  $university
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $profile = University::findorFail($id);
        return view('uni.show', ['profile' => $profile]);
    }


}
