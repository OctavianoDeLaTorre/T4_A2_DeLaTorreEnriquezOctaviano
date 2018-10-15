<?php
    $operacion = $_POST['txt_operacion'];

    echo "<h1>Evaluar operación</h1>";

    echo $operacion." = ".evaluar($operacion);

    function evaluar($operacion){
      $opArry;
      if (tipoOperacion($operacion,"+")) {
        $opArry = explode("+",$operacion);
        return (trim($opArry[0])+trim($opArry[1]));
      } elseif (tipoOperacion($operacion,"-")) {
        $opArry = explode("-",$operacion);
        return (trim($opArry[0])-trim($opArry[1]));
      } elseif (tipoOperacion($operacion,"*")) {
        $opArry = explode("*",$operacion);
        return (trim($opArry[0])*trim($opArry[1]));
      }elseif (tipoOperacion($operacion,"/")) {
        $opArry = explode("/",$operacion);
        return (trim($opArry[0])/trim($opArry[1]));
      }
    }

    function tipoOperacion($operacion,$oparando){
      for ($i = 0; $i < strlen($operacion); $i++) {
        if($operacion[$i] == $oparando ){
          return true;
        }
      }
      return false;
    }
 ?>
