<?php
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nomePalestra = htmlspecialchars(trim($_POST["nomePalestra"]));
    $descricao = htmlspecialchars(trim($_POST["descricao"]));
    $palestrante = htmlspecialchars(trim($_POST["palestrante"]));
    $horario = htmlspecialchars($_POST["horario"]);

    $mensagem = "✅ A palestra <strong>$nomePalestra</strong> foi cadastrada com sucesso!";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .mensagem-sucesso {
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            margin-top: 15px;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
        }
    </style>
</head>
<body>
   <div class="container">
    
    <div class="logo">
        <a href="index.html">
        <img src="https://transparencia.sp.senai.br/Content/img/logo-senai.png" alt="Logo do Senai">
        </a>
    </div>
    
<nav>
        <ul>
            <li><a href="index.html">Início</a></li>
            <li><a href="cadastro.php">Cadastro de Participantes</a></li>
            <li><a href="cadastropa.php">Cadastro de Palestras</a></li>
            <li><a href="contato.php">Contato</a></li>
        </ul>
    </nav>
    <br>
    <header>
        <h1>Cadastro</h1>
        <p>Bem-vindo à nossa seção de cadastro!</p>
    </header>

<section>
    <form action="cadastropa.php" method="post" class="form-palestra">
        <label for="nomePalestra">Nome da Palestra:</label>
        <input type="text" id="nomePalestra" name="nomePalestra" required>
        <br><br>
        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao" rows="4" required></textarea>
        <br><br>
        <label for="palestrante">Palestrante:</label>
        <input type="text" id="palestrante" name="palestrante" required>
        <br><br>
        <label for="horario">Horário:</label>
        <input type="datetime-local" id="horario" name="horario" required>
        <br><br>
        <button type="submit">Cadastrar</button>

        <?php if (!empty($mensagem)): ?>
            <div class="mensagem-sucesso"><?= $mensagem ?></div>
        <?php endif; ?>
    </form>
<br>
    <p>Ao clicar em "Cadastrar", você concorda com os termos e condições do evento.</p>

</section>

<aside></aside>

<footer>
    <p>&copy; 2025 RafaelF. Todos os direitos reservados.</p>
</footer>

</div> 
</body>
</html>