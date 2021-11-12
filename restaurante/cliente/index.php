<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 5 Website Example</title>
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

        .cabecera {
            background-color: rgba(255, 255, 255, 0.3);
            background-blend-mode: lighten;
            font-weight: bold;
            outline: 2px dashed #006EB9;
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
    </style>
</head>

<body>
    <div class="container-fluid">
        <header>
            <div class="row p-5 bg-image text-white text-center cabecera" style="background-image: url('../img/cabecera.jpg'); ">
                <h1>Casanova a la Brasa</h1>
                <p>DE LA RIBERA A TU PLATO</p>
            </div>

        </header>

        <div class="row">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark flex-column flex-sm-row">


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <a class="navbar-brand d-flex justify-content-center align-content-between" href="#">
                        <span class="material-icons md-48">
                            restaurant_menu
                        </span>
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Bienvenida</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pedir.php">Realizar un Pedido</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacto.php">Contacto</a>
                        </li>

                        <!--Derecha-->
                        <li class="nav-item ms-auto">
                            <a class="nav-link d-flex justify-content-center align-content-between" href="#">
                                <span class="material-icons">
                                    account_circle&nbsp;
                                </span>
                                Usuario
                            </a>
                        </li>
                        <li class="nav-item ms-auto ">
                            <a class="nav-link d-flex justify-content-center align-content-between" href="#">
                                <span class="material-icons">
                                    logout&nbsp;
                                </span>
                                Desconectar
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container mt-3">
            <div class="row" id="mensaje">
                <div class="col">
                    <h1>Bienvenido a Casanova a la brasa,
                        <?php
                        print "Manuel";
                        ?>
                    </h1>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row">
                <div class="col-sm-4">
                    <h2>Sobre Nosotros</h2>
                    <h6>Estamos situados en C/La Marrana nº 5, en la Ribera de Molina</h6>
                    <div class="imagen"><img class="img-fluid" src="../img/restaurante.jpg"></div>
                    <p>O melhor restaurante do mondo</p>
                    <span class="material-icons">
                        restaurant_menu
                    </span>
                    <h3 class="mt-4">Enlaces</h3>
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Bienvenida</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pedir.php">Realizar un Pedido</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://c8.alamy.com/compes/2e8narw/yilmaz-karaman-alias-lil-maaaa-poso-en-su-restaurante-chez-diyar-un-restaurante-situado-en-el-distrito-18-de-paris-francia-el-8-de-agosto-de-2007-este-inmigrante-turco-que-vende-kebabs-lanzo-con-emi-su-primer-single-karaman-compuso-una-cancion-sobre-su-trabajo-come-kebab-come-kebab-mi-amigo-para-entretener-a-sus-clientes-habituales-afortunadamente-para-el-entre-sus-clientes-hay-algunos-empleados-de-un-estudio-de-grabacion-cercano-foto-de-jules-motte-abacapress-com-2e8narw.jpg">Kebab Amigo</a>
                        </li>
                    </ul>
                    <hr class="d-sm-none">
                </div>
                <div class="col-sm-8">
                    <h2>CASANOVA A LA BRASA, ESTRELLA MICHELÍN</h2>
                    <h5>tucutucutut, 7 Marzo 2021</h5>
                    <div><img class="img-fluid" src="../img/laostia.jpg"></div>
                    <p>Como vuelva a ver un puto Lorem Ipsum, llamo a la Policía.</p>

                    <h2 class="mt-5">TITLE HEADING</h2>
                    <h5>Title description, Sep 2, 2020</h5>
                    <div class="fakeimg">Fake Image</div>
                    <p>Some text..</p>
                    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                </div>
            </div>
        </div>

        <footer>
            <div class="mt-5 p-4 bg-dark text-white text-center">
                <p>Copirrai Josep Illá</p>
            </div>
        </footer>
</body>

</html>