<?php
    if (isset($_POST['boton'])) {
        $string = $_POST['pal'];
        $length = strlen($string);

        for ($i = $length - 1; $i >= 0; $i--) {
            echo $string[$i];
        } 
    }
?>