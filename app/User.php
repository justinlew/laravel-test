<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'fname', 'lname', 'country_code', 'phone', 'email', 'gender', 'class_num',
        'drivers_license', 'city', 'car_model', 'trim', 'make', 'plate_number', 'num_passengers', 'car_image', 'license_plate_image', 'insurance_image', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
