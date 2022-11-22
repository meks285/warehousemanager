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
        Schema::create('receive_general', function (Blueprint $table) {
            $table->id();
            $table->string('brandname');
            $table->string('lotno');
            $table->date('expirydate');
            $table->string('cabinetno');
            $table->string('quantity');
            $table->string('quantityremaining');
            $table->string('suppliedby');
            $table->date('datereceived');
            $table->string('dataentryby');
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
        Schema::dropIfExists('receive_general');
    }
};
