<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <form action="processa.php" method="post">
    <h3>Cadastro</h3>

        <div>
            <label for="usuario">Usuário</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha">
        </div>
        <div class="div-buttons">
            <button type="submit">Cadastrar</button>
        </div>
    </form>

</body>
</html>