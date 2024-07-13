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
        $divid = $_POST["dividendo"] ?? 10;
        $divis = $_POST["divisor"] ?? 2;
        $quoci = $divid / $divis;
        $quoci_format = number_format($quoci, 0);
        $resto = $divid % $divis;
        var_dump($quoci);
        var_dump($resto);

    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor">
            <input type="submit" value="Dividir">
        </form>
    </main>
    <section>
        <table class="divisao">
            <h2>Estrutura da divisão</h2>
            <tbody>
                <tr>   
                    <td><?=$divid ?></td>
                    <td><?=$divis ?></td>
                </tr>
                <tr>
                    <td><?=$resto ?></td>
                    <td><?=$quoci_format ?></td>
                </tr>
            </tbody>
        </table>
    </section>
</body>
</html>