<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../style.css">
</head>

<body>
    <header>
        <h1>Sorteador de números</h1>
    </header> 
    <?php
        $rand = mt_rand(1, 100);
        // rand() = algoritmo de 1951
        // mt_rand() = algoritmo de 1997, 4x mais rápido
        // random_int() = algoritmo criptografado
    ?>
    <section>
        <p>Gerando um número aleatório de 1 a 100</p>
        <p>O número gerado foi: <?php echo $rand ?></p>
        <form method="post" action="">
            <input type="submit" value="Gerar número" name="btn">
        </form>
    </section>
</body>

</html>