<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario de Registro</h1>
    <form method="POST" action="/procesar">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>
        
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" required><br>
        
        <label for="edad">Edad:</label>
        <input type="number" name="edad" required><br>
        
        <label for="correo">Correo:</label>
        <input type="email" name="correo" required><br>
        
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
