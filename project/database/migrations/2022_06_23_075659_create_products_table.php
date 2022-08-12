<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image_uri')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->unsignedInteger('availability')->default(0);
            $table->string('volume');
            $table->string('material');
            $table->string('usebility');
            $table->string('size');
            $table->string('weight');
            $table->string('new_string')->nullable();
            $table->string('price');
            $table->string('article');
            $table->string('garenti_count');
            $table->string('payment');
            $table->unsignedInteger('is_active')->default(0);
            $table->unsignedInteger('is_new')->default(0);
            $table->unsignedInteger('is_popular')->default(0);
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
