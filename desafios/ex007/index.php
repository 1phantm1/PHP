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
        // dado do formulário
        $sal = $_POST["sal"] ?? 1412;
        // padrão de moeda
        $std = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        // salários minimos
        $format_sal = numfmt_format_currency($std, $sal, "BRL");
        $min_sal = intval($sal / 1412);
        // resto do salário
        $resto = $sal % 1412;
        $format_rest = numfmt_format_currency($std, $resto, "BRL");
        var_dump($resto);

    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="sal">Salário (R$)</label>
            <input type="number" name="sal" id="sal">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado final:</h2>
        <?php 
            echo "<p>Quem ganha $format_sal por mês recebe <b>$min_sal salários mínimos + $resto</b></p>"
        ?>
    </section>
</body>
</html>