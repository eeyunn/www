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
                <h1>Casanova a la brasa</h1>
                <p>DE LA RIBERA A TU PLATO</p>
            </div>

        </header>

        <div class="row">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark flex-column flex-sm-row">


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <a class="navbar-brand d-flex justify-content-start align-content-start" href="#">
                        <span class="material-icons md-48">
                            restaurant_menu
                        </span>
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Bienvenida</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pedir.php">Realizar un Pedido</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contacto</a>
                        </li>

                        <!--Derecha-->

                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item ms-auto">
                            <a class="nav-link d-flex justify-content-start align-content-start" href="#">
                                <span class="material-icons">
                                    account_circle&nbsp;
                                </span>
                                Usuario
                            </a>
                        </li>



                        <li class="nav-item ms-auto pull-right ">
                            <a class="nav-link d-flex justify-content-start align-content-between" href="#">
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
        <section>
            <div class="container mt-4">
                <form action="/action_page.php">
                    <div class="mb-3 mt-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Introduzca su nombre" name="nombre">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Introduzca su correo electrónico" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="mensaje" class="form-label">Mensaje:</label>
                        <textarea class="form-control" id="mensaje" placeholder="Inbtroduzca el texto aquí" name="mensaje" rows="4">
                </textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </section>
        <div class="mt-5 p-4 bg-dark text-white text-center">
            <p>Copirrai Josep Illá</p>
        </div>

</body>

</html>