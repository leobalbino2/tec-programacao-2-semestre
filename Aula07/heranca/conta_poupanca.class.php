<?php
    final class contaPoupanca extends Conta // o final indica que a classe filha não pode ter filhas
    {
        public function __construct(private int $aniversario = 0, string $agencia, string $conta, float $saldo) 
        {
            parent::__construct($agencia, $conta, $saldo);
        }

        public function sacar($valor) {
            $data = explode("/", date("Y/m/d"));
            if ($data[2] > $this->aniversario && $this->saldo >= $valor) {
                parent::retirar($valor);
            } else {
                echo "Problema no saque";
            }
        }

        // Métodos
        public function getAniversario() {
            return $this->aniversario;
        }

        public function setAniversario($aniversario) {
            $this->aniversario = $aniversario;
        }
    }
?>