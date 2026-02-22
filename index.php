<?php
/**
 * index.php
 * Landing page AFROI
 * Conversión directa desde JSP a PHP
 */
session_start();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>AFROI - Asociación Afrocolombiana de Itagüí</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Boxicons -->
        <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Poppins', sans-serif;
                background-color: #faf7f2;
                color: #333;
                scroll-behavior: smooth;
            }
            .navbar-custom {
                background: rgba(123, 88, 54, 0.9);
                backdrop-filter: blur(6px);
            }
            .navbar-custom .nav-link {
                color: #fff;
                font-weight: 500;
                margin: 0 5px;
                transition: color 0.3s;
            }
            .navbar-custom .nav-link:hover {
                color: #f5d395;
            }
            section {
                scroll-margin-top: 90px;
            }
            h2, h4 {
                color: #7b5836;
            }
            .card-custom {
                background: #fff;
                border-radius: 15px;
                box-shadow: 0 4px 12px rgba(0,0,0,0.08);
                transition: transform .3s;
            }
            .card-custom:hover {
                transform: translateY(-5px);
            }
            .btn-custom {
                background: #7b5836;
                color: #fff;
                border-radius: 10px;
                font-weight: 600;
            }
            .btn-custom:hover {
                background: #5e4024;
            }
            footer {
                background: #7b5836;
                color: #fff;
            }
            footer a {
                color: #f5d395;
            }
        </style>
    </head>

    <body>

        <!-- Título superior -->
        <div class="bg-warning-subtle text-center fw-bold py-2" style="color:#5e4024;">
            Asociación Afrocolombiana de Itagüí
        </div>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-custom sticky-top">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center text-white fw-bold" href="#">
                    <img src="assets/img/AFROI2.png" alt="Logo" style="max-height:50px;" class="me-2">
                    AFROI
                </a>
                <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                    <i class='bx bx-menu'></i>
                </button>
                <div class="collapse navbar-collapse" id="navMenu">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li><a class="nav-link" href="#inicio">Inicio</a></li>
                        <li><a class="nav-link" href="#quienes">¿Quiénes Somos?</a></li>
                        <li><a class="nav-link" href="Historia.php">Historia</a></li>
                        <li><a class="nav-link" href="#valores">Valores</a></li>
                        <li><a class="nav-link" href="#emprendimiento">Emprendimiento</a></li>
                        <li><a class="nav-link" href="#contacto">Contacto</a></li>
                        <li><a class="nav-link" href="login.php">Ingresar/Registrarse</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Banner -->
        <section id="inicio">
            <img src="assets/img/Inicio Sesion Afroi.jpg" class="img-fluid w-100 rounded" alt="Inicio AFROI">
        </section>

        <!-- ¿Quiénes Somos? -->
        <section class="py-5 bg-light" id="quienes">
            <div class="container">
                <div class="row align-items-center g-4">
                    <div class="col-md-6">
                        <h2 class="fw-bold mb-3">¿Quiénes Somos?</h2>

                        <p class="lead">
                            AFROI – Asociación Afrocolombiana de Itagüí es una organización comunitaria que
                            trabaja por el fortalecimiento integral de las personas, con énfasis en la
                            población afrodescendiente y el desarrollo social del territorio.
                        </p>

                        <p>
                            Impulsamos procesos de <strong>formación, deporte, emprendimiento, liderazgo y
                                seguridad comunitaria</strong>, orientados a mejorar la calidad de vida,
                            promover la autonomía económica y fortalecer el tejido social. Creemos en la
                            disciplina, el conocimiento y la organización colectiva como pilares para la
                            construcción de oportunidades reales y sostenibles.
                        </p>

                        <p>
                            AFROI promueve un <strong>estilo de vida activo, consciente y solidario</strong>,
                            articulando iniciativas culturales, educativas y productivas que contribuyen
                            al reconocimiento de la identidad afrocolombiana y a la construcción de una
                            sociedad más justa, incluyente y diversa.
                        </p>
                    </div>

                    <div class="col-md-6">
                        <img src="assets/img/Quienes Somos.jpg"
                             class="img-fluid rounded shadow-lg"
                             alt="Equipo AFROI">
                    </div>
                </div>
            </div>
        </section>


        <!-- Valores -->
        <section class="py-5" style="background-color:#faf1e4;" id="valores">
            <div class="container">
                <h2 class="text-center fw-bold mb-5">Nuestros Valores</h2>

                <div class="row g-4">
                    <!-- Identidad -->
                    <div class="col-md-4">
                        <div class="card-custom p-4 text-center h-100">
                            <img src="assets/img/Valores1.png"
                                 class="img-fluid rounded mb-3"
                                 style="width:160px;"
                                 alt="Identidad afrocolombiana">
                            <h5 class="fw-semibold">Identidad y Orgullo Étnico</h5>
                            <p>
                                Reconocemos, protegemos y promovemos la identidad afrocolombiana como
                                un valor fundamental, fortaleciendo el sentido de pertenencia,
                                la memoria histórica y el respeto por nuestras raíces culturales.
                            </p>
                        </div>
                    </div>

                    <!-- Equidad -->
                    <div class="col-md-4">
                        <div class="card-custom p-4 text-center h-100">
                            <img src="assets/img/Valores2.png"
                                 class="img-fluid rounded mb-3"
                                 style="width:160px;"
                                 alt="Equidad e inclusión">
                            <h5 class="fw-semibold">Equidad, Inclusión y Justicia Social</h5>
                            <p>
                                Trabajamos por la eliminación de barreras sociales, promoviendo la
                                igualdad de oportunidades, el enfoque diferencial y el respeto por
                                la diversidad en todos los espacios de participación.
                            </p>
                        </div>
                    </div>

                    <!-- Solidaridad -->
                    <div class="col-md-4">
                        <div class="card-custom p-4 text-center h-100">
                            <img src="assets/img/Valores3.jpg"
                                 class="img-fluid rounded mb-3"
                                 style="width:160px;"
                                 alt="Solidaridad comunitaria">
                            <h5 class="fw-semibold">Solidaridad y Desarrollo Comunitario</h5>
                            <p>
                                Fomentamos el trabajo colectivo, la cooperación y el liderazgo
                                comunitario como herramientas para el desarrollo social, el
                                fortalecimiento del tejido comunitario y la construcción de futuro.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Emprendimiento -->
        <section class="py-5 bg-light" id="emprendimiento">
            <div class="container text-center">
                <h2 class="fw-bold mb-3">Emprendimiento Comunitario</h2>

                <p class="lead">
                    En AFROI impulsamos el <strong>emprendimiento como una herramienta de
                        autonomía económica, dignificación del trabajo y mejora de los ingresos</strong>
                    de nuestros integrantes y sus familias.
                </p>

                <p class="mb-4">
                    Esta sección visibiliza los <strong>proyectos productivos, negocios locales
                        e iniciativas económicas</strong> lideradas por miembros de la comunidad afrodescendiente,
                    fortaleciendo la economía propia y el desarrollo sostenible del territorio.
                </p>

                <img src="assets/img/Emp_Individual1.jpg"
                     class="img-fluid rounded shadow-lg mt-3"
                     style="max-width:400px;"
                     alt="Emprendimientos AFROI">

                <p class="mt-4 text-muted fst-italic">
                    Próximamente podrás conocer, apoyar y contactar directamente a los
                    emprendimientos de la comunidad AFROI.
                </p>
            </div>
        </section>
        <!-- Contacto -->
        <section class="py-5" id="contacto">
            <div class="container">
                <div class="row align-items-center g-4">
                    <div class="col-md-6 text-center">
                        <img src="assets/img/AFROI2.png" class="img-fluid" style="max-width:220px;">
                    </div>
                    <div class="col-md-6">
                        <h4>Contáctanos</h4>
                        <p><i class='bx bx-map'></i> Itagüí, Antioquia</p>
                        <p><i class='bx bx-envelope'></i> presidencia@afroi.org</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="py-4" style="background: linear-gradient(90deg, #8b5e3c, #3d2b1f); color:#f5f2ed;">
            <div class="container text-center">
                <p class="mb-2">© 2025 AFROI. Todos los derechos reservados.</p>

                <div class="d-flex justify-content-center gap-3 mb-3">
                    <a href="#" class="text-decoration-underline text-light"
                       data-bs-toggle="modal" data-bs-target="#modalDatos">
                        Política de Protección de Datos
                    </a>
                    <a href="#" class="text-decoration-underline text-light"
                       data-bs-toggle="modal" data-bs-target="#modalLegal">
                        Marco Legal y Términos
                    </a>
                </div>

                <!-- Créditos de diseño y desarrollo dentro de la franja -->
                <div class="credits mt-3" style="font-family:'Georgia', serif; font-size:0.95rem;">
                    <p class="mb-1">
                        <strong>Diseño:</strong>
                        <a href="https://www.facebook.com/profile.php?id=100011446642964" target="_blank"
                           style="color:#ffb300; text-decoration:none;">
                            Maria Camila Assia Hernandez
                        </a>
                    </p>
                    <p class="mb-0">
                        <strong>Desarrollo:</strong>
                        <a href="https://wa.me/573027590192" target="_blank"
                           style="color:#ffb300; text-decoration:none;">
                            Ariel Jose Otero
                        </a>
                    </p>
                </div>
            </div>
        </footer>

        <!-- MODAL PROTECCIÓN DE DATOS -->
        <div class="modal fade" id="modalDatos" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold">Política de Protección de Datos Personales</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <p>
                            AFROI cumple la Ley 1581 de 2012 y el Decreto 1377 de 2013,
                            garantizando la protección y confidencialidad de los datos personales.
                        </p>

                        <h6 class="fw-bold">Finalidades</h6>
                        <ul>
                            <li>Gestión de asociados</li>
                            <li>Comunicación institucional</li>
                            <li>Programas culturales y sociales</li>
                        </ul>

                        <h6 class="fw-bold">Derechos del titular</h6>
                        <ul>
                            <li>Conocer y actualizar datos</li>
                            <li>Solicitar eliminación</li>
                            <li>Revocar autorización</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-custom" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODAL MARCO LEGAL -->
        <div class="modal fade" id="modalLegal" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold">Marco Legal y Términos de Uso</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li>Constitución Política de Colombia</li>
                            <li>Ley 70 de 1993</li>
                            <li>Ley 1581 de 2012</li>
                        </ul>

                        <p>
                            Todo el contenido del sitio es propiedad de AFROI.
                            Queda prohibida su reproducción sin autorización.
                        </p>

                        <hr>                       
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-custom" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>