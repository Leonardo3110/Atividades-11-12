<?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username === "leonardo" && $password === "123456") {
            $_SESSION["leonardo"] = $username;
            $_SESSION["login_time"] = time();
            $_SESSION["last_request_time"] = time();
            
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Credenciais inválidas. Tente novamente.";
        }
    }
?>