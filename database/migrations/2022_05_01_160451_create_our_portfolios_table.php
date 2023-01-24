<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOurPortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('our_portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('category_name')->nullable();
            $table->string('image')->nullable();
            $table->string('big_image')->nullable();
            $table->string('button')->nullable();
            $table->string('link')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('our_portfolios');
    }
}
