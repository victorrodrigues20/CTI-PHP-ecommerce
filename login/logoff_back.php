<?php
    session_start();

    unset($usuario);
    unset($_SESSION['usuario']);

    session_destroy();

    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=../index.php'>";
?>