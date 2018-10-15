<?php
  $numDec = $_POST['txt_decimal'];
  echo "<h1>CONVERSION DE NÚMEROS</h1>";
  echo "<br/>NUMERO DECIMAL :".$numDec;
  echo "<br/>Número en binario: ".decbin($numDec);
  echo "<br/>Numero en octal: ".decoct($numDec);
  echo "<br/>Numero en hexadecimal: ".dechex($numDec);
 ?>
