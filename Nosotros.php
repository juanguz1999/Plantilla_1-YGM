<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Grayscale - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <?php
        include ('Modulos/Nav.php');
        ?>
        <!-- Nosotros-->
        <section class="about-section">
            <div class="container" style="margin-top: 30px">
                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="img/nosotros.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Construcción Cancha de Minerales 7,000m2</h2>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="img/lineasTrabajo/drywall.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Acabados & Mantenimiento</h2>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/obrasEjecutadas/cancha.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Almacén de Residuos Unidad Minera Veta Dorada</h2>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>
        <section class="about-section text-center" id="about">    
            <div class="container col-9">
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-7">
                        <div class="text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center">
                                    <h2 class="text-black mb-4 centrar text-justify text-lg-center">Somos</h2>
                                    <p class=" text-black-50 centrar text-justify">
                                        Una empresa dedicada a la construcción,
                                        diseño, ejecución y supervisión de obras civiles.
                                        Trabajamos con responsabilidad y honestidad,
                                        utilizando nuestro capital humano y alta capacidad
                                        de gestión en el desarrollo de proyectos de construcción,
                                        sin descuidar nunca el cuidado del medio ambiente y
                                        el sistema integrado de gestión en seguridad y salud ocupacional.
                                        Contamos con los equipos y maquinarias para distintos proyectos. 
                                    </p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" /><br><br><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-7">
                        <div class="text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h2 class="text-black mb-4">Mision</h2>
                                    <p class="text-black-50 text-justify">
                                        Crear una alianza estratégica con nuestros clientes
                                        que permita crecimiento, desarrollo y posicionamiento 
                                        líder del mercado. Brindar soluciones integrales de 
                                        ingeniería, diseño, fabricación y montaje. Realizar 
                                        proyectos Metalmecánicos y eléctricos en el menor 
                                        tiempo, preservando nuestro medio ambiente para 
                                        nuestros trabajadores y clientes. 
                                    </p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" ><img class="img-nosotros" src="img/nosotros/mision.png" alt="..." /></div>
                </div><br>

                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-7">
                        <div class="text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h2 class="text-black mb-4">Vision</h2>
                                    <p class="text-black-50 text-justify">
                                        Consolidarnos como empresa líder en el mercado, 
                                        capaz de otorgar soluciones rápidas y efectivas a un 
                                        costo competitivo para nuestros clientes.   
                                    </p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" ><img class="img-nosotros" src="img/nosotros/vision.png" alt="..." /></div>
                </div><br>
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-7">
                        <div class="text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h2 class="text-black mb-4">Valores</h2>
                                    <p class="text-black-50 text-justify">
                                        Mantenemos el compromiso de una empresa que 
                                        opera con ética y lealtad. Los lineamientos de dicho
                                        código que sustentan un trabajo serio, transparente,
                                        y tiene el valor de una política corporativa.

                                    </p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" ><img class="img-nosotros" src="img/nosotros/valores.png" alt="..." /></div>
                </div><br>
            </div>
        </section>    
        <!-- Nuestros clientes -->
        <section class="projects-section" id="clientes">
            <div class="text-center">
                <h2>Nuestros Clientes</h2>
                <br><br>
            </div>
            <div class="container px-4 px-lg-5">    
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <!-- Cliente 1 -->
                    <div class="col-lg-6" ><img class="img-fluid" src="img/clientes/mtc.png" alt="..." /></div>
                    <!-- Cliente 2 -->
                    <div class="col-lg-6" ><img class="img-fluid" src="img/clientes/avinka.jpg" alt="..." /></div>
                    <!-- Cliente 3 -->
                    <div class="col-lg-6" ><img class="img-fluid" src="img/clientes/vetaDorada.jpg" alt="..." /></div>
                    <!-- Cliente 4 -->
                    <div class="col-lg-6" ><img class="img-fluid" src="img/clientes/JOHESALOGO.jpg" alt="..." /></div>
                    <!-- Cliente 5 -->
                    <div class="col-lg-6" ><img class="img-fluid" src="img/clientes/imagina.jpg" alt="..." /></div>
                    <!-- Cliente 6 -->
                    <div class="col-lg-6" ><img class="img-fluid" src="img/clientes/pasteleriaAncky.png" alt="..." /></div>
                    <!-- Cliente 7 -->
                    <div class="col-lg-6" ><img class="img-fluid" src="img/clientes/acFarma.png" alt="..." /></div>
                    <!-- Cliente 8 -->
                    <div class="col-lg-6" ><img class="img-fluid" src="img/clientes/claro.jpg" alt="..." /></div>
                    <!-- Cliente 9 -->
                    <div class="col-lg-6" ><img class="img-fluid" src="img/clientes/techMahindra.jpg" alt="..." /></div>
                    <!-- Cliente 10 -->
                    <div class="col-lg-6" ><img class="img-fluid" src="img/clientes/sanFernando.jpg" alt="..." /></div>
                    <!-- Cliente 11 -->
                    <div class="col-lg-6" ><img class="img-fluid" src="img/clientes/sanJuanBautista.png" alt="..." /></div>
                    <!-- Cliente 12 -->
                    <div class="col-lg-6" ><img class="img-fluid" src="img/clientes/entel.png" alt="..." /></div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <?php
        include ('Modulos/Footer.php');
        ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>


