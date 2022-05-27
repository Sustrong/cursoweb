<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body>
    <h1>Prueba formulario</h1>
    <form action="" method="get">
        <input type="text" placeholder="Escribe tu nombre" name="nombre" id="">
        <br>
        <input type="radio" name="sexo" value="mujer" id="mujer">
        <label for="mujer">Mujer</label>
        <label for="hombre">Hombre</label>
        <input type="radio" name="sexo" value="hombre" id="hombre">
        <br>
        <select name="fecha" id="">
            <option value="2025">2025</option> <!-- value lo recibimos con PHP -->
            <option value="2026">2026</option>
            <option value="2027">2027</option>
        </select>
        <br>
        <input type="checkbox" name="terminos" id="terminos" value='ok'>
        <label for="terminos">Aceptar términos</label>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>