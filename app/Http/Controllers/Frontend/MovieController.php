<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * @param Request $request
     * @param $id
     * @return Application|Factory|View
     */
    public function details(Request $request, $id)
    {
        $movie = Movie::select()->where(['id' => $id])->first();
        if (is_null($movie)) {
            return redirect('/');
        }

        return view(
            'frontend/movie',
            [
                'movie' => $movie
            ]
        );
    }

    public function search(Request $request)
    {
        $name = $request->post('name');
        $name = '%' . $name . '%';
        $movies = Movie::select()->where('name', 'LIKE', $name)->get();

        $html = (string) view('frontend/movie-results', ['movies' => $movies]);
        return response(json_encode(['status' => 'success', 'html' => $html]));
    }
}
