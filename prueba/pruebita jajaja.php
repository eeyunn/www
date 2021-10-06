<!DOCTYPE html>
<html>
    <body>
        <?php
        $x = 5985;
        echo "El primero: ";
        echo is_numeric($x);
        echo "<br>";

        $x = "5985";
        echo "El segundo: ";
        echo is_numeric($x);
        echo "<br>";

        $x="59.85" + 100;
        echo "El tercero: ";
        echo is_numeric($x);
        echo "<br>";

        $x="Hello";
        echo "El cuarto: ";
        echo is_numeric($x);
        ?>
    </body>
</html>

