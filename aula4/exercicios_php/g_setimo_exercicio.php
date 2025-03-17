<!-- 7. Copiar os Elementos de um Vetor para Outro
Crie um vetor com 4 números e copie cada valor manualmente para um segundo vetor. -->


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
		<title> Setimo Exercício </title>
    </head>

    <body>
	    <h3> Vetor com 4 números </h3>
	    <ul>
	    <?php 
			$numeros = [1,2,3,4];
            $numeroscopia = [];
            
			for($i=0;$i < 4;$i++){
                $numeroscopia[$i] = $numeros[$i];
			};
            print_r($numeroscopia)
		?>
	    </ul>
    </body>
</html>