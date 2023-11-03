<?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $login = $_POST["login"];
        $senha = $_POST["senha"];
    }

    $_SESSION["login"] = $login;
    $_SESSION["senha"] = $senha; 
    $_SESSION["inicia_sessao"] = date('Y-m-d H:i:s'); 
    $_SESSION["ultima_requisicao"] = date('Y-m-d H:i:s'); 
    $_SESSION["tempo_sessao"] =time(); 

    header("Location: formularioDados.php"); 
    exit;
?>
