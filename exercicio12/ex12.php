<html>

<body>
    <form method="POST">
        Nome: <input type="text" name="nome"><br>
        Idade: <input type="text" name="idade"><br>
        Sexo:
        <input type="radio" name="sexo" value="masculino"> Masculino
        <input type="radio" name="sexo" value="feminino"> Feminino<br>
        Salário: <input type="text" name="salario"><br>
        <button type="submit" name="cadastrar" value="cadastrar">Cadastrar</button>
    </form>

    <?php
    ini_set('display_errors', 1);
    if (isset($_POST["cadastrar"])) {

        $con = mysqli_connect("localhost", "root", "1234", "BANCO");

        if (!$con) {
            die("Erro na conexão: " . mysqli_connect_error());
        }

        $nome = $_POST['nome'];
        $idade = (int) $_POST['idade'];
        $sexo = $_POST['sexo'];
        $salario = (float) $_POST['salario'];

        $sql = "INSERT INTO TB_PESSOAS (nome, idade, sexo, salario)
            VALUES ('$nome', $idade, '$sexo', $salario)";

        if (mysqli_query($con, $sql)) {
            echo "Pessoa cadastrada com sucesso!";
        } else {
            echo "Erro: " . mysqli_error($con);
        }

        mysqli_close($con);
    }
    ?>
</body>

</html>