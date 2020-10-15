<HTML>
<HEAD> <TITLE>Ej5a</TITLE> </HEAD>
<meta charset="UTF-8">
<BODY>

<?php

	echo "Apartado A: <br>";

	
	$asig1=array("Bases Datos","Entornos Desarrollo","Programación");
	$asig2=array("Sistemas Informáticos","FOL","Mecanizado");
	$asig3=array("Desarrollo Web ES","Desarrollo Web EC","Despliegue","Desarrollo Interfaces","Inglés.");
	$asig4=array();

		for($i=0;$i<count($asig1);$i++){
	        $asig4[$i]=$asig1[$i];
	    	}
	    for($i=0;$i<count($asig2);$i++){	
	        $asig4[$i+3]=$asig2[$i];
	      	}
	    for($i=0;$i<count($asig3);$i++){  	
	        $asig4[$i+6]=$asig3[$i];
	    	}
    	for($i=0;$i<count($asig4);$i++){
        	echo $asig4[$i]." ";
    	}

	echo "<br>";
	echo "<br> Apartado B: <br>";

	$asig1=array("Bases Datos","Entornos Desarrollo","Programación");
	$asig2=array("Sistemas Informáticos","FOL","Mecanizado");
	$asig3=array("Desarrollo Web ES","Desarrollo Web EC","Despliegue","Desarrollo Interfaces","Inglés.");


	$unionMerge=array_merge($asig1,$asig2,$asig3);

	for($i=0;$i<count($unionMerge);$i++){
        echo $unionMerge[$i]." ";
	}echo "<br>";
	echo "<br> Apartado C: <br>";

	$asig1=array("Bases Datos","Entornos Desarrollo","Programación");
	$asig2=array("Sistemas Informáticos","FOL","Mecanizado");
	$asig3=array("Desarrollo Web ES","Desarrollo Web EC","Despliegue","Desarrollo Interfaces","Inglés.");

	$asigtotal=$asig1;

		foreach ($asig2 as $asig2s) {
			array_push($asigtotal, $asig2s);
		}
		foreach ($asig3 as $asig3s) {
			array_push($asigtotal, $asig3s);
		
		}
		 for($i=0;$i<count($asigtotal);$i++){
        	echo $asigtotal[$i]." ";
		}
	
	
?>
</BODY>
</HTML>
