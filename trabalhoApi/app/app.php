<?php 
//função para fazer requisição a API
function api($url){
    //iniciar sessão curl com a url fornecida
    $ch = curl_init($url);

    //retorna o resultado da requisição como string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //defini o cebeçalho HTTP da requisição como JSON
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);

    //executa a requisição e armazena a resposta
    $response = curl_exec($ch);

    curl_close($ch); //fecha a conexão curl para liberar recursos

    //converte a resposta JSON em um array
    return json_decode($response, true);
} 
//define a url base da api que será utilizada
$endpointBase = 'http://localhost/trabalhoApi/api/index.php';

//faz a requisição para obter o status da API
$status = api("$endpointBase?option=status");

//faz a requisição para obter data/hora do servidor
$time = api("$endpointBase?option=time");

//faz a requisição para obter um número aleatório
$random = api("$endpointBase?option=random");

?>

<!DOCTYPE html>
<html lang="pr-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LINK CSS -->
     <link rel="stylesheet" href="../css/index.css">
    <title>API</title>
</head>
<body>
    <div class="container">
        <h4 class="title">Resultados</h4>
        <!-- exibi o status da API -->
        <div class="dateApi">
            <p>Status da API:
                <span>
                    <?=htmlspecialchars($status['message']?? 'Erro ao tentar obter status')?>
                </span>
            </p>
        </div>
        <!-- exibi data/hora retornada pela api -->
        <div class="dateApi">
            <p>Data/Hora:
                <span>
                    <?=htmlspecialchars($time['data']['datetime']?? 'Erro ao tentar obter data/hora')?>
                </span>
            </p>
        </div>
        <!-- exibi número aleatório retornado pela api -->
        <div class="dateApi">
           <p>Número Aleatório:
            <span>
                <?=htmlspecialchars($random['data']['random']?? 'Erro ao tentar obter número')?>
            </span>
            </p>
        </div>
    </div>
</body>
</html>

