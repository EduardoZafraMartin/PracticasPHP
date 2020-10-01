<html>

	<head>

		<title> EJ2-Direccion Red–Broadcast y Rango (Eduardo Zafra Martín)</title>

	</head>

	<body>

		<?php


		$ip2="192.168.16.100/16";

		$mascara=16;

		$pt1=strpos ($ip2,".",0);

		$pt2=strpos ($ip2,".",($pt1+1));

		$pt3=strpos ($ip2,".",($pt2+1));

		$ip2bin=sprintf ("%08b%08b%08b%08b<br>",(substr($ip2,0,$pt1)),

		(substr($ip2,($pt1)+1,($pt2-$pt1))),

		(substr($ip2,($pt2)+1,($pt3-$pt2))),

		(substr($ip2,($pt3)+1,($pt3))));



		$dirbin=str_pad ((substr ($ip2bin,0,$mascara)),32,0,STR_PAD_RIGHT) ;

		echo "La direccion de red de la ip $ip2 es ",bindec(substr($dirbin,0,8)),".",bindec(substr($dirbin,8,8)),".",

		bindec(substr($dirbin,16,8)),".",bindec(substr($dirbin,24,8));

		echo "<br>";

		

		$dirbro=str_pad ((substr ($ip2bin,0,$mascara)),32,1,STR_PAD_RIGHT) ;

		echo "La direccion broadcast de la ip $ip2 es ",bindec(substr($dirbro,0,8)),".",bindec(substr($dirbro,8,8)),".",

		bindec(substr($dirbro,16,8)),".",bindec(substr($dirbro,24,8));

		?>
	</body>
</html>