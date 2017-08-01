<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfografsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infografs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('img');
            $table->string('alt');
            $table->integer('position')->nullable();
            $table->integer('visible')->default(1);
            $table->text('text');
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
        Schema::dropIfExists('infografs');
    }
}
