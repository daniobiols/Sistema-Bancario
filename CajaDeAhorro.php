<?php

class CajaDeAhorro extends Cuentas
{
  protected $tasaInt;

  public function __construct($tasaInt, $nroCuenta, $clienteAsociado)
  {
    $this->tasaInt = $tasaInt;
    parent::__construct($nroCuenta, $clienteAsociado);
  }

  public function extraer(int $saldo)
  {
    if ($saldo <= $this->saldo)
    {
        $this->saldo-=$saldo;
        return $saldo;
    }else {
        echo "No cuentas con esa cantidad de dinero";
    }
  }

  public function cobrarInt(int $tasaInt)
  {
    $this->saldo = $this->saldo* $tasaInt;
    return $this->saldo = $this->saldo / 100;
  }
}

 ?>
