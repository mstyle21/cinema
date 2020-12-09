<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeatStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seat_statuses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\MovieRoom::class, 'movie_room_id');
            $table->foreignIdFor(\App\Models\RoomSeat::class, 'room_seat_id');
            $table->foreignIdFor(\App\Models\User::class, 'user_id');
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
        Schema::dropIfExists('seat_statuses');
    }
}
