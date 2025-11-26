<?php
  $nota1 = $_POST["nota1"];
  $nota2 = $_POST["nota2"];

  $media = ($nota1 + $nota2) / 2;

  echo "Média: $media<br>";

  if($media >= 7){
    echo "Aprovado";
  } elseif ($media >= 5){
    echo "Exame";
  } else{
    echo "Reprovado";
  }