<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Loan;
use App\User;
use Illuminate\Http\Request;

class UniversityStudentController extends Controller
{
    //
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
        //
        $loans = Loan::all();
        return view('uni.students', ['loans' => $loans]);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\University  $university
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('uni.showstudent', ['user' => User::findorFail($id)]);
    }

    public function update($id)
    {
      $student = User::findorFail($id);
      $student->degreeverified = 1;
      $student->save();
      return redirect()->route('uni.index');

    }

    public function review()
    {
        //
        $id = Auth::user()->id;
        $users = User::where('degreeverified', '1')->where('university_id', $id)->get();
        return view('uni.reviewedstudents', ['users' => $users]);
    }


}
