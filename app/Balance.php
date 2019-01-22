<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'debit', 'credit', 'balance', 'admin_id', 'bank_id'
    ];


    public function bank()
    {
      return $this->belongsTo('App\Bank');
    }

    public function admin()
    {
      return $this->belongsTo('App\Admin');
    }
}
