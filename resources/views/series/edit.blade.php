<x-layout title="Editar série">
    <form action="{{ route('series.update', $serie->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Nome" name="name" id="name" autocomplete="off"
                value="{{ $serie->name }}">
        </div>
        <button type="submit" class="btn btn-dark">Enviar</button>
    </form>
</x-layout>
