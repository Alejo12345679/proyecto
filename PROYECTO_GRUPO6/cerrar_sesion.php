<?php
// Mostramos la sesión
session_start();
//Destruimos la sesión
session_destroy();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
</head>

<body>
    <main class="main">
        <div class="form form-close">
            <h2 class="form__title">HA CERRADO SESIÓN CORRECTAMENTE</h2>
            <i class="fas fa-sign-in-alt"></i>
            <a href="index.php" class="button button-close">Ir al Login</a>
        </div>
    </main>
</body>

</html>