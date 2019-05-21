<?php

require_once __DIR__.'/vendor/autoload.php';

use PC\Calculadora;

$operacion = $_GET['operacion'] ?? 'suma';
$campo1 = $_GET['campo1'] ?? 0;
$campo2 = $_GET['campo2'] ?? 0;

$cal = Calculadora::create();

$resultado = 'El resultado';

try {
    $val = $cal->{$operacion}($campo1, $campo2);
    $resultado .= " de la $operacion es $val";
} catch(\Exception $e) {
    $resultado = 'Operación no soportada.';
}

echo $resultado;
