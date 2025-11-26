<?php
  $idades = [$_POST["idade1"], $_POST["idade2"], $_POST["idade3"], $_POST["idade4"], $_POST["idade5"], $_POST["idade6"], $_POST["idade7"], $_POST["idade8"]];
  $maiorIdade = max($idades);
  $maiorIdadePosicoes = [];
  $somaIdades = 0;

  for($i = 0; $i <= 7; $i++){
    $somaIdades += $idades[$i];

    if($idades[$i] > 25){
      echo "Maior de 25 detectado: posição [$i], idade: $idades[$i]<br>";
    }

    if($idades[$i] == $maiorIdade){
      array_push($maiorIdadePosicoes, $i);
    }
  }

  echo "Média de idades: " . $somaIdades / 8 . "<br>";
  echo "Maior idade: $maiorIdade anos<br>";

  foreach($maiorIdadePosicoes as $x){
    echo "Posição da maior idade no vetor: $x<br>";
  }

