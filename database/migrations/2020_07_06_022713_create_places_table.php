<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('photo');
            $table->text('address');
            $table->string('distance');
            $table->text('description');
            $table->unsignedBigInteger('placetype_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('placetype_id')
                    ->references('id')->on('placetypes')
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
        Schema::dropIfExists('places');
    }
}
