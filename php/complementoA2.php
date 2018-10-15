<?php
    $num = $_POST['txt_num'];

    $numBi =  decbin($num);
    $a1 = decbin(~intval($num));
    $a2 = complementoA2($a1);

    echo "<h1>Complemento a2</h1>";
    echo "<br/>Numero Decimal A1: ".$num;
    echo "<br/>Número BINARIO: ".completarNum($numBi);
    echo "<br/>Complemanto A1: ".$a1;
    echo "<br/>Complemento A2: ".$a2;


  function complementoA1($num){
    $a1 = "";
    for ($i=0; $i < strlen($num); $i++) {
      if($num[$i] == "0"){
        $a1[$i] = "1";
      }else {
        $a1[$i] = "0";
      }
    }
    return $a1;
  }

  function complementoA2($num){
    for ($i=strlen($num)-1 ; $i >= 0  ; $i--) {
      if($num[$i] == "0"){
        $num[$i] = "1";
        return $num;
      }else {
        $num[$i] = "0";
      }

    }
    return $num;
  }

  function completarNum($num){
    $aunx = "";
    for ($i=0 ; $i < (64- strlen($num)) ; $i++) {
        $aunx[$i] = "0";
    }
    return $aunx.$num;
  }
 ?>
