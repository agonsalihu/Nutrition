<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nutritions extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'minimum_amount',
        'maximum_amount',
    ];
}
