<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function __call($method, $parameters)
    {
        if($method=='shashi'){
            echo "you called shashi". json_encode($parameters);
        } else{
            echo "Heyya hp haya hp $method";
        }
    }
   
    public static function __callStatic($method, $parameters)
    {
        if($method=='shashi'){
            echo "you called shashi". json_encode($parameters);
        } else{
            echo "Heyya hp haya hp $method";
        }
    }
}
