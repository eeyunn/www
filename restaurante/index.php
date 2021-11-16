<!DOCTYPE html>
<html lang="en">

<head>
    <title>Restaurante Casanova a la brasa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        body header h1 {
            font-family: 'Abril Fatface';
        }


        .imagen {
            max-height: 100%;
            background: #aaa;
        }

        #intro {
            background-image: url('../img/cabecera.jpg');
            height: 150px;
        }

        .navbar.navbar-expand-sm.bg-dark.navbar-dark {
            background-color: #006EB9;
            color: white;
        }

        .navbar-dark {
            background-color: #006EB9;
            color: white;
        }

        #mensaje {
            text-align: center;
        }

        header {
            position: relative;
            background-color: black;
            height: 100vh;
            min-height: 25rem;
            width: 100%;
            overflow: hidden;
        }

        header video {
            position: absolute;
            top: 35%;
            left: 40%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: 0;
            -ms-transform: translateX(-50%) translateY(-50%);
            -moz-transform: translateX(-50%) translateY(-50%);
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
        }

        header .container {
            position: relative;
            z-index: 2;
        }

        header .overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: black;
            opacity: 0.5;
            z-index: 1;
        }

        /* Media Query for devices withi coarse pointers and no hover functionality */

        /* This will use a fallback image instead of a video for devices that commonly do not support the HTML5 video element */

        @media (pointer: coarse) and (hover: none) {
            header {
                background: url('../img/cabecera.jpg') black no-repeat center center scroll;
            }

            header video {
                display: none;
            }
        }

        #logo {
            height: 7em;
        }

        .login {
            margin-bottom: 5px;
        }

        .dropdown-menu {
            width: 300px !important;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <header>

            <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
            <div class="overlay"></div>

            <!-- The HTML5 video element that will create the background video on the header -->
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="./img/video.mp4" type="video/mp4">
            </video>

            <!-- The header content -->
            <div class="container h-100">
                <div class="d-flex h-100 text-center align-items-center">
                    <div class="w-100 text-white">
                        <h1 class="display-3">Casanova a la brasa</h1>
                        <p class="lead mb-0">De la Ribera a tu plato</p>
                    </div>
                </div>
            </div>
        </header>

        <div class="row">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark flex-column flex-sm-row sticky-top">


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="collapsibleNavbar">

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Bienvenida</a>
                        </li>

                        <!--Derecha-->

                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item ms-md-auto">
                            <a class="nav-link d-flex justify-content-start align-content-start" href='iniciarsesion.php'>
                                <span class="material-icons">
                                    account_circle&nbsp;
                                </span>
                                Iniciar Sesión
                            </a>
                        </li>


                        <li class="nav-item ms-md-auto">
                            <a class="nav-link d-flex justify-content-start align-content-between" href='#'>
                                <span class="material-icons">
                                    login&nbsp;
                                </span>
                                Registrarse
                            </a>
                        </li>
                    </ul>

                </div>
            </nav>
        </div>

        <section>
            <div class="container mt-3">
                <div class="row" id="mensaje">
                    <div class="col">

                        <h2>Bienvenido a Casanova a la brasa,
                            <?php
                            print "Manuel";
                            ?>
                        </h2>
                        <br>
                        <img src="./img/logo.png" id="logo">
                    </div>
                </div>
            </div>
            <br>
            <div class="container mt-3">
                <div class="row">
                    <div class="col-sm-4">
                        <h2>Sobre Nosotros</h2>
                        <h6>Estamos situados en C/La Marrana nº 5, en la Ribera de Molina</h6>
                        <div class="imagen"><img class="img-fluid" src="./img/restaurante.jpg"></div>
                        <p>O melhor restaurante do mondo</p>
                        <span class="material-icons">
                            restaurant_menu
                        </span>

                    </div>

                    <div class="col-sm-8">
                        <h2>Noticias</h2>
                        <h2>CASANOVA A LA BRASA, ESTRELLA MICHELÍN</h2>
                        <h5>tucutucutut, 7 Marzo 2021</h5>
                        <div><img class="img-fluid" src="./img/laostia.jpg"></div>
                        <p>Como vuelva a ver un puto Lorem Ipsum, llamo a la Policía.</p>

                        <h2 class="mt-5">TITLE HEADING</h2>
                        <h5>Title description, Sep 2, 2020</h5>
                        <div class="fakeimg">Fake Image</div>
                        <p>Some text..</p>
                        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="mt-5 p-4 bg-dark text-white text-center">
                <p>Copirrai Josep Illá</p>
            </div>
        </footer>
</body>

</html>