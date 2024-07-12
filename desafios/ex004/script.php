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
        $wallet = $_POST["real"];
        $date = date('m/d/Y', time());
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'07-12-2024\'&@dataFinalCotacao=' . $date . '&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,cotacaoVenda';
        
        $data = json_decode(file_get_contents($url), true);
        price = $data["value"][0]["cotacaoCompra"]; 
        $standard = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $formatted_real = numfmt_format_currency($standard, $wallet, "BRL");
        $formatted_dolar = numfmt_format_currency($standard, $us, "USD");
    ?>
    <section>
        <h1>Conversor de moedas v1.0</h1>
        <p><?php echo "Seus $formatted_real equivalem a <b>$formatted_dolar</b>"?></p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </section>
</body>
</html>