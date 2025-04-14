<?php

$filePath = 'produtos.json';

function getProducts() {
    return json_decode(file_get_contents($GLOBALS['filePath']), true) ?? [];
}

function saveProducts($products) {
    file_put_contents($GLOBALS['filePath'], json_encode($products, JSON_PRETTY_PRINT));
}

function addProduct($name, $value, $quantity) {
    $products = getProducts();
    $products[] = [
        'id' => uniqid(),
        'nome' => $name,
        'preco' => $value,
        'quantidade' => $quantity
    ];
    saveProducts($products);
}

function updateProduct($id, $name, $value, $quantity) {
    $products = getProducts();
    foreach ($products as &$product) {
        if ($product['id'] === $id) {
            $product['nome'] = $name;
            $product['preco'] = $value;
            $product['quantidade'] = $quantity;
            saveProducts($products);
            return true;
        }
    }
    return false;
}

function deleteProduct($id) {
    $products = getProducts();
    $newProducts = array_filter($products, fn($p) => $p['id'] !== $id);
    if (count($products) === count($newProducts)) return false;
    saveProducts(array_values($newProducts));
    return true;
}

function getProductById($id) {
    $products = getProducts();
    foreach ($products as $product) {
        if ($product['id'] === $id) {
            return $product;
        }
    }
    return null;
}

// ROTEAMENTO
$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        // ✅ Garantir que $_GET['id'] exista antes de acessar
        if (array_key_exists('id', $_GET) && !empty($_GET['id'])) {
            $id = $_GET['id'];  // Acessando $_GET['id'] de forma segura
            $product = getProductById($id);
            if ($product) {
                echo json_encode($product);
            } else {
                echo json_encode(['error' => 'Produto não encontrado!']);
            }
        } else {
            echo json_encode(getProducts());
        }
        break;

    case 'POST':
        $data = json_decode(file_get_contents('php://input'), true);
        if (isset($data['nome'], $data['preco'], $data['quantidade'])) {
            addProduct($data['nome'], $data['preco'], $data['quantidade']);
            echo json_encode(['message' => 'Produto adicionado com sucesso!']);
        } else {
            echo json_encode(['error' => 'Nome, Preço e Quantidade são obrigatórios!']);
        }
        break;

    case 'PUT':
        $data = json_decode(file_get_contents('php://input'), true);
        if (isset($data['id'], $data['nome'], $data['preco'], $data['quantidade'])) {
            $ok = updateProduct($data['id'], $data['nome'], $data['preco'], $data['quantidade']);
            echo json_encode($ok
                ? ['message' => 'Produto atualizado com sucesso!']
                : ['error' => 'Produto não encontrado!']);
        } else {
            echo json_encode(['error' => 'ID, Nome, Preço e Quantidade são obrigatórios!']);
        }
        break;

    case 'DELETE':
        $data = json_decode(file_get_contents('php://input'), true);
        if (isset($data['id'])) {
            $ok = deleteProduct($data['id']);
            echo json_encode($ok
                ? ['message' => 'Produto deletado com sucesso!']
                : ['error' => 'Produto não encontrado!']);
        } else {
            echo json_encode(['error' => 'ID é obrigatório para deletar!']);
        }
        break;

    default:
        echo json_encode(['error' => 'Método não suportado.']);
}
?>
