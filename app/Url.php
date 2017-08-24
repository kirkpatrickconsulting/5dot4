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
        'title', 'url', 'description', 'panel'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
