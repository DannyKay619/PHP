<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Registrar Producto</title>

<style>
/* Fondo gris */
body {
    background: #f0f0f0;
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

/* Tarjeta del formulario */
.form-container {
    background: white;
    padding: 20px 25px;
    border-radius: 10px;
    width: 280px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
}

/* Título */
.form-container h2 {
    text-align: center;
    margin-bottom: 15px;
}

/* Filas (rows) */
.form-row {
    display: flex;
    flex-direction: column;
    margin-bottom: 10px;
}

/* Labels */
.form-row label {
    font-size: 13px;
    margin-bottom: 3px;
}

/* Inputs */
.form-row input {
    padding: 6px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 13px;
}

/* Botón */
button {
    width: 100%;
    padding: 8px;
    background: #2f80ed;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 14px;
    cursor: pointer;
}

button:hover {
    background: #1c5fcf;
}
</style>
</head>

<body>

<div class="form-container">
    <h2>Registrar Producto</h2>

    <form action="" method="post">

        <div class="form-row">
            <label for="id">ID</label>
            <input type="text" id="id" name="id">
        </div>

        <div class="form-row">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre">
        </div>

        <div class="form-row">
            <label for="cantidad">Cantidad</label>
            <input type="number" id="cantidad" name="cantidad">
        </div>

        <div class="form-row">
            <label for="precio">Precio</label>
            <input type="number" id="precio" name="precio">
        </div>

        <button type="submit">Guardar</button>

    </form>
</div>

</body>
</html>
