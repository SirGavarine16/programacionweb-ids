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
    <title>Registrar</title>
</head>

<body>
    <h1>Registrarse</h1>
    <div>
        <a href="./../login">Loguearse</a>
    </div>
    <form action="./../app/AuthController.php" method="POST">
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
    </form>
</body>

</html>