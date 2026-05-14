<h2>Nuevo Producto</h2>

<form method="POST" action="indexP.php?accion=guardar">

Código de barras: <input type="text" name="código" required><br>
Existencias: <input type="number" name="existencias"><br>
Fecha de vencimiento: <input type="date" name="fecha"><br>
Gramaje: <input type="text" name="gramaje"><br>
Laboratorio: <input type="text" name="laboratorio"><br>
Lote: <input type="number" name="lote"><br>
Marca: <input type="text" name="marca"><br>
Nombre: <input type="text" name="nombre"><br>
Nombre genérico: <input type="text" name="generico"><br>
Precio: <input type="number" step="0.01" name="precio"><br>
Proveedor: <input type="text" name="proveedor"><br>
Temperatura: <input type="number" name="temperatura"><br><br>

<button type="submit">Guardar</button>

</form>