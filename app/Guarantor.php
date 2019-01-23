<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guarantor extends Model
{
    //

    protected $fillable = [
      'firstname', 'lastname', 'occupation', 'address',
      'email', 'phone', 'user_id',
    ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
