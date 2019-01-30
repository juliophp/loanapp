<?php

namespace App\Http\Controllers;

use Auth;
use Alert;
use App\Bank;
use App\Balance;
use Illuminate\Http\Request;
use App\Exports\BankBalanceExport;

class BankBalanceController extends Controller
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
      $balances = Auth::user()->balances;
      return view('banks.ewallet.index', ['balances' => $balances]);
  }

  public function export()
  {
      return \Excel::download(new BankBalanceExport, 'balance.xlsx');
  }
}
