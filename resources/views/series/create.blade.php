<x-layout title="Nova série">
    <x-series.form :action="route('series.store')" :nome="old('name')" :update="false"></x-series.form>
</x-layout>
