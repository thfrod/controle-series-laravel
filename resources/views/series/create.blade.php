<x-layout title="Nova série">
    <form action="{{ route('series.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col-8">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Nome" name="name" id="name" autofocus
                        autocomplete="off" :value="old('name')" required>
                </div>
            </div>

            <div class="col-2">
                <div class="input-group">
                    <input type="number" class="form-control" placeholder="Temporadas" name="seasonsQty"
                        id="seasonsQty" autocomplete="off" :value="old('seasonsQty')" required>
                </div>
            </div>

            <div class="col-2">
                <div class="input-group">
                    <input type="number" class="form-control" placeholder="Episódios" name="episodesPerSeason"
                        id="episodesPerSeason" autocomplete="off" :value="old('episodesPerSeason')" required>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-dark">Enviar</button>
    </form>

</x-layout>
