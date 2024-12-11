<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('service_name')->nullable();
       $table->string('title')->nullable();
         $table->string('category')->nullable();
        $table->string('images')->nullable();
        $table->longtext('content')->nullable();
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
        Schema::dropIfExists('services');
    }
}
