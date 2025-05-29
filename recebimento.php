<?php
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = htmlspecialchars(trim($_POST["nome_completo"]));
    $idade = (int) $_POST["idade"];
    $telefone = htmlspecialchars(trim($_POST["telefone"]));
    $palestra = htmlspecialchars($_POST["palestra"]);
    $tipo = htmlspecialchars($_POST["tipo_participante"]);

    // Aqui você poderia salvar no banco ou fazer outro tratamento.

    $mensagem = "✅ Cadastro realizado com sucesso! Obrigado, <strong>$nome</strong>.";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Cadastro</title>
  <link rel="stylesheet" href="style.css" />
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
    <nav>
      <ul>
        <li><a href="index.html">Início</a></li>
        <li><a href="cadastro.php">Cadastro de Participantes</a></li>
        <li><a href="cadastropa.html">Cadastro de Palestras</a></li>
        <li><a href="contato.html">Contato</a></li>
      </ul>
    </nav>

    <div class="logo">
      <a href="index.html">
        <img src="https://transparencia.sp.senai.br/Content/img/logo-senai.png" alt="Logo do Senai" />
      </a>
    </div>

    <header>
      <h1>Cadastro</h1>
      <p>Bem-vindo à nossa seção de cadastro de participante!</p>
    </header>

    <section>
      <form action="cadastro.php" method="post">
        <label for="nome_completo">Nome Completo:</label>
        <input type="text" id="nome_completo" name="nome_completo" required placeholder="Digite seu nome completo" />

        <br /><br />

        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required min="0" placeholder="Digite sua idade" />

        <br /><br />

        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" required placeholder="(XX) XXXXX-XXXX" />

        <br /><br />

        <label for="palestra">Selecione uma palestra/oficina:</label>
        <select id="palestra" name="palestra" required>
          <option value="">Selecione...</option>
          <option value="palestra1">Palestra 1</option>
          <option value="palestra2">Palestra 2</option>
          <option value="oficina1">Oficina 1</option>
          <option value="oficina2">Oficina 2</option>
        </select>

        <br /><br />

        <label for="tipo_participante">Você é:</label>
        <select id="tipo_participante" name="tipo_participante" required>
          <option value="">Selecione...</option>
          <option value="aluno">Aluno</option>
          <option value="pai">Pai</option>
          <option value="responsavel">Responsável</option>
        </select>

        <br /><br />

        <button type="submit">Cadastrar</button>

        <?php if (!empty($mensagem)): ?>
          <div class="mensagem-sucesso"><?= $mensagem ?></div>
        <?php endif; ?>
      </form>

      <br />
      <p>Ao clicar em "Cadastrar", você concorda com os termos e condições do evento.</p>
    </section>

    <footer>
      <p>&copy; 2025 RafaelF. Todos os direitos reservados.</p>
    </footer>
  </div>
</body>
</html>
