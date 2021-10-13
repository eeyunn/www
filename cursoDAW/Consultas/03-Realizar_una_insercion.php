<html>

<head>
    <title>Realizamos una Insercion. </title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
</head>

<body>
    <?php
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

    $result = mysqli_query($conn, $consulta);
    //Imprimos el error si se ha producido. mysqli_error siempre va a mostrar el error de la última función mysqli ejecutada
    echo mysqli_error($conn);

    print("<h4>Inserción realizada correctamente</h4>");

    mysqli_close($conn);


    ?>

</body>

</html>