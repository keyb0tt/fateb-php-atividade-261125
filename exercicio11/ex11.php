<html>

<body>
    <form method="POST">
        <p>Quantidade máxima: 100 pessoas</p>
        Nome: <input type="text" name="nome" placeholder="Digite seu nome"> <br><br>
        Idade: <input type="number" name="idade" placeholder="Digite sua idade"> <br><br>
        Sexo:
        <select name="sexo">
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
        </select>
        <br><br>
        <button type="submit" name="acao" value="continuar">Continuar</button>
        <button type="submit" name="acao" value="finalizar">Finalizar</button>
        <button type="submit" name="acao" value="limpar">Limpar</button>
    </form>
</body>

</html>

<?php
session_start();
if (!isset($_SESSION["contPessoas"])) {
    $_SESSION["contPessoas"] = 0;
}

if (!isset($_SESSION["pessoas"])) {
    $_SESSION["pessoas"] = array();
}

if (isset($_POST["acao"]) && $_POST["acao"] == "continuar" && $_SESSION["contPessoas"] < 100) {
    $_SESSION["contPessoas"]++;
    echo "Pessoa cadastradas: " . $_SESSION["contPessoas"] . "<br>";

    $_SESSION["pessoas"][] = array(
        "nome" => $_POST["nome"],
        "idade" => $_POST["idade"],
        "sexo" => $_POST["sexo"],
    );
}

if (isset($_POST["acao"]) && $_POST["acao"] == "finalizar") {
    $pessoaVelha = $_SESSION["pessoas"][0];
    $mulherJovem = $_SESSION["pessoas"][0];
    $homemMaior30 = 0;
    $mulherMenor18 = 0;

    foreach ($_SESSION["pessoas"] as $pessoa) {
        $somaIdade += $pessoa["idade"];

        if ($pessoa["idade"] > $pessoaVelha["idade"]) {
            $pessoaVelha = $pessoa;
        }
        if ($pessoa["idade"] < $mulherJovem["idade"] && $pessoa["sexo"] = "feminino") {
            $mulherJovem = $pessoa;
        }
        if ($pessoa["idade"] > 30 && $pessoa["sexo"] == "masculino") {
            $homemMaior30++;
        }
        if ($pessoa["idade"] < 18 && $pessoa["sexo"] == "feminino") {
            $mulherMenor18++;
        }
    }

    echo "Pessoa mais velha: " . $pessoaVelha["nome"] . "<br>";
    echo "Mulher mais jovem: " . $mulherJovem["nome"] . "<br>";
    echo "Média de idade do grupo: " . $somaIdade / $_SESSION["contPessoas"] . "<br><br>";
    echo "Quantidade de homens com mais de 30 anos: " . $homemMaior30 . "<br>";
    echo "Quantidade de mulheres com menos de 18 anos: " . $mulherMenor18 . "<br><br>";

    echo "Nomes e idades de todas pessoas registradas: <br>";
    foreach ($_SESSION["pessoas"] as $pessoa) {
        echo "Nome: " . $pessoa["nome"] . "<br>Idade: " . $pessoa["idade"] . "<br><br>";
    }
}

if ($_POST["acao"] == "limpar") {
    session_destroy();
}


