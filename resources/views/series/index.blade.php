<x-layout title="Séries">
    <a class="btn btn-dark mb-2" href="{{ route('series.create') }}">Criar nova série</a>
    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span>#{{ $serie->id }} - {{ $serie->name }}</span>
                <div>
                    <form action="{{ route('series.delete', $serie) }}" method="post" class="d-inline-flex">
                        @method('DELETE')
                        @csrf
                        <input class="btn btn-danger" type="submit" value="Excluir" />
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</x-layout>
