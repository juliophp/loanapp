<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    //
    protected $fillable = [
        'Name', 'ConfidenceScore', 'BureauID',
        'DateOfBirth', 'Gender', 'PhoneNumber', 'ImagePath', 'Message',
        'ReferenceNo' ];
}
