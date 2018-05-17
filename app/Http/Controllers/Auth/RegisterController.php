<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'country_code' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'drivers_license' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'car_model' => 'required|string|max:255',
            'trim' => 'required|string|max:255',
            'make' => 'required|string|max:255',
            'plate_number' => 'required|string|max:255',
            'num_passengers' => 'required|integer|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {


        return User::create([
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'country_code' => $data['country_code'],
            'phone' => $data['phone'],
            'drivers_license' => $data['drivers_license'],
            'city' => $data['city'],
            'car_model' => $data['car_model'],
            'trim' => $data['trim'],
            'make' => $data['make'],
            'plate_number' => $data['plate_number'],
            'num_passengers' => $data['num_passengers'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'car_image' => $data['car_image'],
        ]);
    }
}
