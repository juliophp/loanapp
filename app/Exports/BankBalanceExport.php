<?php

namespace App\Exports;

use Auth;
use App\Balance;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class BankBalanceExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
      $balances = Auth::user()->balances;
      return view('export.banks.balance', ['balances' => $balances]);
    }
}
