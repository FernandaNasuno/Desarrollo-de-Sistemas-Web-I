<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captura de Datos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dive">
        <h1>Captura de datos personales</h1>
        <br>
        <h2>Ingresa los datos que se te piden</h2>
        <br>
        <p>Mi primera encuesta</p>
        <hr>

        <form action="resultados.php" method="POST">
            <label>Nombre</label>
            <input type="text" name="nombre">
            <br><br>

            <label>Edad</label>
            <input type="number" name="edad">
            <br><br>

            <label>Ciudad donde vives</label>
            <input type="text" name="ciudad">
            <br><br>

            <label>Pasatiempo favorito</label>
            <input type="text" name="pasatiempo">
            <br><br>

            <button type="submit">Ingresar datos</button>
        </form>
    </div>
</body>
</html>