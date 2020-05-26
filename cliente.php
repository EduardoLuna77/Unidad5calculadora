   <H1>Calculadora</H1>
<form action="cliente.php" method="GET">
	Numero 1: <input type="text" name="a"><br>
	Numero 2: <input type="text" name="b"><br>
	Operacion: 	<select name="action">
			<option value="suma">Sumar</option>
			<option value="resta">Restar</option>
			<option value="multiplicacion">Multiplicar</option>
			<option value="division">Dividir</option>
	</select>
		<input type="submit" value="Calcular" />
</form>

 <?php
if (isset($_GET["action"])) {

	require_once('lib/nusoap.php');
	
	$cliente = new nusoap_client('http://localhost/calculadora/servicio.php');
	$calculadora=array('x' => $_GET["a"],'y' => $_GET["b"], 'operacion' => $_GET["action"]);
	$resultado = $cliente->call('calculadora',$calculadora);

	?>
	<h1><?php echo strtoupper($_GET["action"]) ?></h1>
	<table>
			<tr>
				<td>Primer numero:</td>
				<td><?php echo $calculadora["x"] ?></td>
			</tr>
			<tr>
				<td>Segundo numero:</td>
				<td><?php echo $calculadora["y"] ?></td>
			</tr>
			<tr>
				<td>Total:</td>
				<td><h1><?php echo $cliente->responseData ?></h1></td>
			</tr>
	</table>
	<?php
}
?>