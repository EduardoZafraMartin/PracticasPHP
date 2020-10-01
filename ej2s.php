<html>

	<head>

		<title>E EJ2- Conversion IP</title>

	</head>

	<body>

		<?php

		$ip="192.18.16.204";

		$punto1=strpos ($ip,".",0);

		$punto2=strpos ($ip,".",($punto1+1));

		$punto3=strpos ($ip,".",($punto2+1));

		

		$p1=decbin(substr($ip,0,$punto1));

		$p2=decbin(substr($ip,($punto1)+1,($punto2-$punto1-1)));

		$p3=decbin(substr($ip,($punto2)+1,($punto3-$punto2-1)));

		$p4=decbin(substr($ip,($punto3)+1,($punto3)));

		

		echo ("El numero decimal $ip en binario es ".str_pad($p1,8,0,STR_PAD_LEFT).".".

		str_pad($p2,8,0,STR_PAD_LEFT).".".str_pad($p3,8,0,STR_PAD_LEFT).".".str_pad($p4,8,0,STR_PAD_LEFT));

		?>

	</body>

</html>

