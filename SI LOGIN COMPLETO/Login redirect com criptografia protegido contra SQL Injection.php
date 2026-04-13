<style>
    body {
        background-color: #317109;
        text-align: center;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-weight: bold;
        width: 80%;
        margin-left: auto;
        margin-right: auto;
    }

    a {
        color: inherit;
    }
</style>

<?php
ini_set("display_errors", 1);
if (isset($_POST['email']) && isset($_POST['senha'])) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $conexao = mysqli_connect('127.0.0.1', 'root', '');
        mysqli_select_db($conexao, 'login');

        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $senhaCriptografada = sha1($senha);

        $query = "select email, senha from usuario where email='$email' 
        and senha='$senhaCriptografada'";

        $result = mysqli_query($conexao, $query);
        $rows = mysqli_fetch_array($result);

        $stmt = $conexao->prepare("SELECT email, senha, perfil 
        FROM usuario WHERE email = ? AND senha = ?");
        $stmt->bind_param("ss", $email, $senhaCriptografada);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($row = $result->fetch_assoc()) {
            echo "<br> Logado com sucesso";
            echo "<br> Perfil de acesso: " . htmlspecialchars($row['perfil']);
            header("Refresh: 2; URL=https://www.google.com");
            exit;
        } else {
            echo "<br> Não logou, tente novamente!";
            echo "<a href='Login.html'> <br><br> Voltar à página inicial </a>";
        }

        $stmt->close();
        $conexao->close();
    }
} ?>