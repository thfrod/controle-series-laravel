<x-layout title="Editar série">
    <x-series.form :action="route('series.update', $serie->id)" :name="$serie->name" :update="true"></x-series.form>
</x-layout>
