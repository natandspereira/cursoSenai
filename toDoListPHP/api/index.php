<?php

// Caminho do arquivo JSON
$filePath = 'tarefas.json';

// Lê o arquivo JSON
function getTasks() {
    return json_decode(file_get_contents('tarefas.json'), true);
}

// Adiciona uma nova tarefa ao arquivo JSON
function addTask($titulo) {
    $tarefas = getTasks();
    $tarefas[] = ['titulo' => $titulo];
    file_put_contents('tarefas.json', json_encode($tarefas, JSON_PRETTY_PRINT));
}

// Verifica o método da requisição
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Retorna todas as tarefas
    echo json_encode(getTasks());
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Adiciona uma nova tarefa
    $data = json_decode(file_get_contents('php://input'), true);
    if (isset($data['titulo'])) {
        addTask($data['titulo']);
        echo json_encode(['message' => 'Tarefa adicionada com sucesso!']);
    } else {
        echo json_encode(['error' => 'Título da tarefa é obrigatório!']);
    }
} else {
    // Caso de método não permitido
    http_response_code(405);
    echo json_encode(['error' => 'Método não permitido']);
}
?>
