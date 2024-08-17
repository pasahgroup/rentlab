<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
             $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->integer('brand_id')->default(0);
             $table->integer('car_body_type_id')->default(0);
              $table->integer('tag_id')->default(0);

            $table->integer('seater_id')->nullable();
             $table->integer('location_id')->nullable();
            $table->decimal('price',18,8)->default(0);
            $table->text('details')->nullable();
            $table->json('images')->nullable();
            $table->string('model')->nullable();
            $table->integer('doors')->default(0);
            $table->string('transmission', 40)->nullable();
            $table->string('fuel_type', 40)->nullable();
            $table->json('specifications')->nullable();
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('vehicles');
    }
}
