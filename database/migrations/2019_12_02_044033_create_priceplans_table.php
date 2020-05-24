<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriceplansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('priceplans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title');
            $table->longText('description');
            $table->double('price',8,2);
            $table->longText('product_link')->nullable();
            $table->string('image',255)->nullable();
            $table->tinyInteger('status')->defaut(1);
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
        Schema::dropIfExists('priceplans');
    }
}
