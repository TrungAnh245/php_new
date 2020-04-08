<?php
	
	
	function tinhBieuThuc($n){
		$giaiThua=1;
		for ($i=1; $i <=$n ; $i++) { 
			$giaiThua=$giaiThua*$i;
		}
		if($n>=1){
			return ($n/$giaiThua)+tinhBieuThuc($n-1);
		}
		else{
			return 0;
		}
	}
	$a=15;
	
	echo round(tinhBieuThuc($a),3);

?>
