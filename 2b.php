<style>
	div{
		margin:20px;
	}
</style>
<?php
function calcula(){
$a=25;
$b=30;
	echo '<div>';
		echo 'SUMA: '.$a.' + '.$b.' = ';
		echo $a+$b;
	echo '</div>';

	echo '<div>';
		echo 'PRODUCTO: '.$a.' * '.$b.' = ';
		echo $a*$b;
	echo '</div>';
	echo '<div>';
		echo 'COCIENTE: '.$b.' / '.$a.' = ';
		echo $b/$a;
	echo '</div>';
	echo '<div>';
		echo 'RESTA: '.$b.' - '.$a.' = ';
		echo $b-$a;
	echo '</div>';
	echo '<div>...</div>';
}
calcula();
?>