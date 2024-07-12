<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="1">
    <title>Tipos primitivos</title>
</head>
<body>
    <h1>teste</h1>
    <?php 
        // 0x = hexadecimal
        // 0b = binário
        // 0 = octal
        // $num = 010;
        // echo "O valor da variável é $num";
        // $v = 0x1F;
        // var_dump($v);
        // $num = (integer) 3e2; // 3 x 10 ^ 2
        // echo "O valor é $num <br>";
        // var_dump($num);
        $nome = "nome";
        $idade = 19;
        const ESTADO = "SP";
        echo "Seu nome é $nome, você tem $idade anos e você mora em " . ESTADO; 
        echo "<br>Você está no ano de " . date("Y");
    ?>
</body>
</html>
