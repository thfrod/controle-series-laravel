<x-layout title="Temporadas - {!! $series->name !!}">

    <ul class="list-group">
        @foreach ($seasons as $season)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span class="d-block">Temporada {{ $season->number }}</span>

                <span class="badge bg-info">
                    {{ $season->episodes->count() }}
                </span>
            </li>
        @endforeach
    </ul>
</x-layout>
