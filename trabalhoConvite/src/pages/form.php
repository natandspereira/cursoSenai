<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // 1. Processamento do upload de arquivo
    if (isset($_FILES['fotoDeCapa'])) {
        // O diretório onde o arquivo será armazenado
        $diretorioDestino = "uploads/";

        // Nome do arquivo enviado
        $nomeArquivo = $_FILES['fotoDeCapa']['name'];

        // Caminho completo para o arquivo de destino
        $caminhoDestino = $diretorioDestino . basename($nomeArquivo);

        // Verificar se o arquivo foi enviado com sucesso
        if (move_uploaded_file($_FILES['fotoDeCapa']['tmp_name'], $caminhoDestino)) {
            echo "O arquivo foi enviado com sucesso!<br>";
        } else {
            echo "Houve um erro no envio do arquivo.<br>";
        }

        // Exibindo a foto de capa
        if ($_FILES['fotoDeCapa']['error'] == 0) {
            echo "<p><strong>Foto de Capa:</strong> " . htmlspecialchars($nomeArquivo) . "</p>";
        } else {
            echo "<p><strong>Erro ao carregar foto de capa.</strong></p>";
        }
    }

    // 2. Exibindo os valores dos inputs
    echo "<h2>Dados do Evento</h2>";
    echo "<p><strong>Título:</strong> " . htmlspecialchars($_POST['title']) . "</p>";
    echo "<p><strong>Início:</strong> " . htmlspecialchars($_POST['start']) . "</p>";
    echo "<p><strong>Fim:</strong> " . htmlspecialchars($_POST['end']) . "</p>";
    echo "<p><strong>Tipo:</strong> " . htmlspecialchars($_POST['type']) . "</p>";
    echo "<p><strong>Local:</strong> " . htmlspecialchars($_POST['location']) . "</p>";
    echo "<p><strong>Descrição:</strong> " . htmlspecialchars($_POST['descriptionLabel']) . "</p>";
    echo "<p><strong>Cor selecionada:</strong> " . htmlspecialchars($_POST['color']) . "</p>";

    // 3. Exibindo os temas selecionados
    $temas = ["aniversario", "infantil", "formatura", "casamento", "chaDeBebe", "chaDePanela", "carnaval", "pascoa", "saoJoao", "haloween", "natal", "outro"];
    foreach ($temas as $tema) {
        if (isset($_POST[$tema])) {
            echo "<p><strong>Tema selecionado:</strong> " . ucfirst($tema) . "</p>";
        }
    }

    // 4. Exibindo os dados de contato
    echo "<p><strong>Nome:</strong> " . htmlspecialchars($_POST['name']) . "</p>";
    echo "<p><strong>Email:</strong> " . htmlspecialchars($_POST['email']) . "</p>";
    echo "<p><strong>Telefone:</strong> " . htmlspecialchars($_POST['telefone']) . "</p>";

    // 5. Exibindo os checkboxes (Termos e condições)
    echo "<p><strong>Aceitou os Termos e Condições:</strong> " . (isset($_POST['termo']) ? 'Sim' : 'Não') . "</p>";
    echo "<p><strong>Aceitou receber atualizações e promoções por e-mail:</strong> " . (isset($_POST['emailPromo']) ? 'Sim' : 'Não') . "</p>";
    echo "<p><strong>Aceitou receber atualizações e promoções por SMS:</strong> " . (isset($_POST['smsPromo']) ? 'Sim' : 'Não') . "</p>";
}
?>
