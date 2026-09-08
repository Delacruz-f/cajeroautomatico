<?php
namespace App\herencia;
use App\herencia\Cuenta;


class CuentaAhorros extends Cuenta
{
    private $tipoCuenta;

    // Constructor
    public function __construct($numeroCuenta, $titular, $saldo, $tipoCuenta)
    {
        parent::__construct($numeroCuenta, $titular, $saldo);

        $this->tipoCuenta = $tipoCuenta;
    }

    // Getter
    public function getTipoCuenta()
    {
        return $this->tipoCuenta;
    }

    // Setter
    public function setTipoCuenta($tipoCuenta)
    {
        $this->tipoCuenta = $tipoCuenta;
    }

    // Método para mostrar los datos
    public function mostrarDatos()
    {
        echo PHP_EOL;
        echo "================================" . PHP_EOL;
        echo "        DATOS DE LA CUENTA" . PHP_EOL;
        echo "================================" . PHP_EOL;

        echo "Titular       : " . $this->titular . PHP_EOL;
        echo "Número de cuenta: " . $this->getNumeroCuenta() . PHP_EOL;
        echo "Tipo de cuenta: " . $this->tipoCuenta . PHP_EOL;
        echo "Saldo         : S/ " . $this->saldo . PHP_EOL;

        echo "================================" . PHP_EOL;
    }
}

?>