<style>
    body {
        background-color: #add8e6;
        font-family: Arial;
        width: 25%;
        margin-left: auto;
        margin-right: auto;
    }

    h4 {
        color: black;
        text-align: center;
    }
</style>

<?php

$login = "Andre2403";
$senha = "Abcd1234!";

if ($_POST["login"] == $login and $_POST["senha"] == $senha) 
    {
        echo "<h4> Login efetuado com sucesso! </h4>";
    } 
    else 
    {
        echo "<h4> Login ou senha inválidos! </h4>";
    }

?>