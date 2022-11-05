<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area mayor, cuadrado triangulo</title>
</head>
<body>
    <?php
        $areacuadrado = 0;
        $lado = 8;
        $arearectangulo = 0;
        $recta = 12;
        $rectb = 20;
        echo "El lado ingresado del cuadrado es: ".$lado;
        echo "<br>";
        $areacuadrado = ($lado*$lado);
        echo "Suarea es: ".$areacuadrado;
        echo "<br>";
        echo "<br>";
        echo "La base y altura del rectangulo son: "; echo "Base: ".$recta; echo " Altura: ".$rectb;
        echo "<br>";
        $arearectangulo = ($recta*$rectb);
        echo "Su area es: ".$arearectangulo;
        echo "<br>";
        echo "<br>";

        if ($areacuadrado > $arearectangulo) {
            echo "El area del cuadrado es mayor que la del rectanulo";
        } else {
            echo "El area del rectangulo es mayor que la del cuadrado";
        }
    ?>
</body>
</html>