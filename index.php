<?php

echo "<pre>";

require_once('Clientes.php');
require_once('Individual.php');
require_once('Cuentas.php');
require_once('CajaDeAhorro.php');
require_once('CuentaCorriente.php');
require_once('CuentaConvertibilidad.php');


$daniela = new Individual ("Daniela", "Obiols", 31504312, 909);

$cajaDeAhorro = new CajaDeAhorro (5, 1001, $daniela);
$cuentaCorriente = new CuentaCorriente (3000, 1002, $daniela);
$cuentaDeConvertibilidad = new CuentaConvertibilidad (1003, $daniela);

var_dump($daniela);
echo "<br>";

var_dump($cajaDeAhorro);
echo "<br>";

var_dump($cuentaCorriente);
echo "<br>";

var_dump($cuentaDeConvertibilidad);
echo "<br>";

 ?>
