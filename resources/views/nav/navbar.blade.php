<nav>
    <!-- Imagen y logo -->
    <div class="imagen-logo">
        <!-- Usa la función asset() para acceder a la imagen dentro de la carpeta public -->
        <a href="{{ url('/') }}"><img src="{{ asset('images/logo_tfg_b.png') }}" alt="Logo"></a>
        <a class="logo-text" href="{{ url('/') }}"><h3>Cimorra <br>Events</h3></a>
    </div>

    <!-- Checkbox para el menú responsivo -->
    <input id="menu-toggle" type="checkbox">
    <label class="menu-button-container" for="menu-toggle">
        <div class="menu-button"></div>
    </label>

    <!-- Lista de navegación -->
    <ul class="lista">
        <li><a href="{{ url('/') }}">Inicio</a></li>
        <li><a href="{{ url('/eventos') }}">Eventos</a></li>
        <li><a href="{{ url('/galeria') }}">Galería</a></li>
        <li><a href="{{ url('/contacto') }}">Contáctanos</a></li>
        <li><a href="{{ url('/sobre-nosotros') }}">Sobre Nosotros</a></li>
    </ul>
</nav>