<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVariantToCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cart_content', function (Blueprint $table) {
            $table->bigInteger('variant_id')->unsigned();
            $table->foreign('variant_id')->references('id')->on('variant');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cart_content', function (Blueprint $table) {
            $table->dropColumn('variant_id');
        });
    }
}
