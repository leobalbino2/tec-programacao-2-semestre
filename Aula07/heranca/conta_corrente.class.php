<?php
    class contaCorrente extends Conta
    {
        public function __construct(private float $limite = 0, string $agencia, string $conta, float $saldo) 
        {
            parent::__construct($agencia, $conta, $saldo);
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