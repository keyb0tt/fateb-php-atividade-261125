<?php
  $dias = $_POST["dias"];

  $salario = $dias * 8 * 25;

  echo "Trabalhando $dias dias, o funcionário receberá R$$salario,00";