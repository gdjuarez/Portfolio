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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!-- jquery  -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

    <title>Portfolio</title>
    <!--  CSS personalizado -->
    <link href="assets/css/style.css" rel="stylesheet">

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

    <!-- INICIO -->
    <section id="inicio" class="d-flex flex-column justify-content-center ">
        <div class="container">
            <h1 class=' p-6'>Gustavo Juarez</h1>
            <p class=' p-3'><span>Desarrollo de Sistemas Web a medida.</span></p>
            <div class="social-links p-4">
                <a href="#" class="instagram"><ion-icon name="logo-instagram"></ion-icon></a>
                <a href="#" class="linkedin"><ion-icon name="logo-linkedin"></ion-icon></a>
            </div>
        </div>
    </section>

    <!-- TRABAJOS -->
    <section id="trabajos" class="trabajos">
        <div class="container">
            <div class="section-title">
                <h2 class='text-white'>Trabajos</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem.
                    Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                    ea.
                    Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
        </div>
    </section>

    <!--SOBRE MI-->
    <section id="sobremi" class="sobremi  bg-light">
        <div class="container">
            <div class="row p-4">
                <div class="col-lg-4">
                    <img src="assets/img/gdj.png" class="img-fluid p-4" alt="">
                </div>
                <div class="col-lg-8 pt-4">
                    <div class="section-title">
                        <h2>Sobre mi</h2>
                    </div>
                    <div class="sobremi_content border rounded p-4 ">
                        <p>Soy analista de sistemas, desarrollo sistemas web a medida para Comercios, Pymes y
                            Profesionales.
                            Tengo pasion por la programación y la creación de métodos que rindan soluciones prácticas.
                            Me encantan los desafios y el aprendizaje continuo.</p>
                          <p>En mis primeros años desarrolle aplicaciones y sistemas en Visual Basic .Net, luego comence a realizar
                             Apps moviles con Android Studio y continue con la programacion Web con PHP y Mysql para el Back-End
                              y Bootstrap, Javascript (JQuery) y lo escencial en CSS para el Front-End</p>
                    </div>
                </div>

            </div>
          </div>
    </section>

    <!-- CONTACTO -->

    <section id="contacto" class="contacto bg-light">
        <div class="container text-center">
            <div class="section-title">
                <h2 class='p-4'>Contacto</h2>
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




    <footer id="footer">
        <div class="container text-center">
            <div class="copyright bg-dark text-white rounded">
                &copy; Copyright <strong><span>gdjuarez</span></strong>
            </div>

        </div>
    </footer>

    <!-- Option 1: Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</body>

</html>