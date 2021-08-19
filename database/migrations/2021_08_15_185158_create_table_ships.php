<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableShips extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ships', function (Blueprint $table) {
            $table->id();
            $table->string('sender_name',191)->nullable();
            $table->string('sender_company',191)->nullable();
            $table->string('sender_address',191)->nullable();
            $table->string('sender_city',191)->nullable();
            $table->string('sender_state',191)->nullable();
            $table->string('sender_country',191)->nullable();
            $table->string('sender_phone',191)->nullable();
            $table->string('sender_zipcode',191)->nullable();
            $table->string('sender_email',191)->nullable();

            $table->string('consignee_name',191)->nullable();
            $table->string('consignee_company',191)->nullable();
            $table->string('consignee_address',191)->nullable();
            $table->string('consignee_city',191)->nullable();
            $table->string('consignee_state',191)->nullable();
            $table->string('consignee_country',191)->nullable();
            $table->string('consignee_phone',191)->nullable();
            $table->string('consignee_zipcode',191)->nullable();
            $table->string('consignee_email',191)->nullable();
            $table->string('packages',191)->nullable();
            $table->string('packaging',191)->nullable();
            $table->string('service_type',191)->nullable();
            $table->string('description',191)->nullable();
            $table->string('value',191)->nullable();
            $table->string('weight',191)->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ships');
    }
}
