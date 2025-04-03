<?php 
//Define que a resposta da API será no formato JSON
header('Content-Type:application/json');

function response($message, $data = [], $status = 200){
    //código de status HTTP
    http_response_code($status);
    //converte o array em JSON
    echo json_encode([
        "status" => $status,
        "message" => $message,
        "data" => $data
    ], JSON_UNESCAPED_UNICODE); // => acentos e caracteres especiais sejam representados corretamente no JSON.
    exit;
}

$states = [
    ['uf' => 'AC', 'nome' => 'Acre'],
    ['uf' => 'AL', 'nome' => 'Alagoas'],
    ['uf' => 'AP', 'nome' => 'Amapá'],
    ['uf' => 'AM', 'nome' => 'Amazonas'],
    ['uf' => 'BA', 'nome' => 'Bahia'],
    ['uf' => 'CE', 'nome' => 'Ceará'],
    ['uf' => 'DF', 'nome' => 'Distrito Federal'],
    ['uf' => 'ES', 'nome' => 'Espírito Santo'],
    ['uf' => 'GO', 'nome' => 'Goiás'],
    ['uf' => 'MA', 'nome' => 'Maranhão'],
    ['uf' => 'MT', 'nome' => 'Mato Grosso'],
    ['uf' => 'MS', 'nome' => 'Mato Grosso do Sul'],
    ['uf' => 'MG', 'nome' => 'Minas Gerais'],
    ['uf' => 'PA', 'nome' => 'Pará'],
    ['uf' => 'PB', 'nome' => 'Paraíba'],
    ['uf' => 'PR', 'nome' => 'Paraná'],
    ['uf' => 'PE', 'nome' => 'Pernambuco'],
    ['uf' => 'PI', 'nome' => 'Piauí'],
    ['uf' => 'RJ', 'nome' => 'Rio de Janeiro'],
    ['uf' => 'RN', 'nome' => 'Rio Grande do Norte'],
    ['uf' => 'RS', 'nome' => 'Rio Grande do Sul'],
    ['uf' => 'RO', 'nome' => 'Rondônia'],
    ['uf' => 'RR', 'nome' => 'Roraima'],
    ['uf' => 'SC', 'nome' => 'Santa Catarina'],
    ['uf' => 'SP', 'nome' => 'São Paulo'],
    ['uf' => 'SE', 'nome' => 'Sergipe'],
    ['uf' => 'TO', 'nome' => 'Tocantins']
];

// Obtém o valor de option passado na URL, 
// se nada for informado, define como string vazia
$option = $_GET['option'] ?? '';

//define as rotas(endpoints) e suas funções
$routes = [
    'status' => function(){ 
        response("API Funcionando");
    },
    'time' => function(){ // => retorna data/hora do servidor
        response("Data e hora do servidor", [
            "datetime" => date('Y-m-d H:i:s')
        ]);
    },
    'random' => function(){ // => retorna um número aleatório dentro de um intervalo definido

        // Obtém os valores de 'min' e 'max' da URL, 
        // se não forem informados, assume 1 e 100 como padrão
        $min = intval($_GET['min']??1);
        $max = intval($_GET['max']??100);

        // Verifica se os parâmetros são válidos (min deve ser menor que max)
        if ($min >= $max) {
            response("Parâmetros inválidos: min deve ser menor que max");
        }

         // Retorna um número aleatório dentro do intervalo especificado
        response("Número aleatório gerado", [
            "random" => rand($min, $max)  
        ]);
    },
    'states' => function() use ($states){
        response("Lista dos Estados",$states);
    },
    'states_search' => function() use ($states){
        $uf = $_GET['uf'] ?? '';

        if(!$uf){
            response("Parâmetro uf é obrigatorio", 400);
        }

        $result = array_filter($states, function($states) use ($uf){
            return strtolower($states['uf']) === strtolower($uf);
        });

        if(empty($result)){
            response("Estado não encontrado", 404);
        }

        response("Estado encontrado", array_values($result));
    }

];
// Verifica se a opção fornecida está definida no array de rotas
if (array_key_exists($option, $routes)) {
    $routes[$option](); // => Se existir, executa a função correspondente
} else {
     // Se não existir, retorna um erro informando que a opção é inválida
    response(400, "Opção inválida"); 
}