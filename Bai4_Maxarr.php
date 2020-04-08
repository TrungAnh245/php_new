<?php
	$arr = array(1,4,2,6,9,100,45,8,20);
	$max=$arr[0];
	for ($i=0; $i < 9 ; $i++) { 
		if($max<$arr[$i]){
			$max=$arr[$i];
		}
	}
	echo 'phần tử lớn nhất trong mảng là: '.$max;
?>