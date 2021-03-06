<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens,Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
        'provider','provider_id','provider_photo',
        'photo_url','phone',
        'reg_location','api_token','push_token','location'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','api_token','push_token',
        'reg_location'
    ];

    public function addNew($input)
    {
        $check = static::where('provider_id',$input['provider_id'])->first();
        if(is_null($check)){
            return static::create($input);
        }
        return $check;
    }
}
