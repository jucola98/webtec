<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description');
            $table->float('price',6,2);
            $table->bigInteger('cat_id')->unsigned();
            $table->foreign('cat_id')->references('id')->on('category');
            $table->text('details');
            $table->integer("sale",false,true)->default(0); //saldi dallo 0.00 a 99.00 
            $table->float("rating",2,1)->default(3.5);
            $table->integer("stock",false,true)->default(0);

            /*
                -----ex json---- 
            {
                "color": [
                "red",
                "black"
                         ],
                "size": [
                "xl",
                "xxl"
                        ]
            }
            */
            $table->text("imgURI")->nullable();
            $table->text("URI")->nullable();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article');
    }
}
