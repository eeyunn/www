<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $palabra = "Lapalabra";
        echo substr($palabra,3,4);
        echo "<br>$palabra<br>";
        echo strlen($palabra);
        echo '<br>';
        echo substr_count($palabra,'a',0);
        echo '<br>';
        echo time();
        $archivo = fopen("ejemplo.txt" , "w");
        fputs ($archivo, "Hola Mundo");
        fclose ($archivo);

        $file = fopen("test.txt", "r");
        while(!feof($file))
        {
        echo fgets($file). "<br />";
        }
        fclose($file);
    ?>
</body>
</html>