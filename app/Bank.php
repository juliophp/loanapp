<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Bank extends Authenticatable
{
    use Notifiable;


    //The authentcication guard for admin
    protected $guard = 'bank';


    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'bankname', 'username', 'phone', 'photo',
      'email', 'address', 'addresscity', 'addressstate',
    ];


    public function loans()
    {
        return $this->hasMany('App\Loan');
    }

    public function balances()
    {
      return $this->hasMany('App\Balance');
    }
}
