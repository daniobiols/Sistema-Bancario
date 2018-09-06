<?php

class CuentaConvertibilidad extends CuentaCorriente
{

  protected $saldoDolares=0;

  function __construct($nroCuenta, $clienteAsociado)
  {
    parent::__construct($nroCuenta, $clienteAsociado);
  }

  public function informarDolares ()
  {
    return "Saldo: USD ".$this->saldoDolares;
  }

  public function depositarDolares(int $saldo)
  {
    echo $this->informarDolares()."<br>";
    $this->saldoDolares+=$saldo;

    return ("Deposito: $".$saldo."<br>"."Cuenta: ".$this->nroCuenta."<br>"."Saldo Disponible: USD ".$this->saldoDolares)."<br>";
  }

  public function extraerDolares(int $saldo)
  {
    echo $this->informarDolares()."<br>";

    if ($this->saldoDolares >= $saldo)
    {
      $this->saldoDolares -= $saldo;
      return ("Extraccion: $".$saldo."<br>"."Cuenta: ".$this->nroCuenta."<br>"."Saldo Disponible: USD ".$this->saldoDolares)."<br>";
    }else{
      return ("Saldo insuficiente");
    }
  }

  public function convertirPesos(int $tasa)
  {
    echo $this->informarDolares()."<br>";
    $this->saldoDolares = $this->saldoDolares / $tasa;
    return "Tasa cambiaria: $".$tasa."<br>"."Dolares Total: USD ".$this->saldoDolares;
  }

  public function convertirDolares(int $tasa)
  {
    echo $this->informarDolares()."<br>";
    $this->saldoDolares = $this->saldoDolares * $tasa;
    return "Tasa cambiaria: $".$tasa."<br>"."Dolares Total: ARS ".$this->saldoDolares;
  }
}
 ?>
