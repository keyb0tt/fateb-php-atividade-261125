<html>

<body>
    <?php
    $con = mysqli_connect("localhost", "root", "1234", "BANCO");

    if (isset($_POST['excluir'])) {
        $id = $_POST['id'];
        mysqli_query($con, "DELETE FROM TB_PESSOAS WHERE id=$id");
    }

    if (isset($_POST['alterar'])) {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        mysqli_query($con, "UPDATE TB_PESSOAS SET nome='$nome', idade=$idade WHERE id=$id");
    }

    $sql = "SELECT * FROM TB_PESSOAS";
    $result = mysqli_query($con, $sql);

    while ($linha = mysqli_fetch_assoc($result)) {
        echo "<form method='POST'>";
        echo "<input type='hidden' name='id' value='" . $linha['id'] . "'>";
        echo "Nome: <input type='text' name='nome' value='" . $linha['nome'] . "'> ";
        echo "Idade: <input type='text' name='idade' value='" . $linha['idade'] . "'> ";
        echo "Sexo: <input type='text' name='sexo' value='" . $linha['sexo'] . "'> ";
        echo "Salário: <input type='text' name='salario' value='" . $linha['salario'] . "'> ";
        echo "<button type='submit' name='alterar'>Alterar</button> ";
        echo "<button type='submit' name='excluir'>Excluir</button>";
        echo "</form><br>";
    }

    mysqli_close($con);
    ?>
</body>

</html>