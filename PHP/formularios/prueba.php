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
            <input type="radio" name="sexo" value="mujer" id="radio1">
            <label for="radio1">Mujer</label>
            <input type="radio" name="sexo" value="hombre" id="radio2">
            <label for="radio2">Hombre</label>
            <!--<input type="radio" name="sexo" value="1" id="radio3">
            <label for="radio3">1</label>
            <input type="radio" name="sexo" value="2" id="radio4">
            <label for="radio4">2</label>
            <input type="radio" name="sexo" value="3" id="radio5">
            <label for="radio5">3</label>
            <input type="radio" name="sexo" value="4" id="radio6">
            <label for="radio6">4</label>  -->
            <br>
            <select name="fecha" id="">
                <option value="2025">2025</option> <!-- value lo recibimos con PHP--> 
                <option value="2026">2026</option>
                <option value="2027">2027</option>
            </select>
            <br>
            <input type="checkbox" name="terminos" id="checkterms" value='ok'>
            <label for="checkterms">Aceptar términos</label>
            <!--<br>
            <input type="checkbox" name="terminos2" id="checkterms2" value='ok2'>
            <label for="checkterms2">Aceptar condicinones</label>-->
            <br>
            <input type="submit" value="Enviar"> 
        </form>
    </body>
</html>