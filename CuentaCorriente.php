<?php

class CuentaCorriente extends Cuentas
{

  protected $giroDesc;

  public function __construct($giroDesc, $nroCuenta, $clienteAsociado)
  {
    $this->giroDesc = $giroDesc;
    parent::__construct($nroCuenta, $clienteAsociado);
  }

  public function depositarCheque (Cheque $cheque)
  {
    $this->cheque = $cheque;
    return $this->saldo += $this->monto;
  }

  public function extraer (int $saldo)
  {
    if ($saldo > $this->saldo)
    {
      $this->saldo = $this->saldo + $giroDesc;
      if ($saldo > $this->saldo)
      {
        echo "Saldo insuficiente";
      }else {
        $this->saldo-=$saldo;
      }
    }
  }
}
 ?>
