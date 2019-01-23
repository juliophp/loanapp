<?php

namespace App\Imports;

use Auth;
use App\Loan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class LoansImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Loan([
            //
            'loanpurpose'       => 'Scholarship',
            'loanamount'        => $row['amount'],
            'loanyear'      => $row['loanyear'],
            'loanstatus'    => 'Accepted',
            'isclaimed'     => '0',
            'ispaid'        => '1',
            'user_id'       => $row['user_id'],
            'donor_id'      => Auth::user()->id,


        ]);
    }
}
