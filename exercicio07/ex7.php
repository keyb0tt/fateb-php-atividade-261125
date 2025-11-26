<?php
  $numeros = [$_POST["n1"], $_POST["n2"], $_POST["n3"]];
  sort($numeros);

  echo $numeros[0]. " " . $numeros[1] . " " . $numeros[2];


