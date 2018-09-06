<?php

class CuentaConvertibilidad extends CuentaCorriente
{

  protected $saldoDolares;

  function __construct($saldoDolares)
  {
    $this->$saldoDolares = 0;
  }

  public function depositarDolares(int $saldo)
  {
    $this->$saldoDolares +=$saldo;
  }

  public function extraerDolares(int $saldo)
  {
    if ($saldo <= $this->saldo) {
        $this->$saldoDolares-=$saldo;
        return $saldoDolares;
    }else {
        echo "Saldo en dolares insuficiente";
    }
  }

  public function convertirPesos(int $tasa)
  {
    $this->$saldoDolares = $this->$saldoDolares / $tasa;
    var_dump($this->$saldoDolares);
  }

  public function convertirDolares(int $tasa)
  {
    $this->$saldoDolares = $this->$saldoDolares * $tasa;
    var_dump($this->$saldoDolares);
  }
}
 ?>
