<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingdetailsplacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listingdetailsplaces', function (Blueprint $table) {
            $table->unsignedInteger('listing_details_id');
            $table->unsignedInteger('places_id');
            $table->timestamps();
            $table->SoftDeletes();

            $table->foreign('listing_details_id')
                    ->references('id')->on('listings_details')
                    ->onDelete('cascade');
                    
            $table->foreign('places_id')
                    ->references('id')->on('places')
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
        Schema::dropIfExists('listingdetailsplaces');
    }
}
