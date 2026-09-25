<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Resultados de datos!</title>
    <link rel="stylesheet" href="style.css">
    <style>

        .modal {
            display: none; 
            position: fixed; 
            z-index: 1000; 
            left: 0; top: 0; 
            width: 100%; height: 100%; 
            background-color: rgba(0,0,0,0.6); 
        }
        .modal-content {
            background-color: #fff;
            margin: 15% auto;
            padding: 25px;
            border-radius: 15px;
            width: 300px;
            text-align: center;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.3);
        }
        .modal-icon {
            width: 60px; height: 60px;
            background-color: #4da6ff;
            color: white;
            font-size: 35px;
            font-weight: bold;
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            margin: 0 auto 15px auto;
        }
        .btn-confirmar {
            background-color: #4da6ff;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 20px;
            cursor: pointer;
            font-weight: bold;
            margin-top: 15px;
        }
        .btn-confirmar:hover { background-color: #1a8cff; }
    </style>
</head>
<body>
    <div class="dive2">
        <h1>Resultados</h1>

        <?php
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $ciudad = $_POST['ciudad'];
        $pasatiempo = $_POST['pasatiempo'];
        ?>

        <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
        <p><strong>Edad:</strong> <?php echo $edad; ?> años</p>
        <p><strong>Ciudad:</strong> <?php echo $ciudad; ?></p>
        <p><strong>Pasatiempo favorito:</strong> <?php echo $pasatiempo; ?></p>

        <img src="chiikawa-hachiware.gif" alt="Imagen de resultados" width="300">

        <h2>¡Bien Hecho!</h2>
        
        <br>
        <button type="button" onclick="abrirModal()">¡Volver a Ingresar!</button>
    </div>

    <!-- Ventana emergente (Modal) -->
    <div id="miModal" class="modal">
        <div class="modal-content">
            <div class="modal-icon">?</div>
            <h3 style="color: #111; margin-bottom: 15px;">¿VOLVER A INGRESAR DATOS?</h3>
            <a href="index.php">
                <button type="button" class="btn-confirmar">¡Si quiero!</button>
            </a>
        </div>
    </div>

    <script src="app.js"></script>
</body>
</html>