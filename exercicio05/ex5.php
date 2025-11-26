<?php
  $nascimento = $_POST["nascimento"];
  $idade = 2025 - $nascimento;

  if($idade < 18){
    echo "Faltam " . 18 - $idade . " anos para poder se alistar.<br>";
  } elseif($idade > 18){
    echo "Se passaram " . $idade - 18 . " anos do alistamento obrigatório.<br>";
  }

