<?php

class CuentaConvertibilidad extends CuentaCorriente
{

  protected $saldoDolares=0;

  function __construct($nroCuenta, $clienteAsociado)
  {
    parent::__construct($nroCuenta, $clienteAsociado);
  }

  public function depositarDolares(int $saldo)
  {
    $this->$saldoDolares +=$saldo;
  }

  public function extraerDolares(int $saldo)
  {
    if ($saldo <= $this->saldoDolares)
    {
      $this->$saldoDolares-=$saldo;
      return $saldoDolares;
    }else {
        echo "Saldo en dolares insuficiente";
    }
  }

  public function convertirPesos(int $tasa)
  {
    $this->$saldoDolares = $this->$saldoDolares / $tasa;
    return ($this->$saldoDolares);
  }

  public function convertirDolares(int $tasa)
  {
    $this->$saldoDolares = $this->$saldoDolares * $tasa;
    return ($this->$saldoDolares);
  }
}
 ?>
