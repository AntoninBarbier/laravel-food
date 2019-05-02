<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyMealProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('meal_product', function (Blueprint $table) {
            $table->renameColumn('meals_id', 'meal_id');
            $table->renameColumn('products_id', 'product_id');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('meal_product', function (Blueprint $table) {
            $table->renameColumn('meal_id', 'meals_id');
            $table->renameColumn('product_id', 'products_id');
        });
    }
}
