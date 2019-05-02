<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    protected $fillable = [
        'name',
        'picture',
        'barcode',
        'energetic_value'
    ];

    public function meal() {
        return $this->belongsToMany('App\Meal', 'meal_product', 'meal_id', 'product_id');
    }
}
