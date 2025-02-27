<?php
    /*$pessoa = array("Leo",22,1.75,60,true);
	//usando for
	
	for($x=0; $x <5; $x++)
	{
		echo "$pessoa[$x]<br>";
	}
	
	echo"<br>";
	//usando for trás pra frente
	
		for($x=4; $x >=0; $x--)
	{
		echo "$pessoa[$x]<br>";
	}
	
	echo"<br>";
	//usando foreach forma reduzida
	
	foreach($pessoa as $dado)
	{
		echo "$dado<br>";
	}
	
	echo"<br>";
	//usando foreach forma completa
	
	foreach($pessoa as $indice=>$dado)
	{
		echo "$indice:$dado<br>";
	}
	
	echo"<br>";
	//colocando mais um item na matriz
	$pessoa[] = "Castanho";
	
	foreach($pessoa as $dado)
	{
		echo "$dado<br>";
	}
	
	echo"<br>";
	//for contando a quantidade de indices automaticamente
	
	for($x=0; $x < count($pessoa); $x++)
	{
		echo "$pessoa[$x]<br>";
	}
	
	//definindo um array com indices nomeados
	$pessoa1 = array("Nome"=>"José", "Idade"=>31, "Altura"=>1.80, "Peso"=>75, "Casado"=>true);
	
	foreach($pessoa1 as $indice=>$dado)
	{
		echo "$indice - $dado<br>";
	}
	
	//matriz de duas dimensões
	$notas = array(
	               array("Carlos", 5.5, 6.0, 7.0),
	               array("Pedro", 10.0, 10.0, 10.0),
			       array("Fatima", 2.5, 10.0, 10.0)
				   );
	
	//usando for para mostrar dados na matriz
	for($lin=0; $lin < 3; $lin++)
	{
		echo"<br>";
		for($col=0; $col < 4; $col++)
		{
			echo $notas[$lin][$col];
		}
	}
	
	echo"<br>";
	//usando foreach para mostrar dados na matriz
	
	foreach($notas as $vetor)
	{
		echo"<br>";
		foreach($vetor as $dado)
		{
			echo"$dado<br>";
		}
	}*/
	
	$notas2 = array(
	               "Linha1"=>array("Nome"=>"Carlos", "P1"=>5.5, "P2"=>6.0, "P3"=>7.0),
	               array("Nome"=>"Pedro", "P1"=>10.0, "P2"=>10.0, "P3"=>10.0),
			       array("Nome"=>"Fatima", "P1"=>2.5, "P2"=>10.0, "P3"=>10.0)
				   );

    echo "<pre>";
	print_r($notas2); /* ou var_dump($notas2); */
	echo "</pre>";
?>