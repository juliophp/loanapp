<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bvn extends Model
{
    //
    protected $fillable = [
      'bvn','imagebase64', 'basicdetailsBase64',
    ];
}
