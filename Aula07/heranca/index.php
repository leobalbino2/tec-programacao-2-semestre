<?php 
    require_once "conta.class.php"; 
    require_once "conta_poupanca.class.php";
    require_once "conta_corrente.class.php"; 
    
    // Criando uma instância de contaCorrente
    $poupanca = new contaCorrente(12, "123-4", "3456-7", 1000);
    
	// Criando uma instância de contaPoupanca
    $aniversario = new contaPoupanca(12032027, "123-4", "3456-7", 1000);
	
	echo "<pre>";
    var_dump($poupanca);
    echo "</pre>";    
	
	echo "<pre>";
    var_dump($aniversario);
    echo "</pre>";   
?>