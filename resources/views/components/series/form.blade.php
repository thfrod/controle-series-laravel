<form action="{{ $action }}" method="POST">

    @csrf
    @if ($update)
        @method('PUT')
    @endif

    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Nome" name="name" id="name" autocomplete="off"
            @isset($name)
            value="{{ $name }}"
            @endisset>
    </div>
    <button type="submit" class="btn btn-dark">Enviar</button>
</form>
