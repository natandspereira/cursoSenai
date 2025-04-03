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
];
// Verifica se a opção fornecida está definida no array de rotas
if (array_key_exists($option, $routes)) {
    $routes[$option](); // => Se existir, executa a função correspondente
} else {
     // Se não existir, retorna um erro informando que a opção é inválida
    response(400, "Opção inválida"); 
}