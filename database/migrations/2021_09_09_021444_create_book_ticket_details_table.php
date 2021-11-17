<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookTicketDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_ticket_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('bookTicket_id')->unsigned();
            $table->bigInteger('film_id')->unsigned();
            $table->bigInteger('chair_id')->unsigned();
            $table->bigInteger('food_id')->unsigned();
            $table->timestamps();
            $table->foreign('bookTicket_id')->references('id')->on('book_tickets');
            $table->foreign('film_id')->references('id')->on('films');
            $table->foreign('chair_id')->references('id')->on('movie_chairs');
            $table->foreign('food_id')->references('id')->on('food');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_ticket_details');
    }
}
