<?php
    require_once "conta.class.php"; 
    require_once "conta_poupanca.class.php";
    require_once "conta_corrente.class.php"; 
    
    // Criando uma instância de contaPoupanca
    $poupanca = new contaPoupanca(12, "123-4", "3456-7", 1000);
    
    $poupanca->sacar(500);
    echo "Saldo: {$poupanca->getSaldo()}</br>";
    
    // Criando uma instância de contaCorrente
    $corrente = new contaCorrente(3000, "235-9", "76849-2", 5000);
    
    // Teste de saque
    $corrente->sacar(2000);
    echo "Saldo da Conta Corrente: {$corrente->getSaldo()}</br>";
?>