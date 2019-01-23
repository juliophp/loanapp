<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'loanpurpose', 'loanamount','loanyear', 
      'loanstatus', 'isclaimed', 'ispaid', 'donor_id', 'user_id'
    ];


    public function user(){
      return $this->belongsTo('App\User');
    }

    public function bank(){
      return $this->belongsTo('App\Bank');
    }

    public function donor(){
      return $this->belongsTo('App\Donor');
    }


}
