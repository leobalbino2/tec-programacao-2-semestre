<?php
    class Conta 
    {
        public function __construct(protected string $agencia = "", protected string $conta = "", protected float $saldo = 0.00) {}
        
		// Atributos privados devem ter um get e set, caso contrário o atributo não recebe dados
		// Atributos protegidos só podem ser acessados pela própria classe e as classes filhas
		
        // Métodos
        public function getAgencia() {
            return $this->agencia;
        }
        public function setAgencia($agencia) {
            $this->agencia = $agencia;
        }

        public function getConta() {
            return $this->conta;
        }
        public function setConta($conta) {
            $this->conta = $conta;
        }

        public function getSaldo() {
            return $this->saldo;
        }
        public function setSaldo($saldo) {
            $this->saldo = $saldo;
        }
    }
?>