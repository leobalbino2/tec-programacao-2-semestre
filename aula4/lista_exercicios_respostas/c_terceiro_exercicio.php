<!--3. Ordenação Manual de um Vetor
Crie um vetor de 3 números e ordene-os manualmente (sem usar sort()), comparando e trocando os valores, se necessário. -->

<!-- Dois loops, um para selecionar o índice por ordem e o outro para compara-lo -->

<!-- ----------------------- Não consegui finalizar ----------------------- -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Terceiro Exercício</title>
    </head>
    <body>
        <h3>Ordenando Números</h3>
        <h3>
        <?php 
            $nums = array(10, 3, 7);
            $ordenado = $nums; 

            for ($i = 0; $i < count($ordenado) - 1; $i++) {
                for ($j = $i + 1; $j < count($ordenado); $j++) {
                    if ($ordenado[$i] > $ordenado[$j]) {
                        $temp = $ordenado[$i];
                        $ordenado[$i] = $ordenado[$j];
                        $ordenado[$j] = $temp;
                    }
                }
            }

            echo implode(", ", $ordenado);
        ?>
        </h3>
    </body>
</html>