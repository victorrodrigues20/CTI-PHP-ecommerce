<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Login do Usuário</title>
</head>
<body>
    <link rel="stylesheet" href="../css/cabecalho.css">
    <iframe src="../utils/cabecalho.php" title="cabecalho" frameBorder="0" 
            width="100%" scrolling="no" allowfullscreen>
    </iframe>

    <h1>Login do Usuário</h1>

    <!-- FORM do LOGIN -->
    <form method="post" 
          action="login_back.php">
        Usuário:
        <input type="text" value="" 
               placeholder="Digite seu usuário"
               name="user">
        Senha:
        <input type="password" value=""
               placeholder="Digite sua senha"
               name="pass">

        <input type="submit" value="Enviar">
    </form>

    <a href="logoff_back.php">Logoff</a>
</body>
</html>