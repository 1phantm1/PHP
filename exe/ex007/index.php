<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $abs = abs(-200);
    $base_convert = base_convert(1234, 10, 16);
    $hypot = hypot(200, $abs);
    $intdiv = intdiv(5, 2);
    $min = min(10, 15, 50, 20, 12, 0, 5);
    $max = max(10, 15, 50, 20, 12, 0, 5);
    $pi = M_PI;
    $sqrt = sqrt(36);
    $sqrt2 = 36 ** (1/2);
    echo "<p>$abs</p>";
    echo "<p>$base_convert</p>";
    echo "<p>$hypot</p>";
    echo "<p>$intdiv</p>";
    echo "<p>$min, $max</p>";
    echo "<p>$pi</p>";
    echo "<p>$sqrt, $sqrt2";
    ?>
</body>
</html>