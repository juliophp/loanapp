<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Donor extends Authenticatable
{
  //The authentcication guard for admin
  protected $guard = 'donor';


  //
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'donorname', 'username', 'phone', 'photo',
    'email',
  ];


  public function loans()
  {
      return $this->hasMany('App\Loan');
  }

}
