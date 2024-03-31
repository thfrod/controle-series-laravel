<x-layout title="Nova série">
    <form action="{{ route('series.store') }}" method="POST">
        @csrf
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Nome" name="name" id="name">
        </div>
        <button type="submit" class="btn btn-dark">Enviar</button>
    </form>
</x-layout>
