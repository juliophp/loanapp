<?php

namespace App\Imports;

use App\User;
use App\Loan;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class UsersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            //
            'firstname'         => $row['firstname'],
            'middlename'        => $row['middlename'],
            'lastname'          => $row['lastname'],
            'dob'               => $row['dob'],
            'username'          => $row['username'],
            'gender'            => $row['gender'],
            'phone'             => $row['phone'],
            'email'             => $row['email'],
            'nationality'       => $row['nationality'],
            'university_id'     => $row['university_id'],
            'bvn'               => $row['bvn'],
            'bvnverified'       => $row['bvnverified'],
            'degreeverified'    => $row['degreeverified'],
            'program'           => $row['program'],
            'yearofgraduation'  => $row['yearofgraduation'],
            'addresscountry'    => $row['addresscountry'],
            'cgpa'              => $row['cgpa'],
            'currentgpa'        => $row['currentgpa'],
            'password'          => Hash::make($row['password'])

        ]);
    }
}
