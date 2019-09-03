<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Todas las Compras</title>
</head>
<body bgcolor=#ff9302>
<font color=#ffffff>
			<h1> Listado de compras </h1>
	<table>
  <tr>
    <th>ID</th>
    <th>Producto</th> 
    <th>Cantidad</th>
  </tr>
  </table>
	<?php foreach ($compras as $compra): ?>
<table>		
  <tr>
    <td><?=$compra['id']?></td>
    <td><?=$compra['producto']?></td> 
    <td><?=$compra['cantidad']?></td>
  </tr>
</table>	
	<?php endforeach ?>
</font>
</body>
</html>