<x-layout title="Show image">
    <h1>{{ $image->title }}</h1>
    <img src="{{ Storage::url($image->file) }}" alt="{{ $image->title }}" width="300" />
</x-layout>
