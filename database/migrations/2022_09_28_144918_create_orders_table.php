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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('requestlocation');
            $table->string('siterefnumber');
            $table->string('cmsrefnumber');
            $table->string('orderdate');
            $table->string('locationcontactperson');
            $table->string('locationcontactphonenumber');
            $table->string('producttype');
            $table->string('brandname');
            $table->string('manufacturer');
            $table->string('packsize');
            $table->string('lotno');
            $table->string('wgtctn');
            $table->string('weight');
            $table->string('quantity');
            $table->string('remarks');
            $table->string('orderstatus');
            $table->string('issuestatus');
            $table->string('requestedby');
            $table->string('requestdate');
            $table->string('authorisedby');
            $table->string('dateauthorized');
            $table->string('issuedby');
            $table->string('issuedate');
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
        Schema::dropIfExists('orders');
    }
};
