<!-- Views/criar-entrada.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Criador de Livro-Jogo</title>
</head>
<body>
    <?php if (isset($_GET['sucesso'])): ?>
        <p style="color: green;">✔ Entrada salva com sucesso!</p>
    <?php endif; ?>

    <!-- Formulário que envia os dados para o arquivo principal (Router) -->
    <form action="/index.php?action=salvar" method="POST">
        <!-- Input escondido simulando que estamos editando o Livro ID 1 -->
        <input type="hidden" name="livro_id" value="1">

        <h2>Criar Nova Entrada na História</h2>

        <label>Número da Entrada:</label><br>
        <input type="number" name="numero_entrada" required placeholder="Ex: 1"><br><br>

        <label>Conteúdo Narrativo (Texto):</label><br>
        <textarea name="conteudo" rows="5" required placeholder="Você encontra duas portas..."></textarea><br><br>

        <h3>Escolhas (Deixe em branco se for um FINAL)</h3>
        
        <div>
            <label>Texto da Escolha 1:</label>
            <input type="text" name="escolha_1_texto" placeholder="Abrir a porta esquerda">
            <label>Leva para a Entrada:</label>
            <input type="number" name="choice_1_destino" placeholder="2">
        </div><br>

        <div>
            <label>Texto da Escolha 2:</label>
            <input type="text" name="escolha_2_texto" placeholder="Abrir a porta direita">
            <label>Leva para a Entrada:</label>
            <input type="number" name="escolha_2_destino" placeholder="3">
        </div><br>

        <button type="submit">Salvar Entrada</button>
    </form>
</body>
</html>
