<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <?php 
        $num = $_POST["num"] ?? 4;
        $raiz2 = sqrt($num);
        $raiz3 = pow($num, 1/3);
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <label for="num">Número</label>
            <input type="number" name="num" id="num">
            <input type="submit" value="Calcular Raiz">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php
            echo "Analisando o <b>número $num</b>, temos: ";
            echo "<ul><li>A sua raiz quadrada é de <b>". number_format($raiz2, 3) ."</b>";
            echo "<li>A raiz cúbica é <b>". number_format($raiz3, 3) ."</b></ul>"
        ?>
    </section>
</body>
</html>