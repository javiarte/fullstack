<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Empleado</title>
</head>
<body>
    <h1>Nuevo Empleado</h1>
    <table border="1" cellpadding="3" cellspacing="1" width="400">
        <tbody><tr>
            <th>Cedula:
            </th><th><input type="text" value=""></th>
        </tr>
        <tr>
            <th>Nombre:</th>
            <th><input type="text" value=""></th>
        </tr>
        <tr>
            <th>Apellidos:</th>
            <th><input type="text" value=""></th>
        </tr>
        <tr>
            <th>Sexo:</th>
            <th>
                <input type="radio" id="html" name="fav_language" value="Masculino">
                <label for="html">Masculino</label>
                <input type="radio" id="html" name="fav_language" value="Femenino">
                <label for="html">Femenino</label>
            </th>
        </tr>
        <tr>
            <th>Dirección:</th>
            <th><input type="text" value=""></th>
        </tr>
        <tr>
            <th>Estado Civil:</th>
            <th>
                <select name="cars" id="cars">
                    <option value="viudo">Viudo</option>
                    <option value="soltero">Soltero</option>
                    <option value="Casado">Casado</option>
                    <option value="union-libre">Unión Libre</option>
                    <option value="otro">Otro</option>
                </select>
            </th>
        </tr>
        <tr>
            <th>Fecha<br> Nacimiento:</th>
            <th><input type="date" value="dd/mm/aaaa"></th>
        </tr>
        <tr>
            <th>Teléfono:</th>
            <th><input type="tel" value=""></th>
        </tr>
        <tr>
            <th>Celular:</th>
            <th><input type="tel" value=""></th>
        </tr>
        <tr>
            <th>Email:</th>
            <th><input type="text" value=""></th>
        </tr>
        <tr>
            <th>Seguridad<br> Social:</th>
            <th><input type="text" value=""></th>
        </tr>
        <tr>
            <th>Número de <br>Hijos:</th>
            <th><input type="number" value=""></th>
        </tr>
        <tr>
            <th>Ciudad:</th>
            <th>
                <select name="cars" id="cars">
                    <option value="viudo">Medellín</option>
                    <option value="soltero">Bogotá</option>
                    <option value="Casado">Pasto</option>
                    <option value="union-libre">Montería</option>
                    <option value="otro">Otro</option>
                </select>
            </th>
        </tr>
        <tr>
            <th>Departamento:</th>
            <th>
                <select name="cars" id="cars">
                    <option value="viudo">Antioquia</option>
                    <option value="soltero">Cundinamarca</option>
                    <option value="Casado">Nariño</option>
                    <option value="union-libre">Córdoba</option>
                    <option value="otro">Otro</option>
                </select>
            </th>
        </tr>
    </tbody></table>
</body>
</html>