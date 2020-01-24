<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredients extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description'];

    /**
     * The nutritions that belong to the Ingredient.
     */
    public function nutritions()
    {
        return $this->belongsToMany('App\Nutritions', 'nutrition_amounts', 'ingredient_id', 'nutrition_id')->withPivot('amount');
    }
}
