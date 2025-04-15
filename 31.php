<?php
	$num=144;
	$total=0;
	$x=$num;
	while($x!=0){
		$num=$x%10;
		$total=$total+$num*$num*$num;
		$x=$x/10;
	}
	if($num==$total){
		echo "$num is ";
	}
?>