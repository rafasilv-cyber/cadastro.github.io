<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title> <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="container">
    <nav>
        <ul>
            <li><a href="index.html">Início</a></li>
            <li><a href="cadastro.php">Cadastro de Participantes</a></li>
            <li><a href="cadastropa.html">Cadastro de Palestras</a></li>
            <li><a href="contato.html">Contato</a></li>
            <li><a href="mapa.html">Mapa do Evento</a></li>
        </ul>
    </nav>
    
    <div class="logo">
        <a href="index.html">
        <img src="https://transparencia.sp.senai.br/Content/img/logo-senai.png" alt="Logo do Senai">
        </a>
    </div>

    <header>
        <h1>Cadastro</h1>
        <p>Bem-vindo à a nossa seção de cadastro!</p>
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
    </form>
<br>
    <p>Ao clicar em "Cadastrar", você concorda com os termos e condições do evento.</p>

</section>

<aside></aside>

<footer>
    <p>&copy; 2025 RafaelF. Todos os direitos reservados.</p>
</div> 
</body>
</html>