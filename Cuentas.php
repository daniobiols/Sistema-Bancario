<?php

abstract class Cuentas
{

  protected $nroCuenta;
  protected $clienteAsociado;
  protected $saldo=0;

  public function __construct($nroCuenta, $clienteAsociado)
  {
    $this->nroCuenta = $nroCuenta;
    $this->clienteAsociado = $clienteAsociado;
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
