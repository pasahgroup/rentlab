<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMultbookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multibookings', function (Blueprint $table) {
             $table->bigIncrements('id');
                  $table->string('name')->nullable();
             $table->integer('brand_id')->nullable();
              $table->integer('model_id')->nullable();

                $table->decimal('price')->nullable();
              $table->integer('no_days')->nullable();

                $table->decimal('total_costs')->nullable();

                    $table->integer('pick_location')->nullable();
              $table->integer('drop_location')->nullable();
               $table->integer('booked_by')->nullable();
                   
              $table->timestamp('pick_time')->nullable();
              $table->timestamp('drop_time')->nullable();

            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('multibookings');
    }
}
