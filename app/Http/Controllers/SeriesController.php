<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        $series = Serie::orderBy('name')->paginate(10);
        $mensagemSucesso = session('mensagem.sucesso');
        return view("series.index")->with(['series' => $series, 'mensagemSucesso' => $mensagemSucesso]);
    }

    public function create()
    {
        return view("series.create");
    }

    public function store(SeriesFormRequest $request)
    {
        $serie = Serie::create($request->all());
        return to_route("series.index")->with("mensagem.sucesso", "Série $serie->name adicionada com sucesso.");
    }

    public function destroy(Serie $series)
    {
        $series->delete();
        return to_route("series.index")->with("mensagem.sucesso", "Série $series->name removida com sucesso.");
    }

    public function edit(Serie $series)
    {
        dd($series->season);
        return view("series.edit")->with("serie", $series);
    }

    public function update(SeriesFormRequest $request, Serie $series)
    {
        $series->name = $request->name;
        $series->update();
        return to_route("series.index")->with("mensagem.sucesso", "Série $series->name atualizada com sucesso.");

    }
}
