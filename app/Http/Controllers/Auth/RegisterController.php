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
            'name' => 'required|string|max:255',
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
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'provider' => isset($data['provider'])?$data['name']:'email',
        'provider_id' => isset($data['provider_id'])?$data['provider_id']:'0000000000000000',
        'provider_photo'=>isset($data['provider_photo'])?$data['provider_photo']:'0000000000000000',
        'photo_url'=>isset($data['photo_url'])?$data['photo_url']:NULL,
        'phone'=>isset($data['phone'])?$data['phone']:NULL,
        'push_token'=>isset($data['push_token'])?$data['push_token']:NULL,
        'reg_location'=>isset($data['reg_location'])?$data['reg_location']:NULL,
        'location'=>isset($data['location'])?$data['location']:NULL,
      ]);
    }
}
