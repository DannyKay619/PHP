<h2>Editar Producto</h2>

<form method="POST" action="indexP.php?accion=actualizar">
        
<input type="hidden" name="código" value="<?= $producto['Código de barras'] ?>">

Existencias: <input type="number" name="existencias" value="<?= $producto['Existencias'] ?>"><br>
Fecha de vencimiento: <input type="date" name="fecha" value="<?= $producto['Fecha de vencimiento'] ?>"><br>
Gramaje: <input type="text" name="gramaje" value="<?= $producto['Gramaje'] ?>"><br>
Laboratorio: <input type="text" name="laboratorio" value="<?= $producto['Laboratorio'] ?>"><br>
Lote: <input type="number" name="lote" value="<?= $producto['Lote'] ?>"><br>
Marca: <input type="text" name="marca" value="<?= $producto['Marca'] ?>"><br>
Nombre: <input type="text" name="nombre" value="<?= $producto['Nombre'] ?>"><br>
Nombre genérico: <input type="text" name="generico" value="<?= $producto['generico'] ?>"><br>
Precio: <input type="number" step="0.01" name="precio" value="<?= $producto['Precio'] ?>"><br>
Proveedor: <input type="text" name="proveedor" value="<?= $producto['Proveedor'] ?>"><br>
Temperatura: <input type="number" name="temperatura" value="<?= $producto['Temperatura'] ?>"><br><br>

<button type="submit">Actualizar</button>

</form>