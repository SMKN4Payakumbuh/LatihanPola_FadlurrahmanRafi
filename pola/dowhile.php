<?php
$i=1;
do{
	$j=1;
	do{
		echo " *";
		$j++;
	}while($j<=$i);
	$i++;
	echo "<br>";
}while($i<= 5);


$i=1;
do{
	$j=$i;
	do{
		echo " *";
		$j++;
	}while ($j <= 5);
	$i++;
	echo "<br>";
}while($i <= 5);
?>