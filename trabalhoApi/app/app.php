<?php 
// Função para fazer requisição à API usando cURL
function api($url) {
    // Inicializa uma sessão cURL com a URL fornecida
    $ch = curl_init($url);
    
    // Define a opção para retornar o resultado como string ao invés de imprimir diretamente
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    // Define o cabeçalho da requisição como JSON
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
    
    // Executa a requisição cURL e armazena a resposta
    $response = curl_exec($ch);

    // Verifica se ocorreu algum erro na requisição
    if ($response === false) {
        return ['error' => curl_error($ch)]; // Retorna o erro
    }

    // Fecha a sessão cURL
    curl_close($ch);

    // Decodifica a resposta JSON para um array associativo
    $decoded = json_decode($response, true);

    // Retorna os dados decodificados ou um erro se a resposta for inválida
    return $decoded ?? ['error' => 'Resposta inválida da API'];
}

// Define a URL base da API
$endpointBase = 'http://localhost/trabalhoApi/api/index.php';

// Faz as requisições iniciais para obter informações da API
$status = api("$endpointBase?option=status"); // Obtém o status da API
$time = api("$endpointBase?option=time"); // Obtém a data/hora da API
$random = api("$endpointBase?option=random"); // Obtém um número aleatório da API

// Verifica se a resposta contém erro antes de acessar os dados retornados
$statusMessage = $status['message'] ?? 'Erro ao obter status';
$datetime = $time['data']['datetime'] ?? 'Erro ao obter data/hora';
$randomNumber = $random['data']['random'] ?? 'Erro ao obter número';

// Variáveis para armazenar o resultado da pesquisa por estado (UF)
$searchedState = null;
$ufSearched = null;
$msgErro = null;

// Verifica se o usuário enviou uma busca por UF/Estado via GET
if (!empty($_GET['uf'])) {
    // Captura e formata o valor da UF fornecida pelo usuário
    $uf = urlencode(trim($_GET['uf']));
    
    // Faz a requisição à API para buscar informações do estado
    $states_search = api("$endpointBase?option=states_search&uf=$uf");

    // Verifica se a resposta da API contém um estado válido
    if (
        isset($states_search['data'][0]['nome']) &&
        !empty($states_search['data'][0]['nome'])
    ) {
        // Armazena o nome do estado encontrado
        $searchedState = $states_search['data'][0]['nome'];
    } else {
        // Caso contrário, exibe uma mensagem de erro
        $searchedState = "Estado não encontrado.";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <title>API</title>
</head>
<body>
    <div class="container">
        <h4 class="title">Resultados</h4>
        
        <!-- Exibir status da API -->
        <div class="dateApi">
            <p>Status da API:
                <span><?= htmlspecialchars($statusMessage) ?></span> <!-- Exibe o status da API -->
            </p>
        </div>

        <!-- Exibir data/hora da API -->
        <div class="dateApi">
            <p>Data/Hora:
                <span><?= htmlspecialchars($datetime) ?></span> <!-- Exibe a data/hora da API -->
            </p>
        </div>

        <!-- Exibir número aleatório da API -->
        <div class="dateApi">
            <p>Número Aleatório:
                <span><?= htmlspecialchars($randomNumber) ?></span> <!-- Exibe um número aleatório retornado pela API -->
            </p>
        </div>

        <!-- Formulário para busca por estado (UF) -->
        <form method="GET">
            <label for="uf">Digite a UF (Ex: SP, RJ, MG):</label>
            <input type="text" id="uf" name="uf" placeholder="Ex: SP" required maxlength="2">
            <input type="submit" value="Pesquisar">
        </form>

        <!-- Exibir resultado da pesquisa por estado -->
        <?php if ($searchedState): ?>
            <div class="resultado">
                <h3>Resultado:</h3>
                <p><strong>Estado:</strong> <?= htmlspecialchars($searchedState) ?></p>
            </div>
        <?php elseif ($msgErro): ?>
            <div class="erro">
                <p><?= htmlspecialchars($msgErro) ?></p>
            </div>
        <?php endif; ?>

    </div>
</body>
</html>
