<?php

class CajaDeAhorro extends Cuentas
{
  protected $tasaInt=5;

  public function __construct($tasaInt, $nroCuenta, $clienteAsociado)
  {
    $this->tasaInt = $tasaInt;
    parent::__construct($nroCuenta, $clienteAsociado);
  }

  public function cobrarInt()
  {
    echo $this->informarSaldo()."<br>";
    $valor = (($this->saldo * $this->tasaInt)/ 100);
    $this->saldo += $valor;
    return "Interes ganado en la cuenta " .$this->nroCuenta.": $".$valor."<br>"."Saldo Disponible: $".$this->saldo;
  }
}

 ?>
