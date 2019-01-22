<?php

namespace App\Http\Controllers;

use Auth;
use Alert;
use App\Bank;
use App\Balance;
use Illuminate\Http\Request;

class BalanceController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $balances = Balance::all();
        return view('admin.ewallet.index', ['balances' => $balances]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.ewallet.create');
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
        if(Auth::user()->balances->count() > 0)
          $bal = Bank::findOrFail($request->bank)->balances->last()->balance;
        else
          $bal = 0;
        $balance = new Balance;
        $balance->credit = $request->amount;
        $balance->balance  = $bal + $request->amount;
        $balance->bank_id  = $request->bank;
        $balance->admin_id = Auth::user()->id;
        $balance->save();
        alert()->success('Wallet Value Added', 'Successful');
        return redirect()->route('admin.wallet.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Balance  $balance
     * @return \Illuminate\Http\Response
     */
    public function show(Balance $balance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Balance  $balance
     * @return \Illuminate\Http\Response
     */
    public function edit(Balance $balance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Balance  $balance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Balance $balance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Balance  $balance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Balance $balance)
    {
        //
    }
}
