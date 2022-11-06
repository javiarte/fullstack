<?php
    $name = isset($name) ? $name : null;
    $email = isset($email) ? $email : null;
    $website = isset($website) ? $website : null;
    $comment = isset($comment) ? $comment : null;
    $gender = isset($gender) ? $gender : null;
    $nameErr = isset($nameErr) ? $nameErr : null;
    $emailErr = isset($emailErr) ? $emailErr : null;
    $genderErr = isset($genderErr) ? $genderErr : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Empleado</title>
</head>
<body>
<form method="post" action="validar_form.php">
    <fieldset style="width:470px">
    <legend><h1>Formulario de validación PHP</h1></legend>

    <p style="color:red;">* campo requerido</p>
    <label>Nombre:</label>
    <input type="text" name="name"><span style="color:#ff0000">*<?php echo $nameErr;?></span>
    <br /><br />
    <label>E-mail:<input type="text" name="email"><span style="color:#ff0000">*<?php echo $nameErr;?></span></label>
    <br /> <br />
    <label>Website:<input type="text" name="website"></label><br /> <br />
    <label>Comentario:<textarea name="com" rows="5" cols="40"></textarea></label><br /> <br />
    <label>Género:</label>
    <input type="radio" name="gen" value="femenino">Femenino
    <input type="radio" name="gen" value="masculino">Masculino
    <span style="color:#ff0000">*<?php echo $nameErr;?></span>
    </label><br><br>
    <input type="submit" name="enviar" value="Enviar">  
    <label><h1>Datos procesados:</h1></label>
    <label><?php echo $name; echo " "; echo $email; echo " "; echo $website; echo " "; echo $comment; echo " "; echo $gender;?></label>
</fieldset>

</form>
</body>
</html>