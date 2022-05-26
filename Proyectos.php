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
    <body "id="page-top">
        <!-- Navigation-->
        <?php
            include ('Modulos/Nav.php');
        ?>
        <!-- Lineas de trabajo -->
        <section class="projects-section" id="projects">
            <div class="text-center text-dark">
                <br><br><br><br>
                <h2>Lineas de Trabajo</h2>
                <br><br>
            </div>
            <div class="container px-4 px-lg-5">
                <!-- Linea 1 -->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6" ><img class="img-fluid" src="img/lineasTrabajo/estuSue.png" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Ingeniería & Construcción</h4>
                                    <ul class="text-light mb-0">
                                        <li>Consultoría y Planicación de Obras</li>
                                        <li>Ejecución de Obras Civiles</li>
                                        <li>Licencia de Edicaciones</li>
                                        <li>Estudios de Suelos</li>
                                        <li>Topografía</li>
                                        <li>Ensayos</li>
                                        <li>Proyecto de Edicaciones</li>
                                        <li>Instaciones Eléctricas</li>
                                        <li>Instalaciones Sanitarias</li>
                                    </ul>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br>
                <!-- Linea 2 -->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Acabados & Mantenimiento</h4>
                                    <ul class="text-light mb-0">
                                        <li>Sistema Drywall</li>
                                        <li>Acabados de Pintura</li>
                                        <li>Revestimiento de Edificaciones</li>
                                        <li>Acabados de pisos y porcelanato</li>
                                        <li>Carpintería de Madera</li>
                                        <li>Instalaciones de Vidrio y Aluminio</li>
                                        <li>Estructuras Metálicas</li>
                                    </ul>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" ><img class="img-fluid" src="img/lineasTrabajo/drywall.jpg" alt="..." /></div>
                </div><br>
                <!-- Linea 3 -->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6" ><img class="img-fluid" src="img/lineasTrabajo/pisoIndrus.jpg" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Pisos Industriales</h4>
                                    <ul class="text-light mb-0">
                                        <li>Losas de Concreto</li>
                                        <li>Revestimiento para pisos</li>
                                        <li>Vitricación de Pisos</li>
                                        <li>Recubrimiento de Zócalos Sanitarios</li>
                                        <li>Mantenimiento de Pisos</li>
                                        <li>Reparación de Juntas de dilatación y Construcción.</li>
                                    </ul>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br>
                <!-- Linea 4 -->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Eléctricidad & Telecomunicaciones</h4>
                                    <ul class="text-light mb-0">
                                        <li>Instalaciones de sistemas de puesta a tierra</li>
                                        <li>Cableado estructurado (Panduit CAT 6)</li>
                                        <li>Montaje y desmontaje de sistemas eléctricos</li>
                                        <li>Implementación de sistemas de seguridad</li>
                                    </ul>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" ><img class="img-fluid" src="img/lineasTrabajo/telecom.jpg" alt="..." /></div>
                </div>
            </div>
        </section>
        <section class="projects-section" id="projects">
            <div class="text-center"><a href="Obras.php" class="btn btn-info"> ¡Obras Realizadas!</a></div><br>
        </section>
        <!-- Footer-->
        <?php
        include ('Modulos/Footer.php');  
        ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
