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
        Schema::create('tbl_about', function (Blueprint $table) {
            $table->id();
            $table->string('text_1');
            $table->string('text_2');
            $table->string('text_3');
            $table->string('text_4');
            $table->string('text_5');
            $table->string('img_1');
            $table->string('img_2');
            $table->string('img_3');
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
        Schema::dropIfExists('tbl_about');
    }
};
