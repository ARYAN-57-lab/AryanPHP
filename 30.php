<?php
	$num=0;
	$n1=0;
	$n2=1;
	echo "Fibonacci Series:";
	echo $n1."\n".$n2."\n";
	while($num<10){
		$n3=$n2=$n1;
		echo $n3;
		echo "\n";
		$n1=$n2;
		$n2=$n3;
		$num=$num+1;
	}
	echo "Program by Aryan(0221BCA161)";
?>