<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heredoc (mds)</title>
</head>
<body>
    <?php 
    // Código heredoc
    $canal = "Curso em vídeo";
    $ano = date("Y");
    echo <<< TESTE
        Olá galera do $canal!
                tudo bem com vocês?
            Como está sendo o ano de $ano
        Abraços! \u{1F596}
    TESTE;
    ?>
</body>
</html>