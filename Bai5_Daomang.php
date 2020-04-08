<?php
	$arr=array(1,3,5,6,11);
	echo 'Mảng trước khi đảo là: ';
	foreach ($arr as  $value) {
		echo $value.' ' ;
	}
	
	for ($i=0,$j=count($arr)-1; $i < $j; $i++,$j-- ){ 
		$temp=$arr[$j];
		$arr[$j]=$arr[$i];
		$arr[$i]=$temp;
	}
	echo '<br> Mảng sau khi đảo là: ';
	foreach ($arr as $value) {
		echo $value.' ';
	}
?>