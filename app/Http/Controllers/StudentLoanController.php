<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loan;
use Alert;
use Auth;

class StudentLoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $loans = Auth::User()->loans()->get();
        return view('loan.index', ['loans' => $loans]);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        //
        $loan = Loan::findOrFail($id);
        if($request->has('vpc_TxnResponseCode'))
        {
           if($request->input('vpc_TxnResponseCode') === '0')
           {
             $loan->ispaid = 1;
             $loan->loanstatus = 'Submitted - Pending Review';
             $loan->save();
             alert()->success('Loan application successful', 'Successful!');

           }else
           alert()->error('Payment not Successful', 'Error!');
        }
        return view('loan.show', ['loan' => $loan]);

    }

}
