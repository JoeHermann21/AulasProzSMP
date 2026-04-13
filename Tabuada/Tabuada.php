<link rel="stylesheet" href="style.css" />
<?php
$numero = $_POST['numero'];

echo "<h1> Tabuada do $numero </h1>";

for ($i = 1; $i <= 10; $i++) {
	$tabuada = $numero * $i;
	echo "<h4> $numero x $i = $tabuada </h4>";
}
?>