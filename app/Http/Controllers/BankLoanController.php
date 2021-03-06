<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loan;
use Alert;
use Auth;

class BankLoanController extends Controller
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
        return view('banks.loan', ['loans' => $loans]);
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
        $loan = Loan::findOrFail($id);
        if(($loan->isclaimed == 1) && ($loan->bank->id != Auth::user()->id))
          abort(404);

        $loan->isclaimed = '1';
        $loan->save();
        return view('banks.show', ['loan' => $loan]);
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

        $loan = Loan::findOrFail($id);
        if($request->unclaim == "unclaim")
          $loan->isclaimed = '0';
        else if($request->unclaim = "grant")
        {
          $loan->isclaimed == '1';
          $loan->bank_id = Auth::user()->id;
        }
        $loan->save();
        alert()->success('Loan application accepted.');
        return redirect()->route('bank.loans.index');

    }



    public function granted()
    {
        $loans = Auth::user()->loans()->get();
        return view('banks.grant', ['loans' => $loans]);
    }


}
