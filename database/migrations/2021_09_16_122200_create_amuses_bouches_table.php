<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmusesBouchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amuses_bouches', function (Blueprint $table) {
            $table->id();
            $table->text('titre');
            $table->text('origine');
            $table->text('ingredient');
            $table->text('histoire');
            $table->string('video');
            $table->string('image');
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
        Schema::dropIfExists('amuses_bouches');
    }
}
