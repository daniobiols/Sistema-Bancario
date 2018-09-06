<?php

echo "<pre>";

require_once('Clientes.php');
require_once('Individual.php');
require_once('Empresa.php');
require_once('Cuentas.php');
require_once('CajaDeAhorro.php');
require_once('CuentaCorriente.php');
require_once('CuentaConvertibilidad.php');
require_once('Cheque.php');


$daniela = new Individual ("Daniela", "Obiols", 31504312, 909);

$fid = new Empresa ('FID', 3568795003, 1001);

$cajaDeAhorro = new CajaDeAhorro (5, 1001, $daniela);

$cuentaCorriente = new CuentaCorriente (1002, $daniela);

$cuentaDolares = new CuentaConvertibilidad (1003, $daniela);

$miCheque = new Cheque (4000, "Banco HSBC");


echo "<===========FUNCIONES=================>";
echo "<br>";
echo "<br>";

echo "Funcion Identificar";
echo "<br>";
echo "-------------------";
echo "<br>";
echo $daniela->identificar();
echo "<br>";
echo "<br>";
echo $fid->identificar();
echo "<br>";
echo "<br>";

echo "===================================";
echo "<br>";
echo "===========CAJA DE AHORRO==========";
echo "<br>";
echo "===================================";
echo "<br>";
echo $cajaDeAhorro->depositar(5000);
echo "<br>";
echo $cajaDeAhorro->depositar(15000);
echo "<br>";
echo $cajaDeAhorro->extraer(500);
echo "<br>";
echo $cajaDeAhorro->extraer(1000);
echo "<br>";
echo $cajaDeAhorro->cobrarInt();
echo "<br>";
echo "<br>";
echo "<br>";
echo "===================================";
echo "<br>";
echo "===========CUENTA CORRIENTE========";
echo "<br>";
echo "===================================";
echo "<br>";
echo "<br>";
echo $cuentaCorriente->depositar(7000);
echo "<br>";
echo $cuentaCorriente->depositar(3000);
echo "<br>";
echo $cuentaCorriente->Extraer(11000);
echo "<br>";
echo $cuentaCorriente->depositarCheque($miCheque);
echo "<br>";
echo "<br>";
echo "<br>";
echo "===================================";
echo "<br>";
echo "======CUENTA DE CONVERTIBILIDAD====";
echo "<br>";
echo "===================================";
echo "<br>";
echo "<br>";
echo $cuentaDolares->depositarDolares(10000);
echo "<br>";
// var_dump($cuentaDolares);
echo $cuentaDolares->extraerDolares(200);
echo "<br>";
echo $cuentaDolares->convertirPesos(40);
echo "<br>";
echo "<br>";
echo $cuentaDolares->convertirDolares(40);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<===========OBJETOS=================>";
echo "<br>";
echo "<br>";

var_dump($daniela);
echo "<br>";

var_dump($fid);
echo "<br>";

var_dump($cajaDeAhorro);
echo "<br>";

var_dump($cuentaCorriente);
echo "<br>";

var_dump($cuentaDeConvertibilidad);
echo "<br>";

var_dump($miCheque);

 ?>
