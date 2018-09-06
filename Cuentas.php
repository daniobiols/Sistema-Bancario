<?php

require_once('Clientes.php');
require_once('Individual.php');

abstract class Cuentas
{

  protected $nroCuenta;
  protected $clienteAsociado;
  protected $saldo;

  public function __construct($nroCuenta, Cliente $clienteAsociado)
  {
    $this->nroCuenta = $nroCuenta;
    $this->clienteAsociado = $clienteAsociado;
    $this->saldo = 0;
  }

  public function depositar(int $saldo)
  {
    $this->saldo = $saldo+=$saldo;
  }

  public function extraer(int $saldo)
  {
    if ($saldo <= $this->saldo)
    {
        $this->saldo-=$saldo;
        return $saldo;
    }
  }

}
 ?>
