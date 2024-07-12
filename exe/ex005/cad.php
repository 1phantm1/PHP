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
        <h1>Resultado do processamento</h1>
    </header>
    <main>    
        <?php
            $nome = $_GET["nome"] ?? "usuário";
            // coalescêcia nula
            $snome = $_GET["snome"] ?? "505314923";
            echo "É um prazer te conhecer $nome $snome, Bem vindo ao meu site"
            // $_REQUEST = $_GET + $_POST + $_COOKIES
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página inicial</a></p>
    </main>
</body>
</html>