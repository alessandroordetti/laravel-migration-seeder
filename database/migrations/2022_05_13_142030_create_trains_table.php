<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('companyName', 130);
            $table->string('departureStation', 100);
            $table->string('arrivalStation', 100);
            $table->dateTime('departureTime');
            $table->dateTime('arrivalTime');
            $table->string('trainCode', 15);
            $table->integer('coaches');
            $table->boolean('onTime');
            $table->boolean('cancelled');
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
        Schema::dropIfExists('trains');
    }
}
