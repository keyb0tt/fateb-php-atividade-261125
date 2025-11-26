<?php
  $nota1 = $_POST["nota1"];
  $nota2 = $_POST["nota2"];

  $media = ($nota1 + $nota2) / 2;

  echo "Média: $media";