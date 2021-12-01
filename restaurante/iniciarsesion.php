<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <script src="./js/bootstrap.bundle.min.js"></script>
    <title>LOGIN</title>
    <link href="./estilos/login.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

</head>

<body background="./img/fondologin.jpg">
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="./img/logo.png" id="icon" alt="User Icon" />
            </div>



            <!-- Login Form -->
            <form action="" method="POST">
                <input type="text" id="login" class="fadeIn second" name="login" placeholder="Nombre de usuario">
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="Contraseña">
                <input type="submit" class="fadeIn fourth" value="Iniciar Sesión">
            </form>
            <?php
            include('conexion.php');
            if (true) {
                session_start();
                if(isset($sms)&& !empty($sms) ) {
                    echo "La suma de los número introducidos es --> $sms";
                }
            }

            ?>
        </div>
    </div>
</body>

</html>