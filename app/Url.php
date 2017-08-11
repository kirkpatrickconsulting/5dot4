<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * Class Url
 *
 * @package App
 */
class Url extends Model
{

    /**
     * @var array
     */
    protected $fillable = [
        'name', 'link', 'panel'
    ];
}