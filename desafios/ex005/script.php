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
        // tratamento do formulário
        $num = $_POST["num"] ?? 1.0;
        $format_num = number_format($num, 3, ",", ".");
        // tratamento da parte inteira
        $int_part = intval($num);
        // tratamento da parte depois da vírgula
        $frac_part = $num - $int_part;  
        $format_num2 = number_format($frac_part, 3, ",", ".");
        
        

    ?>
    <section>
        <h1>Analisador de número real</h1>
        <p>Analisando o número <?php echo "<b>$format_num</b>" ?> informado</p>
        <ul>
            <li>A parte inteira do número é <?php echo "<b>$int_part</b>" ?></li>
            <li>A parte fracionária do número é <?php echo "<b>$format_num2</b>" ?></li>
        </ul>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </section>
</body>
</html>