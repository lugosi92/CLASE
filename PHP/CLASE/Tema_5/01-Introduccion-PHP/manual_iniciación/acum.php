﻿<?php
    function acumular (&$a, $incremento)  {	// $acum se pasa por referencia
		$a = $a+ $incremento;
	}
    $acum = 1;
	echo "acumulador = $acum <br>";
    for ($i=1; $i<4; $i++){
		acumular ($acum, 4);
		echo "acumulador = $acum <br>";
	}
?>
