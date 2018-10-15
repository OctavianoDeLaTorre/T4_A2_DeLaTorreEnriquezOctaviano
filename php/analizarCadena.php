<?php
  $cadena = $_POST['txt_cadena'];
  $caracter = $_POST['txt_letra'];

  $resultado = contarVocales($cadena);

  echo "<h1>Análisis de cadenas</h1>";
  echo "<br/>a) Cantidad de vocales: ".$resultado[0];
  echo "<br/>b) Cantidad de consonantes: ".$resultado[1];
  echo "<br/>c) Cantidad de apariciones de ".$caracter." : ".numApariciones($cadena,$caracter);
  echo "<br/>d) La cadena como cadena loca: ".cadenaLoca($cadena);

function cadenaLoca($cadena) {
   $cadenaLoca = "";
    for ($i = 0; $i < strlen($cadena); $i++) {
      if ($i%2 == 0) {
        $cadenaLoca[$i]=strtoupper($cadena[$i]);
      }else {
          $cadenaLoca[$i]=strtolower($cadena[$i]);
      }
    }
    return $cadenaLoca;
}

  function numApariciones($cadena,$letra){
    $numAp = 0;
    for ($i = 0; $i < strlen($cadena); $i++) {
      if (strtoupper($letra) == strtoupper($cadena[$i])) {
        $numAp ++;
      }
    }
    return $numAp;
  }


  function contarVocales($cadena){
    $resultado = array(0,0);
    	for ($i = 0; $i < strlen($cadena); $i++) {
        if(esVocal($cadena[$i])){
          $resultado[0]++;
        }else {
          $resultado[1]++;
        }
      }
      return $resultado;
  }

  function esVocal($caracter){
    $array = array("A","E","I","O","U");
  	for ($j = 0; $j < sizeof($array); $j++){
  		if(strtoupper($caracter) == $array[$j]){
  			return true;
  		}
  	}
  }
 ?>
