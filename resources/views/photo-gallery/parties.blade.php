<!-- resources/views/photo-gallery/parties.blade.php -->
@extends('index.index')

@section('title', 'Galería de la Fiesta')

@section('content')
    <div class="gallery-container">
        <h1>Que Resacón en Moogli - 1 de Marzo de 2024</h1>
        <div class="photo-row">
            <img src="{{ asset('images/fiesta2/IMG_11.jpg') }}" alt="Foto 1">
            <img src="{{ asset('images/fiesta2/IMG_4.jpg') }}" alt="Foto 2">
            <img src="{{ asset('images/fiesta2/IMG_7.jpg') }}" alt="Foto 3">
        </div>
        <a href="{{ url('/photo-gallery/all-photos') }}" class="view-all-button">Ver todas las fotos</a>
    </div>
    <div class="gallery-container">
        <h1>Que Resacón en Bloody - 21 de diciembre de 2023</h1>
        <div class="photo-row">
            <img src="{{ asset('images/fiesta1/IMG_16.jpg') }}" alt="Foto 1">
            <img src="{{ asset('images/fiesta1/IMG_18.jpg') }}" alt="Foto 2">
            <img src="{{ asset('images/fiesta1/IMG_17.jpg') }}" alt="Foto 3">
        </div>
        <a href="{{ url('/parties/all') }}" class="view-all-button">Ver todas las fotos</a>
    </div>
@endsection