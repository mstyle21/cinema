<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function list()
    {
        $movies = Movie::all();

        return view('home', ['movies' => $movies]);
    }
}
