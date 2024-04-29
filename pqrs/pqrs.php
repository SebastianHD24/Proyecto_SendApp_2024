<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- WORK SANS FONT INSTITUCIONAL IMPORTACIÓN DESDE GOOGLE FONTS-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>SendApp_PQRS</title>
</head>
<body>

    <!-- REGISTRO DE USUARIOS -->

    <div id="formulariopqrs">

        <!-- CAMBIAR EL METODO POST EN PHP SI ES NECESARIO Y CAMBIAR LA ACCIÓN DEL FORM DEPENDIENDO DE LA NECESIDAD -->

        <form action="agregarpqrs.php"  method="post"> 

            <!--Extraemos la informacion del usuario que tiene la sesion iniciada-->

            <h3>Realizacion de PQRS</h3>

            <h3>Tipo de Solicitud</h3>

            <label >Seleccionar</label>

            <select id="seleccion" name="tipo_solicitud">
                <option value="peticion">Peticion</option>
                <option value="queja">Queja</option>
                <option value="reclamo">Reclamo</option>
                <option value="sugerencia">Sugerencia</option>
                <option value="felicitaciones">Felicitaciones</option>
            </select>

            <label>Descripcion</label>

            <input type="text" name="descripcion_pqrs">

            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>