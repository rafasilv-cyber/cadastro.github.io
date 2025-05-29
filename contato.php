<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apresentação do Evento</title> <link rel="stylesheet" href="style.css">
</head>
<body>
    
   <div class="container">
    <div class="logo">
        <a href="index.html">
        <img  src="https://i0.wp.com/innovationweeksjc.com.br/wp-content/uploads/2024/08/Logo_SENAI.png?fit=600%2C400&ssl=1" alt="Logo do Senai">
        </a>

    <nav>
        <ul>
            <li><a href="index.html">Início</a></li>
            <li><a href="cadastro.php">Cadastro de Participantes</a></li>
            <li><a href="cadastropa.php">Cadastro de Palestras</a></li>
            <li><a href="contato.php">Contato</a></li>
        </ul>
    </nav>

    <header>
        <h1>Feira Tecnológica</h1>
        <p>Ainda falta algo?</p>
        <p>Você pode entrar em contato conosco para mais informações ou sugestões!</p>
    </header>

<section>

    <h2>Formulário de Contato</h2>
    <form action="enviar_contato.php" method="post">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required placeholder="Digite seu e-mail">
        <br><br>

        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" required placeholder="(XX) XXXXX-XXXX" pattern="\(\d{2}\)\s?\d{4,5}-\d{4}">
        <br><br>

        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco" required placeholder="Rua, Avenida, etc.">
        <br><br>

        <label for="numero">Número:</label>
        <input type="number" id="numero" name="numero" required placeholder="Número da residência">
        <br><br>

        <label for="bairro">Bairro:</label>
        <input type="text" id="bairro" name="bairro" required placeholder="Bairro">
        <br><br>

        <label for="cidade">Cidade:</label>
        <input type="text" id="cidade" name="cidade" required placeholder="Cidade">
        <br><br>

        <label for="cep">CEP:</label>
        <input type="text" id="cep" name="cep" required placeholder="XXXXX-XXX" pattern="\d{5}-\d{3}">
        <br><br>

        <button type="submit">Enviar</button>
    </form>

</section>
    
<aside></aside>

<footer>
    <p>&copy; 2025 RafaelF. Todos os direitos reservados.</p>
</div> 

</body>
</html>