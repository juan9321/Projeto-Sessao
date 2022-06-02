<?php
    session_start();
    if ((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true ))  {
        header('location:index.php');
    }

    $logado = $_SESSION['login'];
?>

<html> 
    <head>
        <title>SESSAO LOGADA</title>
    </head>
    <body>
        <?php echo "usuario logado: " . $logado; ?>
        <form action="deslogar.php" method="POST">
            <button type="submit" name="sair">sair</button>
    </form>
</body>
</html>