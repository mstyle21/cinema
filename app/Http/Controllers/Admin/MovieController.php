<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

/**
 * Class MovieController
 * @package App\Http\Controllers\Admin
 */
class MovieController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function list()
    {
        $movies = Movie::all();

        return view('admin/movie_list', ['movies' => $movies]);
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
