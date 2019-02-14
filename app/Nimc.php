<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nimc extends Model
{
    //
protected $fillable = [
        'bank_id', 'birthcountry', 'birthdate', 'birthlga', 'birthstate', 'centralID', 'documentno',
        'educationallevel', 'email', 'emplymentstatus', 'firstname', 'gender', 'heigth',
        'maidenname', 'maritalstatus', 'middlename', 'nin', 'nok_address1', 'nok_address2',
        'nok_firstname', 'nok_lga', 'nok_middlename', 'nok_postalcode', 'nok_state',
        'nok_surname', 'nok_town', 'nspokenlang', 'ospokenlang', 'othername', 'pfirstname',
        'photo', 'pmiddlename', 'profession', 'psurname', 'religion', 'residence_AdressLine1',
        'residence_AdressLine2', 'residence_Town', 'residence_lga', 'residence_postalcode',
        'residence_state', 'residencestatus', 'self_origin_lga', 'self_origin_place',
        'self_origin_state', 'signature', 'surname', 'telephoneno', 'title', 'trackingId', 'user_id'
      ];

}
