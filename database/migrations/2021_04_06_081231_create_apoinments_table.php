<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApoinmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apoinments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('chamber_id');
            $table->integer('serial_number')->default(0);
            $table->date('date');
            $table->string('name');
            $table->string('phone');
            $table->string('address');
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('apoinments');
    }
}
