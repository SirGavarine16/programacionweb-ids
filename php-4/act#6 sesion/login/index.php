<?php
if(!isset($_SESSION)){
    session_start();
}
if(isset($_SESSION['open_session'])){
    header('Location: ./../home/');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Logearse</h1>
    <div>
        <a href="./../register">Registrarse</a>
    </div>
    <form action="./../app/AuthController.php" method="POST">
        <fieldset>
            <legend>Datos de Logueo</legend>
            <div>
                <label>E-mail</label>
                <input type="email" name='email' placeholder="Tu correo" required>
            </div>
            <br>
            <div>
                <label>Contraseña</label>
                <input type="password" name='password' placeholder="Tu contraseña" required>
            </div>
        </fieldset>
        <button type="submit">Iniciar sesión</button>
        <input type="hidden" name='action' value="access">
    </form>
</body>

</html>