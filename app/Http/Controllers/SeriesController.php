<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Series;
use App\Models\Season;
use App\Models\Episode;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        $series = Series::all();
        $mensagemSucesso = session('mensagem.sucesso');
        return view("series.index")->with(['series' => $series, 'mensagemSucesso' => $mensagemSucesso]);
    }

    public function create()
    {
        return view("series.create");
    }

    public function store(SeriesFormRequest $request)
    {
        $serie = Series::create($request->all());
        $seasons = [];
        $episodes = [];

        for ($i = 1; $i < $request->seasonsQty; $i++) {
            $seasons[] = [
                'series_id' => $serie->id,
                'number' => $i,
            ];
        }

        Season::insert($seasons);

        foreach ($serie->seasons as $season) {
            for ($j = 1; $j < $request->episodesPerSeason; $j++) {
                $episodes[] = [
                    'season_id' => $season->id,
                    'number' => $j,
                ];
            }
        }

        Episode::insert($episodes);

        return to_route("series.index")->with("mensagem.sucesso", "Série <b>$serie->name</b> adicionada com sucesso.");
    }

    public function destroy(Series $series)
    {
        $series->delete();
        return to_route("series.index")->with("mensagem.sucesso", "Série <b>$series->name</b> removida com sucesso.");
    }

    public function edit(Series $series)
    {
        return view("series.edit")->with("serie", $series);
    }

    public function update(SeriesFormRequest $request, Series $series)
    {
        $series->name = $request->name;
        $series->update();
        return to_route("series.index")->with("mensagem.sucesso", "Série <b>$series->name</b> atualizada com sucesso.");
    }
}
