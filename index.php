<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--fontawesome icons-->
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- jquery  -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

    <title>Portfolio</title>
    <!--  CSS personalizado -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- js personalizado -->
    <script src="assets/js/escribe_texto.js"></script>

</head>

<body>

    <header id="header" class="d-flex flex-column justify-content-center">
        <nav id="navbar" class="navbar nav-menu">
            <ul>
                <li><a href="#inicio" class="nav-link "><span>Inicio</span></a></li>
                <li><a href="#trabajos" class="nav-link "><span>Trabajos</span></a></li>
                <li><a href="#sobremi" class="nav-link "><span>Sobre mi</span></a></li>
                <li><a href="#contacto" class="nav-link "><span>Contacto</span></a></li>
            </ul>
        </nav>

    </header>
    <div class="main">
        <!-- INICIO -->
        <section id="inicio" class="d-flex flex-column justify-content-center ">
            <div class="container p-4">
                <h1 class='nombre mb-4'>Gustavo Juarez</h1>
                <p id='actividad' class='actividad text-grey'><span>-</span></p>

                <div class="red_social_instagram">
                    <a href="#" class="instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
                <div class="red_social_ln">
                    <a href="#" class="linkedin">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- TRABAJOS -->
        <section id="trabajos" class="trabajos  bg-light">

            <div class="container p-2">
                <h2>Algunos de mis trabajos</h2>
                <div class="row p-4">
                    <div class="col-sm-4">
                        <article class="card">
                            <div class="temporary_text">
                                <img src="assets/img/HEC.JPG" class="img-fluid img-thumbnail" alt="HEC" srcset="">
                            </div>
                            <div class="card_content">
                                <span class="card_title">Happy English Center</span>
                                <span class="card_subtitle">Sistema de Gestión de Instituto de Inglés.</span>
                                <p class="card_description">Sistema web desarrollado en php y mysql (back-end) y con
                                    bootstrap y Javascript para el (Front-end).</p>
                                    <p><small>Implementado año 2021 y continua...</small></p>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-4">
                        <article class="card">
                            <div class="temporary_text">
                            <img src="assets/img/maderas_mercedes.JPG" class="img-fluid img-thumbnail" alt="maderas" srcset="">
                            </div>
                            <div class="card_content">
                                <span class="card_title">Maderas Mercedes</span>
                                <span class="card_subtitle">Sistema de Presupuestos de un Aserradero.</span>
                                <p class="card_description">Sistema web desarrollado en php y mysql (back-end) y con
                                    bootstrap y Javascript para el (Front-end).</p>
                                    <p><small>Implementado año 2021 y continua...</small></p>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-4">
                        <article class="card">
                            <div class="temporary_text">
                            <img src="assets/img/mitho.JPG" class="img-fluid img-thumbnail" alt="ropa" srcset="">
                            </div>
                            <div class="card_content">
                                <span class="card_title">Mitho</span>
                                <span class="card_subtitle">Sistema de Gestión de Comercio. Genera etiquetas(precios, descripcion,codigo de barras)</span>
                                <p class="card_description">Sistema web desarrollado en php y mysql (back-end) y con
                                    bootstrap y Javascript para el (Front-end).</p>
                                    <p><small>Implementado año 2022</small></p>
                            </div>
                        </article>
                    </div>                   
                </div>

                <div class="row p-4">
                 <div class="col-sm-4">
                        <article class="card">
                            <div class="temporary_text">
                            <img src="assets/img/prestamos.JPG" class="img-fluid img-thumbnail" alt="net" srcset="">
                            </div>
                            <div class="card_content">
                                <span class="card_title">Gestion de Netbooks Escolares -EES n° 1 </span>
                                <span class="card_subtitle">Control de dispositivos de la escuela y reserva de turnos de sala de medios</span>
                                <p class="card_description">App para el celular y pc. Sistema web desarrollado en php y mysql (back-end) y con
                                    bootstrap y Javascript para el (Front-end).</p>
                                    <p><small>Implementado año 2022 y continua...</small></p>
                            </div>
                        </article>
                    </div>

                    <div class="col-sm-4">
                        <article class="card">
                            <div class="temporary_text">
                            <img src="assets/img/compartir.JPG" class="img-fluid img-thumbnail" alt="archivos" srcset="">
                            </div>
                            <div class="card_content">
                                <span class="card_title">App para Compartir Archivos -EES n° 1</span>
                                <span class="card_subtitle">Uso de Profesores y alumnos para las clases</span>
                                <p class="card_description">App para el celular y pc. Sistema web desarrollado en php y mysql (back-end) y con
                                    bootstrap y Javascript para el (Front-end).</p>
                                    <p><small>Implementado año 2022 y continua...</small></p>
                            </div>
                        </article>
                    </div>

                    <div class="col-sm-4">
                        <article class="card">
                            <div class="temporary_text">
                            <img src="assets/img/Cerelmer.JPG" class="img-fluid img-thumbnail" alt="cerelmer" srcset="">
                            </div>
                            <div class="card_content">
                                <span class="card_title">CERELMER</span>
                                <span class="card_subtitle">Sistema de Gestión del Centro de Rehabilitacion del Lisiado de Mercedes</span>
                                <p class="card_description">Sistema desarrollado en Visual Basic .Net y Mysql. Comprende un modulo de Administración y
                                     una aplicacion remota (por intranet) para el uso de los medicos en sus consultorios dentro de la institucion.</p>
                                     <p><small>Implementado año 2012 y continua...</small></p>
                            </div>
                        </article>
                    </div>
              
                </div>

                 <div class="row p-4">
                 <div class="col-sm-4">
                        <article class="card">
                            <div class="temporary_text">
                            <img src="assets/img/coyote.PNG" class="img-fluid img-thumbnail" alt="net" srcset="">
                            </div>
                            <div class="card_content">
                                <span class="card_title">Coyote </span>
                                <span class="card_subtitle">Gestion de comercio (inventario-stock-precios-etc)</span>
                                <p class="card_description">Sistema desarrollado en Visual Basic .Net y Mysql.(formando parte del equipo GIFSys)</p>
                                    <p><small>Implementado año 2020 y continua...</small></p>
                            </div>
                        </article>
                    </div>

                    <div class="col-sm-4">
                        <article class="card">
                            <div class="temporary_text">
                            <img src="assets/img/libreria.PNG" class="img-fluid img-thumbnail" alt="archivos" srcset="">
                            </div>
                            <div class="card_content">
                                <span class="card_title">Libreria Bigogno</span>
                                <span class="card_subtitle">Gestion de comercio (inventario-stock-precios-etc)</span>
                                <p class="card_description">Sistema desarrollado en Visual Basic .Net y Mysql.(formando parte del equipo GIFSys)</p>
                                    <p><small>Implementado año 2018 y continua...</small></p>
                            </div>
                        </article>
                    </div>

                    <div class="col-sm-4">
                        <article class="card">
                            <div class="temporary_text">
                            <img src="assets/img/gestoria_belgrano.PNG" class="img-fluid img-thumbnail" alt="cerelmer" srcset="">
                            </div>
                            <div class="card_content">
                                <span class="card_title">Gestoria Belgrano</span>
                                <span class="card_subtitle">Sistema de Gestión trámites</span>
                                <p class="card_description">Sistema desarrollado en Visual Basic .Net y Mysql. Comprende un modulo server y
                                     una aplicaciones clientes remotas (por intranet).</p>
                                     <p><small>Implementado año 2012 y continua...</small></p>
                            </div>
                        </article>
                    </div>
              
                </div>
            </div>
    </div>
    </section>

    <!--SOBRE MI-->
    <section id="sobremi" class="sobremi ">
        <div class="container">
            <div class="row">
                <h2>Sobre mi</h2>
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <div class="parrafo p-5">
                        <p class="text-white">Soy analista de sistemas, desarrollo
                            sistemas web a medida para Comercios, Pymes y Profesionales.</p>
                        <p class="text-white">Tengo pasion por la programación y la
                            creación de métodos que rindan soluciones prácticas.
                            Mencantan los desafios y el aprendizaje continuo.</p>
                        <p class="text-white">En mis primeros años desarrolle aplicaciones
                            y sistemas en Visual Basic .Net,
                            luego comence a realizar Apps moviles con Android Studio y continue con la programacion
                            Web con PHP y Mysql para el Back-End
                            y Bootstrap, Javascript (JQuery) y Css para el Front-End</p>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO -->

    <section id="contacto" class="contacto bg-light">
        <div class="container text-center">
            <div class="section-title">
                <h2 class='p-4 text-light'>Contacto</h2>
            </div>
            <div class="row mt-1">

                <div class="col-lg-4">
                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>dev@gdjuarez.site</p>
                    </div>
                </div>

                <div class="col-lg-6 ">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="form-row">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="nombre"
                                        required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="correo" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto"
                                    required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Mensaje"
                                    required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary text-center mt-2">Enviar mensaje</button>
                    </form>
                </div>

                <div class="col-2">

                </div>

            </div>
        </div>
    </section>
    </div>

    <footer id="footer">
        <div class="copyright bg-dark text-white text-center rounded">
            &copy; Copyright <strong><span>gdjuarez</span></strong>
        </div>
    </footer>

    <!-- Option 1: Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>


</body>

</html>