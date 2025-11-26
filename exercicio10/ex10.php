<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 10</title>
</head>

<body>
  <form method="POST">
    <?php for($i = 1; $i <= 10; $i++){ ?>
      <?php echo "$i ª Pessoa"; ?> <br>
      Peso (kg): <input type="number" name="peso<?php echo $i;?>"> <br>
      Altura (cm): <input type="number" name="altura<?php echo $i;?>"> <br><br>
    <?php } ?>
    <button type="submit" name="botao">Finalizar</button>
  </form><br>

    <?php
      $somaAltura = 0;
      $contMaior90 = 0;
      $contMaior100 = 0;
      $contMenor50 = 0;
      if(isset($_POST["botao"])){
        // Pesos e alturas
        echo "----------------------------------------------------<br>";
        for($i = 1; $i <= 10; $i++){
          echo "$i ª Pessoa <br>Peso: " . $_POST["peso$i"] . "<br>Altura: ". $_POST["altura$i"] . "<br><br>";
        }
        echo "----------------------------------------------------<br>";
        // Média de altura
        for($i = 1; $i <= 10; $i++){
          $somaAltura += $_POST["altura$i"];
          if($i == 10){
            echo "Média de altura: " . $somaAltura / 10 . "cm<br>";
          }
        }
        echo "----------------------------------------------------<br>";
        // Quantidade de pessoas que pesam mais de 90kg
        for($i = 1; $i <= 10; $i++){
          if($_POST["peso$i"] > 90){
            $contMaior90++;
          }
        }
        echo "Pessoas que pesam mais de 90kg: $contMaior90 Pessoas<br>";
        echo "----------------------------------------------------<br>";
        // Quantidade de pessoas que pesam menos de 50kg e tem menos de 1.60m
        for($i = 1; $i <= 10; $i++){
          if($_POST["peso$i"] < 50 && $_POST["altura$i"] < 160){
            $contMenor50++;
          }
        }
        echo "Quantidade de pessoas que pesam menos de 50kg com menos de 1.60m: $contMenor50 Pessoas<br>";
        echo "----------------------------------------------------<br>";
        // Quantidade de pessoas que pesam mais de 100kg e tem menos de 1.90m
        for($i = 1; $i <= 10; $i++){
          if($_POST["peso$i"] > 100 && $_POST["altura$i"] > 190){
            $contMaior100++;
          }
        }
        echo "Quantidade de pessoas que pesam mais de 100kg com mais de 1.90m: $contMaior100 Pessoas<br>";
        echo "----------------------------------------------------<br>";
      } else{
        echo "<br>Aguardando Operação...";
      }


    ?>

</body>
</html>