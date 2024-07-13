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
        $valor1 = $_POST["v1"] ?? 1;
        $valor2 = $_POST["v2"] ?? 1;
    ?>
    <main>
        <h1>Somador de valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>" step="0.001">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$valor1?>" step="0.001">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section>
        <h2>Resultado: </h2>
        <?php 
            $soma = $valor1 + $valor2;
            echo "<p>A soma entre os valores $valor1 e $valor2 é <b>igual a $soma</b></p>";
        ?>

    </section>
</body>
</html>