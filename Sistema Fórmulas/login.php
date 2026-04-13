<link rel="stylesheet" type="text/css" href="style.css"> 
<?php

$login = "Andre2403";
$senha = "Abcd1234!";

if ($_POST["login"] == $login and $_POST["senha"] == $senha) 
    {
        echo "<h4> Seja bem-vindo(a), $login </h4>";
        header (header: "Refresh: 2; URL=formulas.html");
    } 
    else 
    {
        echo "<h4> Login ou senha inválidos! </h4>";
        header (header: "Refresh: 2; URL=index.html");
    }
?>