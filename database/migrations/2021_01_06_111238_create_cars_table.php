<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title',150);
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('address')->nullable();
            $table->string('brand')->nullable();
            $table->string('series')->nullable();
            $table->string('model')->nullable();
            $table->string('yil')->nullable();
            $table->string('yakittipi')->nullable();
            $table->string('vitestipi')->nullable();
            $table->string('motorhacmi')->nullable();
            $table->string('motorgucu')->nullable();
            $table->string('kilometre')->nullable();
            $table->string('renk')->nullable();
            $table->string('image',75)->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->float('price')->nullable();
            $table->text('detail')->nullable();
            $table->string('slug',100)->nullable();
            $table->string('status',5)->nullable()->default('False');
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
        Schema::dropIfExists('cars');
    }
}
