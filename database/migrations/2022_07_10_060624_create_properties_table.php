<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->integer('price');
            $table->integer('image')->nullable();
            $table->integer('s_price')->default(0);
            $table->integer('description');
            $table->string('location');
            $table->string('rooms');
            $table->string('keywords')->nullable();
            $table->boolean('in_stock')->default(true);
            $table->boolean('is_deleted')->default(false);
            $table->boolean('is_featured')->default(false);
            $table->string('area');
            $table->string('type');
            $table->string('video');
            $table->string('amenities');
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
        Schema::dropIfExists('properties');
    }
}
