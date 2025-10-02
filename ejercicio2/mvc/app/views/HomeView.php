<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Crear estudiante</h2>
        <form action="" method="post">
            <label for="nombre">Ingrese el nombre del estudiante:</label>
            <input type="text" name="nombre" id="nombre">

            <label for="telefono">Ingrese el teléfono:</label>
            <input type="text" name="telefono" id="telefono">

            <label for="fecha_nacimiento">Ingrese la fecha de nacimiento:</label>
            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento">

            <label for="direccion">Ingrese la dirección:</label>
            <input type="text" name="direccion" id="direccion">

            <button type="submit">Crear</button>
        </form>
    </div>
</body>
</html>