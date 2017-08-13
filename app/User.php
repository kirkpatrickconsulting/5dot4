<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;


/**
 * Class User
 *
 * @package App
 */
class User extends Authenticatable
{
    use Notifiable, HasRoles;


    /**
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'address1', 'address2', 'city', 'state', 'zip', 'phone'
    ];


    /**
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}
