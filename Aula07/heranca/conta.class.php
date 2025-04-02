<?php
    abstract class Conta
    {
        public function __construct(protected string $agencia = "", protected string $conta = "", protected float $saldo = 0.00) {}

        public function retirar($valor) {
            if ($valor > 0 && $this->saldo >= $valor) {
                $this->saldo -= $valor;
            } else {
                echo "Valor inválido ou saldo insuficiente.";
            }
        }

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