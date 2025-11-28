<html>

<body>
    <?php
    $con = mysqli_connect("localhost", "root", "1234", "BANCO");

    $sql = "SELECT nome, salario FROM TB_PESSOAS";
    $result = mysqli_query($con, $sql);

    $total = 0;
    while ($linha = mysqli_fetch_assoc($result)) {
        echo $linha['nome'] . " - R$ " . $linha['salario'] . "<br>";
        $total += $linha['salario'];
    }

    echo "<br>Total de salários: R$ " . number_format($total, 2);
    mysqli_close($con);
    ?>
</body>

</html>