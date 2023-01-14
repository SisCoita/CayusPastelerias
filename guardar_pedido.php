<?php
	// guardar_pedido.php
	if (isset($_POST['fecha']) && isset($_POST['nombre']) && isset($_POST['tamaño']) && isset($_POST['pastel']) && isset($_POST['color']) && isset($_POST['leyenda']) && isset($_POST['tematica']) && isset($_POST['hora']) && isset($_POST['telefono']) && isset($_POST['otros'])) {
		$fecha = $_POST['fecha'];
		$nombre = $_POST['nombre'];
		$tamaño = $_POST['tamaño'];
		$pastel = $_POST['pastel'];
		$color = $_POST['color'];
		$leyenda = $_POST['leyenda'];
		$tematica = $_POST['tematica'];
		$hora = $_POST['hora'];
		$telefono = $_POST['telefono'];
		$otros = $_POST['otros'];
		
		// Aquí podrías conectarte a una base de datos y guardar la información del pedido
		// Por ejemplo utilizando MySQLi o PDO
		// ...
		
		echo "Pedido guardado correctamente.";
	} else {
		echo "Error: faltan datos para guardar el pedido....";
	}
?>
