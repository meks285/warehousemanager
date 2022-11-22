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
        Schema::create('receive_recipientstock', function (Blueprint $table) {
            $table->id();
            $table->string('cmsrefnumber');
            $table->string('requestlocation');
            $table->string('brandname');
            $table->string('lotno');
            $table->string('quantityreceived');
            $table->string('quantityremaining');
            $table->string('expirydate');
            $table->string('receivedate');
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
        Schema::dropIfExists('receive_recipientstock');
    }
};
