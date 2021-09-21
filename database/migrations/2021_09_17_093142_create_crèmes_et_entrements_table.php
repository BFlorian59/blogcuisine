<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrèmesEtEntrementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crèmes_et_entrements', function (Blueprint $table) {
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
        Schema::dropIfExists('crèmes_et_entrements');
    }
}
