<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loan;
use Alert;
use Auth;


class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('loan.index', ['loans' => Loan::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('loan.create');

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
        $request->validate([
              'loanamount'=>'required|string',
              'loanpurpose' => 'required|string',
              'loanyear' => 'required|string',
              'bank'=> 'required|string',
              'accountnumber' => 'required|string',
            ]);
            $loan = new Loan();
            $loan->loanamount = $request->loanamount;
            $loan->loanpurpose = $request->loanpurpose;
            $loan->loanyear = $request->loanyear;
            $loan->bank = $request->bank;
            $loan->accountnumber = $request->accountnumber;
            $loan->user_id = Auth::user()->id;

            $loan->save();

            alert()->success('Loan has been created', 'Successful!');
            return redirect()->route('students.loans');


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
