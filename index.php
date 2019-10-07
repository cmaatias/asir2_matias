<?php
if(isset($_GET['email'])){
	echo $_GET['email'];
	$f=fopen('suscriptores.txt','a');
	fwrite($f,$_GET['email']."\r\n");
	fclose($f);
}
?>
<?php
$f=fopen('visitas.txt','a');
fwrite($f,$_SERVER['REMOTE_ADDR']."\r\n");
fclose($f);
?>
<form>
	<input name="email" type="email"/>
	<button>Suscribete!</button>
<form/>