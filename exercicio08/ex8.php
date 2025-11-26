<?php
  $tipo = $_POST["tipoCarro"];
  $dias = $_POST["dias"];
  $distancia = $_POST["distancia"];

  $valorDias = 0;
  $valorDistancia = 0;

  if($tipo = "popular" && $distancia <= 100){
    $valorDias = $dias * 90;
    $valorDistancia = $distancia * 0.2;
  } elseif($tipo = "popular" && $distancia > 100){
    $valorDias = $dias * 90;
    $valorDistancia = $distancia * 0.1;
  } elseif($tipo = "luxo" && $distancia <= 200){
    $valorDias = $dias * 150;
    $valorDistancia = $distancia * 0.3;
  } elseif($tipo = "luxo" && $distancia > 200){
    $valorDias = $dias * 150;
    $valorDistancia = $distancia * 0.25;
  }

  echo "Preço a ser pago:<br>Dias: R$$valorDias<br>Distância rodada: R$$valorDistancia<br>Total: R$". $valorDias + $valorDistancia;