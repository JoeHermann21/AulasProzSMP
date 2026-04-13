<style>
			body
			{
				background-color:#ac6730;
				text-align: center;
				font-family: Verdana;
				
			}
			h1,h2,h3,td
			{				
				color: white;				
			}
            table
            {
                width: 80%;
                margin-left: auto;
                margin-right: auto;
            }
</style> 
         
<nav>	<table border="1">	
	<tr>
		<td>Itens</td>
		<td>Homens</td>
		<td>Mulheres</td>
		<td>Crianças</td>
	</tr>
	<tr>
		<td>Carne bovina</td>
		<td>500g</td>
		<td>300g</td>
		<td>200g</td>
	</tr>
	<tr>
		<td>Frango</td>
		<td>200g</td>
		<td>200g</td>
		<td>100g</td>
	</tr>
	<tr>
		<td>Linguiça</td>
		<td>200g</td>
		<td>200g</td>
		<td>200g</td>
	</tr>
	<tr>
		<td>Refrigerante</td>
		<td>300ml</td>
		<td>400ml</td>
		<td>200ml</td>
	</tr>
	<tr>
		<td>Cerveja</td>
		<td>800ml</td>
		<td>500ml</td>
		<td> - </td>
	</tr>
	</table> </nav> 


<?php       
  		$homem = 1;
		$mulher = 1;
		$crianca = 5;
		
	function totalHomem($homem){
		$carneBovina = 500*$homem;
		$frango = 200*$homem;
		$linguica = 200*$homem;
		$refri = 300*$homem;
		$cerveja = 800*$homem;		
				
		return "<p>Carne bovina: $carneBovina g <br> Frango: $frango g <br> 
        Linguiça: $linguica g <br> Refri: $refri ml <br> Cerveja: $cerveja ml";
	}	
	
	function totalMulher($mulher){
		$carneBovina = 300*$mulher;
		$frango = 200*$mulher;
		$linguica = 200*$mulher;
		$refri = 400*$mulher;
		$cerveja = 500*$mulher;
	
		return "<p>Carne bovina: $carneBovina g <br> Frango: $frango g <br> 
        Linguiça: $linguica g <br> Refri: $refri ml <br> Cerveja: $cerveja ml";
	}
	function totalCrianca($crianca){
		$carneBovina = 200*$crianca;
		$frango = 100*$crianca;
		$linguica = 200*$crianca;
		$refri = 200*$crianca;
	
		return "<p>Carne bovina: $carneBovina g <br> Frango: $frango g <br>
        Linguiça: $linguica g <br> Refri: $refri ml";
	}	
	echo "<h1>Quantidades necessárias:</h1>";
	echo "<h2>Total de homens: $homem </h2><h3>".totalHomem($homem)."</h3>";
	echo "<h2>Total de mulheres: $mulher </h2><h3>".totalMulher($mulher)."</h3>";
	echo "<h2>Total de crianças: $crianca </h2><h3>".totalCrianca($crianca)."</h3>";
 ?>

