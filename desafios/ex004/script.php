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
        // captação da entrada
        $real = $_POST["real"] ?? 1000;
        //padrão de numeração
        $standard = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        // inicio e fim do tempo
        $start = date("m-d-Y", strtotime("-7 days"));
        $end = date("m-d-Y");
        //url da API
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $start . '\'&@dataFinalCotacao=\''. $end .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        // conversão da url para JSON usando array
        $data = json_decode(file_get_contents($url), true);
        // pegando o valor do preço de compra do dólar
        $price = $data["value"][0]["cotacaoCompra"]; 
        // conversão do valor
        $conversion = $real / $price;

        $formatted_real = numfmt_format_currency($standard, $real, "BRL");
        $formatted_dolar = numfmt_format_currency($standard, $conversion, "USD");
    ?>
    <section>
        <h1>Conversor de moedas v1.0</h1>
        <p><?php echo "Seus $formatted_real equivalem a <b>$formatted_dolar</b>"?></p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </section>
</body>
</html>