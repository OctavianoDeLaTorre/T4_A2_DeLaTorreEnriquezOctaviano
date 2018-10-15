
<?php
  $nombre = $_POST['txt_nombre'];
  $primerAp = $_POST['txt_p_ap'];
  $segundoAp = $_POST['txt_s_ap'];
  $sexo = $_POST['rb_sexo'];
  $naimiento = $_POST['fecha_nacimiento'];
  $estado = $_POST['cb_estados'];

    $CURP = obtnerPrimerLetra(formatearCadena($primerAp)).
            obtenerVocal(formatearCadena($primerAp),1).
            obtnerPrimerLetra(formatearCadena($segundoAp)).
            obtnerPrimerLetra($nombre).
            obtnerFecha($naimiento).
            $sexo.
            obtenerEstado($estado).
            obtenerConsonate(formatearCadena($primerAp)).
            obtenerConsonate(formatearCadena($segundoAp)).
            obtenerConsonate($nombre).
            obtenerNumero($naimiento);

echo "<h1>CURP: ".strtoupper($CURP)."</h1>";

  function obtenerNumero($fecha){
	   return '0'.substr($fecha,2,1);
   }

  function obtnerPrimerLetra($cadena){
    trim($cadena);
    return   trim($cadena)[0];
  }

  function formatearCadena($cadena){
    $res = explode(" ",$cadena);
    return ($res[sizeof($res)-1]);
  }

  function obtenerVocal($cadena,$num) {
    $cont = 0;
    for ($i = 0; $i < strlen($cadena); $i++){
      if (esVocal($cadena[$i])) {
        return $cadena[$i];
      }
    }
  }

  function esVocal($caracter){
    $array = array("A","E","I","O","U");
  	for ($j = 0; $j < sizeof($array); $j++){
  		if(strtoupper($caracter) == $array[$j]){
  			return true;
  		}
  	}
  }

  function obtnerFecha($fecha) {
  	return substr($fecha,2, 2).
  	     substr($fecha,5, 2).
  		   substr($fecha,8, 2);
  }

  function obtenerSexo ($sexo) {
  	if ($sexo == 'on') {
  		return 'H';
  	} else {
  		return 'M';
  	}
  }
  function obtenerEstado($numEstado){
    $ENTIDAD_FEDERATIVA_VALOR = ["AS",
                              "BC",
    		                      "BS",
                              "CC",
                              "CL",
                              "CM",
                              "CS",
                              "CH",
                              "DF",
                              "DG",
                              "GT",
                              "GR",
                              "HG",
                              "JC",
                              "MC",
                              "MN",
                              "MS",
                              "NT",
                              "NL",
                              "OC",
                              "PL",
                              "QT",
                              "QR",
                              "SP",
                              "SL",
                              "SR",
                              "TC",
                              "TS",
                              "TL",
                              "VZ",
                              "YN",
                              "ZS",
                              "SM",
                              "NE"];
         return $ENTIDAD_FEDERATIVA_VALOR[$numEstado];
  }

  function obtenerConsonate($cadena){
  	for ($i = 1; $i < strlen($cadena); $i++) {
  		if(!esVocal($cadena[$i])){
  			return $cadena[$i];
  		}
  	}
  }

 ?>
