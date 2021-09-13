<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('color');
            $table->integer('age');
        });

        $carBMW = new Car;
        $carBMW->name = 'BMW';
        $carBMW->color = 'gray';
        $carBMW->age = 10;
        $carBMW->save();

        $carAudi = new Car;
        $carAudi->name = 'Audi';
        $carAudi->color = 'blue';
        $carAudi->age = 7;
        $carAudi->save();

        $carMercedes = new Car;
        $carMercedes->name = 'Mercedes';
        $carMercedes->color = 'white';
        $carMercedes->age = 3;
        $carMercedes->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
