<?php

namespace App;

class Permission
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name', 'display_name', 'description'
    ];
    
}