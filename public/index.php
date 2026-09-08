<?php
require __DIR__ . '/../vendor/autoload.php';
use App\Cajero;
use App\herencia\CuentaAhorros;


// Crear una cuenta de ahorros
$cuenta = new CuentaAhorros(

    "85796548712",
    "Fernando",
    1000,
    "Cuenta de Ahorros"
);

// Crear el cajero
$cajero = new Cajero($cuenta);

// Variable para controlar el menú
$opcion = 0;

// Mientras la opción sea diferente de 5
while ($opcion != 5) {

    echo PHP_EOL;
    echo "================================" . PHP_EOL;
    echo "       CAJERO AUTOMÁTICO" . PHP_EOL;
    echo "================================" . PHP_EOL;

    echo "Titular: " . $cuenta->titular . PHP_EOL;
    echo "Cuenta: " . $cuenta->getNumeroCuenta() . PHP_EOL;
    echo "--------------------------------" . PHP_EOL;

    echo "1. Consultar saldo" . PHP_EOL;
    echo "2. Depositar dinero" . PHP_EOL;
    echo "3. Retirar dinero" . PHP_EOL;
    echo "4. Mostrar datos de cuenta" . PHP_EOL;
    echo "5. Salir" . PHP_EOL;
    echo "--------------------------------" . PHP_EOL;

    $opcion = (int) readline("Seleccione una opción: ");

    switch ($opcion) {

        case 1:

            $cajero->consultarSaldo();

            break;


        case 2:

            $monto = (float) readline("Ingrese el monto a depositar: S/ ");

            $cajero->realizarDeposito($monto);

            break;


        case 3:

            $monto = (float) readline("Ingrese el monto a retirar: S/ ");

            $cajero->realizarRetiro($monto);

            break;


        case 4:

            $cuenta->mostrarDatos();

            break;


        case 5:

            echo PHP_EOL;
            echo "Gracias por utilizar el cajero automático." . PHP_EOL;
            echo "¡Hasta luego!" . PHP_EOL;

            break;


        default:

            echo PHP_EOL;
            echo "Opción no válida. Intente nuevamente." . PHP_EOL;

            break;
    }
}

?>