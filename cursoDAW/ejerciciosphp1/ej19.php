<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    if(isset($_POST['num1']) && isset($_POST['num2']) && !empty($_POST['num1']) && !empty($_POST['num2'])) {
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $sms=$num1+$num2;
    }
    ?>
</head>
<body>
    <div id="BloqueFormulario">
        <label for="num"> Introduce la altura:</label>
        <input name="num" id="num" value="" size="40" maxlength="100" type="text" class="CampoFormulario" required>
    </div>
    <?php
        if(isset($sms)&& !empty($sms) ) {
            echo "La suma de los número introducidos es --> $sms";
        }
    ?>
</body>
</html>