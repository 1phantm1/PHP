<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../style.css">
</head>

<body>
    <header>
        <h1>Resultado: </h1>
    </header>
    <section>
        <?php
        $num = $_POST["num"];
        $ante = $num - 1;
        $suce = $num + 1;

        echo "<p>O número escolhido foi: <b>$num</b></p>";
        echo "<p>O seu antecessor é: <b>$ante</b></p>";
        echo "<p>O seu sucessor é: <b>$suce</b></p>";
        ?>
    </section>
</body>

</html>