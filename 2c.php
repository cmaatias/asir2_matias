<style>
	div{
		margin:20px;
	}
</style>
<?php
function calcula($a,$b){

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
calcula(25,30);
calcula(4,3);
calcula(9,12);
calcula(20,60);
calcula(200,500);
calcula(1000,1200);
?>