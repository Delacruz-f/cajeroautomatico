<?php
namespace App\herencia;

use App\interface\OperacionBancaria;

class Cuenta implements OperacionBancaria
{
    // Atributos
    private $numeroCuenta;
    protected $saldo;
    public $titular;

    // Constructor
    public function __construct($numeroCuenta, $titular, $saldo)
    {
        $this->numeroCuenta = $numeroCuenta;
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    // Getter del número de cuenta
    public function getNumeroCuenta()
    {
        return $this->numeroCuenta;
    }

    // Setter del número de cuenta
    public function setNumeroCuenta($numeroCuenta)
    {
        $this->numeroCuenta = $numeroCuenta;
    }

    // Getter del saldo
    public function getSaldo()
    {
        return $this->saldo;
    }

    // Setter del saldo
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    // Consultar saldo
    public function consultarSaldo()
    {
        return $this->saldo;
    }

    // Depositar dinero
    public function depositar($monto)
    {
        if ($monto > 0) {

            $this->saldo = $this->saldo + $monto;

            echo "Depósito realizado correctamente." . PHP_EOL;
            echo "Nuevo saldo: S/ " . $this->saldo . PHP_EOL;

        } else {

            echo "El monto debe ser mayor que 0." . PHP_EOL;
        }
    }
    public function retirar($monto)
    {
        if ($monto <= 0) {

            echo "El monto debe ser mayor que 0." . PHP_EOL;

        } elseif ($monto > $this->saldo) {

            echo "Saldo insuficiente." . PHP_EOL;

        } else {

            $this->saldo = $this->saldo - $monto;

            echo "Retiro realizado correctamente." . PHP_EOL;
            echo "Nuevo saldo: S/ " . $this->saldo . PHP_EOL;
        }
    }
}

?>