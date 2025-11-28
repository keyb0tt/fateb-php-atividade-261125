<html>

<body>
    <form method="POST">
        <h3>Sabor:</h3>
        <input type="radio" name="sabor" value="Calabresa"> Calabresa<br>
        <input type="radio" name="sabor" value="Mussarela"> Mussarela<br>
        <input type="radio" name="sabor" value="Portuguesa"> Portuguesa<br>

        <h3>Tamanho:</h3>
        <select name="tamanho">
            <option value="Pequena">Pequena</option>
            <option value="Média">Média</option>
            <option value="Grande">Grande</option>
        </select><br>

        <h3>Complementos:</h3>
        <input type="checkbox" name="comp[]" value="Borda"> Borda recheada<br>
        <input type="checkbox" name="comp[]" value="Catupiry"> Catupiry<br>
        <input type="checkbox" name="comp[]" value="Bacon"> Bacon extra<br>

        <button type="submit">Fazer Pedido</button>
    </form>

    <?php
    if ($_POST) {
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