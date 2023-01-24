<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_members', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('expert')->nullable();
            $table->string('fb_one')->nullable();
            $table->string('ins_two')->nullable();
            $table->string('ln_three')->nullable();
            $table->string('de_four')->nullable();
            $table->string('image')->default('image.jpg');
            $table->longText('about')->nullable();
            $table->string('degree')->nullable();
            $table->string('experience')->nullable();
            $table->longText('hobbies')->nullable();
            $table->longText('faculty')->nullable();
            $table->string('department')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('skype')->nullable();
            $table->integer('language_per')->nullable();
            $table->integer('team_per')->nullable();
            $table->integer('development_per')->nullable();
            $table->integer('design_per')->nullable();
            $table->integer('innovation_per')->nullable();
            $table->integer('communication_per')->nullable();
            $table->string('big_image')->nullable();
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
        Schema::dropIfExists('team_members');
    }
}
