<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        $series = Serie::orderBy('name')->paginate(10);
        return view("series.index")->with('series', $series);
    }

    public function create()
    {
        return view("series.create");
    }

    public function store(Request $request)
    {
        Serie::create($request->all());
        return redirect(route("series.index"));
    }

    public function delete(Serie $serie)
    {
        $serie->delete();
        return redirect(route("series.index"));
    }
}
