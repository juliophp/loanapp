<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class University extends Authenticatable
{
    use Notifiable;


    //The authentcication guard for admin
    protected $guard = 'uni';


    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'universityname', 'username', 'phone', 'photo',
      'email', 'address', 'addresscity', 'addressstate',
    ];

    public function users(){
      return $this->hasMany('App\User');
    }


}
