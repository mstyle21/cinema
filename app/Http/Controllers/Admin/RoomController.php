<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Room;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function list()
    {
        $rooms = Room::all();

        return view('admin/room_list', ['rooms' => $rooms]);
    }

    public function add()
    {

    }

    public function edit()
    {

    }

    public function delete()
    {

    }
}
