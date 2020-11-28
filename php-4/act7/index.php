<?php
include "./app/config.php";

if (isset($_SESSION['open_session'])) {
    header('Location: ./home');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Public</title>
</head>

<body>
    <h1>Logearse</h1>
    <form action="auth" method="POST">
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
        <input type="hidden" name='api_token' value="<?= $_SESSION['api_token'] ?>">
    </form>
    <h1>Registrarse</h1>
    <form action="auth" method="POST">
        <fieldset>
            <legend>Datos de registro</legend>
            <div>
                <label>Nombre</label>
                <input type="text" name='name' placeholder="Tu nombre" required>
            </div>
            <br>
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
        <button type="submit">Registrar usuario</button>
        <input type="hidden" name='action' value="createAccount">
        <input type="hidden" name='api_token' value="<?= $_SESSION['api_token'] ?>">
    </form>
</body>

</html>