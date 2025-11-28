<html>

<body>
    <form method="POST">
        <br>Tamanho:
        <select name="tamanho">
            <option value="Pequena">Pequena</option>
            <option value="Média">Média</option>
            <option value="Grande">Grande</option>
        </select><br><br>

        Sabor:<br>
        <input type="radio" name="sabor" value="Calabresa"> Calabresa<br>
        <input type="radio" name="sabor" value="Mussarela"> Mussarela<br>
        <input type="radio" name="sabor" value="Portuguesa"> Portuguesa<br>

        <br>Complementos:<br>
        <input type="checkbox" name="comp[]" value="Borda"> Borda <br>
        <input type="checkbox" name="comp[]" value="Catupiry"> Calabresa <br>
        <input type="checkbox" name="comp[]" value="Bacon"> Maionese <br>

        <br><button type="submit" name="confirmar">Confirmar</button>
    </form>

    <?php
    if (isset($_POST["confirmar"])) {
        $con = mysqli_connect("localhost", "root", "1234", "BANCO");

        $sabor = $_POST['sabor'];
        $tamanho = $_POST['tamanho'];
        $complementos = isset($_POST['comp']) ? implode(", ", $_POST['comp']) : "Nenhum";

        $sql = "INSERT INTO TB_PIZZAS (sabor, tamanho, complementos) 
            VALUES ('$sabor', '$tamanho', '$complementos')";

        mysqli_query($con, $sql);
        echo "Pedido cadastrado com sucesso!";
        mysqli_close($con);
    }
    ?>
</body>

</html>