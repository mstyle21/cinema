<?php

use App\Models\Movie;
use App\Models\Room;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovieRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Movie::class, 'movie_id');
            $table->foreignIdFor(Room::class, 'room_id');
            $table->dateTime('play_time');
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
        Schema::dropIfExists('movie_rooms');
    }
}
