<?php
    final class contaCorrente extends Conta // o final indica que a classe filha não pode ter filhas
    {
        public function __construct(private float $limite = 0, string $agencia, string $conta, float $saldo) 
        {
            parent::__construct($agencia, $conta, $saldo);
        }

        public function sacar($valor) {
            if ($this->saldo + $this->limite >= $valor) {
                parent::retirar($valor);
            } else {
                echo "Saldo Insuficiente";
            }
        }

        // Métodos
        public function getLimite() {
            return $this->limite;
        }

        public function setLimite($limite) {
            $this->limite = $limite;
        }
    }
?>