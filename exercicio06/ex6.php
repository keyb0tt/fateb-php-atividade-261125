<?php
  $n1 = $_POST["n1"];
  $n2 = $_POST["n2"];

  if($n1 > $n2){
    echo "O Primeiro valor é o maior";
  } elseif($n2 > $n1){
    echo "O Segundo valor é o maior";
  } else{
    echo "Não existe valor maior, os dois são iguais";
  }
