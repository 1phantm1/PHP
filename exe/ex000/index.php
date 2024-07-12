<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="1">
    <title>Me livrando da maldição (2)</title>
</head>
<body>
    <h1>
        <?= "Hello, world \u{1F30E} <br>" ?>
        <?php 
        echo "Hello, world (2) \u{1f30E} <br>"
        ?>
        <!--
        ### Configurar no arquivo php.ini
        <? 
        $hw = "Hello, world! (3) \u {1f30E}";
        echo $hw;
        ?>
        -->
        <!--
        <%
        ### Configurar no arquivo php.ini
        $hw2 = "Hello, world! (4) \u{1f30E}";
        echo $hw2;
        %>
        -->
        <!--
        ### Funciona do php 5.0 para baixo
        <script language="php">
            echo "Hello, world 5";
        </script>
        -->
    </h1>
    <p>Vamos tentar nos livrar da maldição</p>
</body>
</html>