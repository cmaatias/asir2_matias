MATIAS
<a href="192.168.0.145/asir2_seebasbt/asir2.php">SEBAS</a>
<?php
$dns=[
	'192.168.0.67'=>'  Jose Luis',
	'192.168.0.145'=>'  Sebas',
	'192.168.0.64'=>'  Xanders',
	];
?>
<?php
$f=fopen('visitastimestamp.txt','a');
fwrite($f, date('Y-m-d H:i:s').($dns[$_SERVER['REMOTE_ADDR']]."\r\n"));
fclose($f);
?>