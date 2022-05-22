<nav class="navbar navbar-expand-lg navbar-light fixed-top " id="mainNav">
    <div class="container px-4 px-lg-5">

        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <?php $link =  $_SERVER["REQUEST_URI"]; if($link == "/Plantilla_1-YGM/"){?>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="Nosotros.php">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="Proyectos.php">Proyectos</a></li>
                    <li class="nav-item"><a class="nav-link" href="Contacto.php">Contactanos</a></li>
                    <li class="nav-item"><a class="nav-link" href="Contacto.php#ubication">Ubicanos</a></li>
                    <li class="nav-item"><a class="nav-link" href="Nosotros.php#clientes">Nuestros Clientes</a></li>
                </ul>
            <?php } else {if($link == "/Plantilla_1-YGM/Nosotros.php"){?>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="../Plantilla_1-YGM">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="Proyectos.php">Proyectos</a></li>
                    <li class="nav-item"><a class="nav-link" href="Contacto.php">Contactanos</a></li>
                    <li class="nav-item"><a class="nav-link" href="Contacto.php#ubication">Ubicanos</a></li>
                    <li class="nav-item"><a class="nav-link" href="Nosotros.php#clientes">Nuestros Clientes</a></li>
                </ul>
            <?php } else {if($link == "/Plantilla_1-YGM/Proyectos.php"){?>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="../Plantilla_1-YGM">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="Nosotros.php">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="Contacto.php">Contactanos</a></li>
                    <li class="nav-item"><a class="nav-link" href="Contacto.php#ubication">Ubicanos</a></li>
                    <li class="nav-item"><a class="nav-link" href="Nosotros.php#clientes">Nuestros Clientes</a></li>
                </ul>
            <?php } else {if($link == "/Plantilla_1-YGM/Contacto.php"){?>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="../Plantilla_1-YGM">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="Nosotros.php">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="Proyectos.php">Proyectos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#ubication">Ubicanos</a></li>
                    <li class="nav-item"><a class="nav-link" href="Nosotros.php#clientes">Nuestros Clientes</a></li>
                </ul>
            <?php }}}}?>
        </div>
    </div>
</nav>

 