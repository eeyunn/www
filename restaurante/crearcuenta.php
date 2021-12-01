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
    <?php
    if (isset($_POST['nomUsuario']) && isset($_POST['contrasena']) && isset($_POST['correo'])) {
        $nomUsuario = $_POST['nomUsuario'];
        $contrasena = $_POST['contrasena'];
        $correo = $_POST['correo'];
        $sms = $num1 + $num2;
        //creamos la conexion
        $conn = mysqli_connect('localHost', 'root', '');
        //Imprimos el error si se ha producido
        echo mysqli_error($conn);


        //Seleccionamos la base de datos
        mysqli_select_db($conn, 'pruebas');
        //Imprimos el error si se ha producido. mysqli_error siempre va 
        //a mostrar el error de la última función mysqli ejecutada
        echo mysqli_error($conn);



        //Me creo la consulta que voy a ejecutar. En este caso voy a obtener todas las personas de la base de datos
        $consulta = "INSERT INTO PERSONAS VALUES ('Persona2','Apellidos2', 'Madrid',30,'Obrero','Mujer')";

        //$result = mysqli_query($conn, $consulta);
        //Imprimos el error si se ha producido. mysqli_error siempre va a mostrar el error de la última función mysqli ejecutada
        echo mysqli_error($conn);

        print("<h4>Inserción realizada correctamente</h4>");

        mysqli_close($conn);
    }



    ?>
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
            <form>
                <input type="text" id="login" class="fadeIn second" name="login" placeholder="Nombre de usuario" required>
                <input type="password" id="password" class="fadeIn third" name="login" placeholder="Contraseña" required>
                <input type="text" id="login" class="fadeIn fourth" name="login" placeholder="E-mail" required>
                
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <input type="submit" class="fadeIn fourth" value="CREAR CUENTA">
            </div>

        </div>
    </div>
</body>

</html>