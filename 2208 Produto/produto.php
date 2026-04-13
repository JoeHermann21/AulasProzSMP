<?php
ini_set("display_errors", 1);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$conexao = mysqli_connect('127.0.0.1', 'root', '', 'produto');
	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$quantidade = $_POST['quantidade'];
	$query = 
	"insert into produto (nome, preco, quantidade, total) 
	values ('$nome', $preco, $quantidade, $preco * $quantidade);";
	$result = mysqli_query($conexao, $query);

	echo "Cadastrado com sucesso <br>";
	echo "Nome do produto: $nome <br>";
	echo "Preço do produto: R$ $preco <br>";
	echo "Quantidade do produto: $quantidade <br>";
	echo "Valor total: R$ " . $preco * $quantidade;
}
?>