<?php
    class contaPoupanca extends Conta 
    {
        public function __construct(private int $aniversario = 0, string $agencia, string $conta, float $saldo) 
        {
            parent::__construct($agencia, $conta, $saldo);
        }

        // Métodos
        public function getAniversario() {
            return $this->aniversario;
        }

        public function setAniversario($aniversario) {
            $this->aniversario = $aniversario;
        }
    }