<h2>Inventario</h2>
<a href="indexP.php?accion=crear">Nuevo Producto</a>
<br><br>

<table border="1">
<tr>
<th>Código</th>
<th>Fecha de vencimiento</th>
<th>Marca</th>
<th>Proveedor</th>
<th>Gramaje</th>
<th>Precio</th>
<th>Lote</th>
<th>Temperatura</th>
<th>Nombre</th>
<th>Nombre generico</th>
<th>Precio</th>
<th>Existencias</th>
<th>Laboratorio</th>
<th>Acciones</th>

</tr>

<?php while($fila = mysqli_fetch_assoc($productos)): ?>
<tr>
<td><?= $fila['Código de barras'] ?></td>
<td><?= $fila['Fecha de vencimiento'] ?></td>
<td><?= $fila['Marca'] ?></td>
<td><?= $fila['Proveedor'] ?></td>
<td><?= $fila['Gramaje'] ?></td>
<td><?= $fila['Precio'] ?></td>
<td><?= $fila['Lote'] ?></td>
<td><?= $fila['Temperatura'] ?></td>
<td><?= $fila['Nombre'] ?></td>
<td><?= $fila['generico'] ?></td>
<td><?= $fila['Precio'] ?></td>
<td><?= $fila['Existencias'] ?></td>
<td><?= $fila['Laboratorio'] ?></td>
<td>
<a href="indexP.php?accion=editar&código=<?= $fila['Código de barras'] ?>">Editar</a>
<a href="indexP.php?accion=eliminar&código=<?= $fila['Código de barras'] ?>">Eliminar</a>
</td>
</tr>
<?php endwhile; ?>
</table>