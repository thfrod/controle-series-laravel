<x-layout title="{{ __('messages.app_name') }}">
    <a class="btn btn-dark mb-2" href="{{ route('series.create') }}">Criar nova série</a>
    @isset($mensagemSucesso)
        <div class="alert alert-success">
            {!! $mensagemSucesso !!}
        </div>
    @endisset
    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <span class="d-block">#{{ $serie->id }} - {{ $serie->name }}</span>
                    <a href="{{ route('seasons.index', $serie) }}">Ver temporadas</a>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <a href="{{ route('series.edit', $serie->id) }}" class="btn btn-dark btn-sm">Editar</a>
                    <form action="{{ route('series.destroy', $serie) }}" method="post" class="d-inline-flex">
                        @method('DELETE')
                        @csrf
                        <input class="btn btn-danger btn-sm" type="submit" value="Excluir" />
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</x-layout>
