<?php
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['open_session'])) {
    header('Location: ./../login/');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ventana de Home</h1>
    <form action="./../app/AuthController.php" method="POST">
        <button type="submit">Cerrar sesión</button>
        <input type="hidden" name='action' value="close">
    </form>
</body>

</html>