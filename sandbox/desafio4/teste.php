<pre>
<?php 
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=%2705-02-2023%27&@dataFinalCotacao=%2705-09-2023%27&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    $dados = json_decode(file_get_contents($url), true);

    var_dump($dados);

    ?>

</pre>