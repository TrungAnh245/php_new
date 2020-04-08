<?php
	$a=1;
	$b=3;
	$c=1;
	if($a==0&&$b==0&&$c==0)	{
		echo 'Phuong trinh co vo so nghiem !';
	}
	else if ($a==0) {
		if($b==0){
			echo 'Phuong trinh vo nghiem !';
		}
		else{
			echo 'Nghiem cua phuong trinh la: '.(-$c/$b);
		}
	}
	else{
		$delta=($b*$b)-4*$a*$c;
		if($delta<0){
			echo 'Phuong trinh vo nghiem !';
		}
		else if($delta==0){
			echo 'Phuong trinh co 1 nghiem kep la: '.(-$b/(2*$a));
		}
		else{
			echo 'Phuong trinh co nghiem thu nhat la: '.round(((-$b+sqrt($delta))/(2*$a)),2)."<br>";
			echo "Phuong trinh co nghiem thu hai la: ".round(((-$b-sqrt($delta))/(2*$a)),2);
		}
	}
?>