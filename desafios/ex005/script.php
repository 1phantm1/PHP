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
        $num = $_POST["num"];
        $format_num = number_format((float) $num, 3, ",", ",");
        $int_part = floor($format_num);
        $frac_part = $format_num - $int_part;
        var_dump($int_part);
        var_dump($frac_part);
    ?>
    <section>
        <h1>Analisador de número real</h1>
        <p>Analisando o número <?php echo "<b>$format_num</b>" ?> informado</p>
        <ul>
            <li>A parte inteira do número é <?php echo "<b>$int_part</b>" ?></li>
            <li>A parte fracionária do número é <?php echo "<b>$frac_part</b>" ?></li>
        </ul>
    </section>
</body>
</html>