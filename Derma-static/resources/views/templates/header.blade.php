<header  class="" id="header">
    <nav class="navbar navbar-expand-lg py-2 navcolor " id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="/"> <img style="background:rgba(255,255,255,0.5);" class="w-100" id="imglogo" src="{{ url('media/logo-60h.png')}}"></a>
            <button class="navbar-toggler btn-ga-primary navbar-light w-header-button" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                    
                    <li class="nav-item"><a href="/" class="rounded-1 mx-2 nav-ga-link-white {{ ($head == 'Inicio' ? 'activate' : '') }}">Inicio</a></li>
                    
                    <li class="nav-item"><a href="nosotros" class="rounded-1 mx-2 nav-ga-link-white {{ ($head == 'Nosotros' ? 'activate' : '') }}">Nosotros</a></li>
                    
                    <li class="nav-item"><a href="servicios" class="rounded-1 mx-2 nav-ga-link-white {{ ($head == 'Servicios' ? 'activate' : '') }}">Servicios</a></li>
                    
                    <li class="nav-item"><a href="padecimientos" class="rounded-1 mx-2 nav-ga-link-white {{ ($head == 'Padecimientos' ? 'activate' : '') }}">Padecimientos</a></li>
                    
                    <li class="nav-item"><a href="contacto" class="rounded-1 mx-2 nav-ga-link-white {{ ($head == 'Contacto' ? 'activate' : '') }}">Contacto</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>
</header>