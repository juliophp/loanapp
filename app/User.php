<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'middlename', 'lastname', 'dob', 'username', 'gender',
        'nationality', 'stateoforigin', 'phone', 'bvn', 'degreeverified',
        'bvnverified', 'yearofgraduation','creditchecked', 'addresslineone',
        'addresslinetwo', 'addresscity', 'addressstate', 'addressyears',
        'facebookhandle', 'program', 'twitterhandle', 'university_id',
        'department', 'cgpa', 'currentgpa', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function loans(){
      return $this->hasMany('App\Loan');
    }

    public function university(){
      return $this->belongsTo('App\University');
    }
}
