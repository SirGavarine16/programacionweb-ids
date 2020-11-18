<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/main.css">
    <title>Form</title>
</head>

<body>
    <form method="POST" action="app/handler.php" class="form-container">
        <legend>Calculadora</legend>
        <div class="input-container">
            <label>Primer valor</label>
            <input type="number" name='num1' placeholder="Ingrese el primer número">
        </div>
        <div class="input-container">
            <label>Segundo valor</label>
            <input type="number" name='num2' placeholder="Ingrese el segundo número">
        </div>
        <div class="input-container">
            <label>Seleccionar operación</label>
            <select name="operation">
                <option value="0">Suma</option>
                <option value="1">Resta</option>
                <option value="2">Multiplicación</option>
                <option value="3">División</option>
            </select>
        </div>
        <div class="btn-container">
            <button type="submit">Enviar</button>
        </div>
    </form>
</body>

</html>