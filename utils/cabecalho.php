<img src="../img/banner.png" width="600px">

<div style="border: 1px">
    <a href="../index.php" target="_parent">Home</a>
    <a href="../cadastros/cad_pesq_produtos_front.php" target="_parent">Produtos</a>
    <a href="../login/login_front.php" target="_parent">Login</a>

    <?php
        session_start();

        if (isset($_SESSION['usuario']))
            echo "Usuário Logado: ".$_SESSION['usuario'][1];
    ?>
</div>