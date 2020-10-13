<html>

	<head>

		<title> EJ1B–Conversor decimal a binario (Eduardo Zafra Martín) </title>

	</head>

		<body>

		<?php

		$num=168;

		$bin="";


		while ($num>=1){
		$bin2=$num%2;
		$num/=2;
		$bin=$bin.$bin2;
		}
		echo(strrev($bin)."<br>");

		?>

	</body>	

</html>
