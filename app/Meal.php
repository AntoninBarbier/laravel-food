<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $table = "meals";

    public function products() {
        return $this->belongsToMany('App\Product', 'meal_product', 'meal_id', 'product_id');
    }
}
