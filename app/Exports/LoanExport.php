<?php

namespace App\Exports;

use App\Loan;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class LoanExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $loans = Loan::where('isclaimed', '0')->whereNull('donor_id')->get();
        return view('export.banks.loans', [
            'loans' => $loans
        ]);
    }
}
