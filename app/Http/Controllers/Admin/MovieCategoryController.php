<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MovieCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieCategoryController extends Controller
{
    public function list()
    {
        $categories = MovieCategory::all();

        return view('admin/movie_category_list', ['categories' => $categories]);
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
