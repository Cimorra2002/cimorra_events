<!-- resources/views/parties/index.blade.php -->
@extends('index.index')

@section('title', 'Galería de la Fiesta')

@section('content')
    <div class="gallery-container">
        <h1>Fiesta de Cumpleaños - 1 de Noviembre de 2024</h1>
        <div class="photo-row">
            <img src="{{ asset('images/foto1.jpg') }}" alt="Foto 1">
            <img src="{{ asset('images/foto2.jpg') }}" alt="Foto 2">
            <img src="{{ asset('images/foto3.jpg') }}" alt="Foto 3">
            <img src="{{ asset('images/foto4.jpg') }}" alt="Foto 4">
        </div>
        <a href="{{ url('/parties/all') }}" class="view-all-button">Ver todas las fotos</a>
    </div>
    <div class="gallery-container">
        <h1>Fiesta de Cumpleaños - 1 de Noviembre de 2024</h1>
        <div class="photo-row">
            <img src="{{ asset('images/foto1.jpg') }}" alt="Foto 1">
            <img src="{{ asset('images/foto2.jpg') }}" alt="Foto 2">
            <img src="{{ asset('images/foto3.jpg') }}" alt="Foto 3">
            <img src="{{ asset('images/foto4.jpg') }}" alt="Foto 4">
        </div>
        <a href="{{ url('/parties/all') }}" class="view-all-button">Ver todas las fotos</a>
    </div>
@endsection