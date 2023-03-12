<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
    public function up()
    {
        Schema::create('guides', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title', 255);
            $table->string('description', 255);
            $table->string('image' , 255);
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
        Schema::dropIfExists('guides');
    }
}
