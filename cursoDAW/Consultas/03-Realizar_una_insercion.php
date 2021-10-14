<html>

<head>
    <title>Realizamos una Insercion. </title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

    <?php
    if (isset($_POST['num1']) && isset($_POST['num2'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
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

<body>

    <form method="post" action="pagina.php">
        <input name="Nombre" type="text" maxlength="70" size="45" placeholder="Nombre..." required><br><br>
        <input name="Apellido" type="text" maxlength="70" size="45" placeholder="Apellido..." required><br><br>
        <input name="Ciudad" type="text" maxlength="70" size="45" placeholder="Ciudad..." required><br><br>
        <input name="Edad" type="text" maxlength="70" size="45" placeholder="Edad..." required><br><br>
        <input name="Profesion" type="text" maxlength="70" size="45" placeholder="Profesión..." required><br><br>
        <input name="Sexo" type="text" maxlength="70" size="45" placeholder="Sexo..." required><br><br>
        <input type="submit" value="Enviar" align="center">
    </form>
</body>

</html>