<x-layout title="Séries">
    <a class="btn btn-dark mb-2" href="{{ route('series.create') }}">Criar nova série</a>
    <ul class="list-group">
        @foreach ($series as $serie)
            <div class="d-flex gap-1 mb-2">
                <li class="list-group-item flex-fill">#{{ $serie->id }} - {{ $serie->name }}</li>
                <a class="btn btn-dark" href="">Editar</a>
                <form action="{{ route('series.delete', $serie) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <input class="btn btn-danger" type="submit" value="Excluir" />
                </form>
            </div>
        @endforeach
    </ul>
</x-layout>
