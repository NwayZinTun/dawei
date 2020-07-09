<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('listing_id');
            $table->integer('content');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('listing_id')
                    ->references('id')->on('listings')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listing_details');
    }
}
