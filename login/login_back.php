<?php
    include "../utils/conexao.php"; 

    $user = $_POST['user'];
    $pass = md5($_POST['pass']);

    $sql="SELECT * FROM usuarios WHERE usuario = '$user' and senha='$pass';";

    $resultado=pg_query($conecta,$sql);
    $qtde=pg_num_rows($resultado);

    if ( $qtde == 0 )
    {
        echo '<script language="javascript">';
        echo "alert('Usuário não encontrado!')";
        echo '</script>';	

        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=login_front.php'>";
        exit;
    }
    else
    {
        session_start();
        $usuario = pg_fetch_array($resultado);
        $_SESSION['usuario'] = $usuario;

        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../index.php'>";
    }

    // Fecha a conexão com o PostgreSQL
    pg_close($conecta);
?>