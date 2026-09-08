<?php
namespace App;

class Cajero
{
    // Atributo privado
    private $cuenta;

    // Constructor
    public function __construct($cuenta)
    {
        $this->cuenta = $cuenta;
    }

    // Método para consultar saldo
    public function consultarSaldo()
    {
        echo PHP_EOL;
        echo "================================" . PHP_EOL;
        echo "        CONSULTA DE SALDO" . PHP_EOL;
        echo "================================" . PHP_EOL;

        echo "Saldo disponible: S/ "
            . $this->cuenta->consultarSaldo() . PHP_EOL;

        echo "================================" . PHP_EOL;
    }

    // Método para realizar depósito
    public function realizarDeposito($monto)
    {
        echo PHP_EOL;
        echo "================================" . PHP_EOL;
        echo "             DEPÓSITO" . PHP_EOL;
        echo "================================" . PHP_EOL;

        $this->cuenta->depositar($monto);

        echo "================================" . PHP_EOL;
    }

    // Método para realizar retiro
    public function realizarRetiro($monto)
    {
        echo PHP_EOL;
        echo "================================" . PHP_EOL;
        echo "              RETIRO" . PHP_EOL;
        echo "================================" . PHP_EOL;

        $this->cuenta->retirar($monto);

        echo "================================" . PHP_EOL;
    }

    // Método para mostrar los datos de la cuenta
    public function mostrarDatos()
    {
        echo PHP_EOL;
        echo "================================" . PHP_EOL;
        echo "        DATOS DE LA CUENTA" . PHP_EOL;
        echo "================================" . PHP_EOL;

        echo "Titular         : " . $this->cuenta->titular . PHP_EOL;
        echo "Número de cuenta: " . $this->cuenta->getNumeroCuenta() . PHP_EOL;
        echo "Tipo de cuenta  : " . $this->cuenta->getTipoCuenta() . PHP_EOL;
        echo "Saldo           : S/ " . $this->cuenta->getSaldo() . PHP_EOL;

        echo "================================" . PHP_EOL;
    }
}

?>