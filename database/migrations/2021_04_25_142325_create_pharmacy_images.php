<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePharmacyImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacy_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pharmacy_id')->index('pharmacy_id_index');
            $table->string('image');
            $table->timestamps();

            $table->foreign('pharmacy_id')
                ->references('id')
                ->on('pharmacies')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pharmacy_images');
    }
}
