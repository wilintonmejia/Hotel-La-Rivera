<nav class="navbar navbar-expand-lg navbar-light bg-light"> 
    <a class="navbar-brand" href="{{ url('/') }}" style="color:#28a745"><span style="font-size:15pt">&#9010;</span>Hotel La Rivera</a> 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> 
        <span class="navbar-toggler-icon"></span> 
    </button> 
    <div class="collapse navbar-collapse" id="navbarNavDropdown"> 
        <ul class="navbar-nav">
            <li class="nav-item dropdown"> 
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#28a745">
                 Hotel 
                </a> 
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                    <a class="dropdown-item" href="{{ url('hotel/historia') }}">Historia</a>
                    <a class="dropdown-item" href="{{ url('hotel/mision-vision') }}">Misión y Visión</a> 
                    <a class="dropdown-item" href="{{ url('hotel/ubicación') }}">Ubicación</a> 
                </div> 
            </li>
            <li class="nav-item dropdown"> 
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#28a745">
                 Servicios 
                </a> 
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                    <a class="dropdown-item" href="{{ url('servicios/habitaciones') }}">Habitaciones</a>
                    <a class="dropdown-item" href="{{ url('servicios/eventos/{id}') }}">Eventos</a> 
                </div>
            </li> 
            <li class="nav-item"> 
                <a class="nav-link" href="{{ url('reservas') }}" style="color:#28a745">Reservas</a> 
            </li> 
            <li class="nav-item"> 
                <a class="nav-link" href="{{ url('contáctenos') }}" style="color:#28a745">Contactos</a> 
            </li> 
        </ul> 
    </div> 
</nav>
