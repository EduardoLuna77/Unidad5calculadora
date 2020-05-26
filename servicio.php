  <?php 
	require_once('lib/nusoap.php');
	require_once('calculadora.php');

	$server = new nusoap_server();
	$server->register('calculadora');
	#echo 'entró';

	#$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : 'error';
	$server->service(file_get_contents("php://input"));

?> 
