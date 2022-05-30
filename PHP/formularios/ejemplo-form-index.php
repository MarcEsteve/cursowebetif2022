<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo form index con Método GET</title>
</head>
<body>
    <form action="recibe-get.php" method="get"> <!-- con action le decimos donde guarda los datos y con el method le decimos de que forma GET/POST -->
        <input type="text" placeholder="Nombre" name="nombre" id=""> <!-- el value lo define el usuario -->
        <br>
        <label for="mujer">Mujer</label> <!-- El for del label se relaciona bon id del input -->
        <input type="radio" name="sexo" value="mujer" id="mujer">  <!-- name iguales -->
        <br>
        <label for="hombre">Hombre</label>
        <input type="radio" name="sexo" value="hombre" id="hombre"> <!-- name iguales, como accedemos a ellos mediante PHP-->
        <br>
        <select name="fecha" id="">
            <option value="2000">2000</option> <!-- value lo recibimos con PHP -->
            <option value="2001">2001</option>
            <option value="2002">2002</option>
        </select>
        <br>
        <input type="checkbox" name="terminos" id="terminos" value="ok">
        <label for="terminos">Aceptar Términos</label>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>