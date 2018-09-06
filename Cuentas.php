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
  public function informarSaldo ()
  {
    return "Saldo: $".$this->saldo;
  }

  public function depositar(int $saldo)
  {
    echo $this->informarSaldo()."<br>";
    $this->saldo +=$saldo;

    return ("Deposito: $".$saldo."<br>"."Cuenta: ".$this->nroCuenta."<br>"."Saldo Disponible: $".$this->saldo)."<br>";
  }

  public function extraer(int $saldo)
  {
    echo $this->informarSaldo()."<br>";
    if ($this->saldo >= $saldo)
    {
      $this->saldo -= $saldo;
      return ("Extraccion: $".$saldo."<br>"."Cuenta: ".$this->nroCuenta."<br>"."Saldo Disponible: $".$this->saldo)."<br>";
    }else
    {
      return ("Saldo insuficiente");
    }
  }
}
 ?>
