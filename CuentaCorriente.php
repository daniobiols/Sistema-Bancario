<?php

require_once('Cheque.php');

class CuentaCorriente extends Cuentas
{

  private $giroDesc=2000;

  public function __construct($nroCuenta, $clienteAsociado)
  {
    parent::__construct($nroCuenta, $clienteAsociado);
  }

  public function depositarCheque (Cheque $cheque)
  {
    echo $this->informarSaldo()."<br>";
    $this->saldo += $cheque->pedirMonto();

    return ("Monto del Cheque: $".$cheque->pedirMonto()."<br>"."Banco Emisor: ".$cheque->pedirBanco()."<br>"."Cuenta: ".$this->nroCuenta."<br>"."Saldo Disponible: $".$this->saldo)."<br>";
  }

  public function extraer (int $saldo)
  {
    echo $this->informarSaldo()."<br>";
    if ($this->saldo >= $saldo)
    {
      $this->saldo -= $saldo;
      return ("Extraccion: $".$saldo."<br>"."Cuenta: ".$this->nroCuenta."<br>"."Saldo : $".$this->saldo)."<br>";
    }
    if ($saldo > $this->saldo)
    {
      $this->saldo += $this->giroDesc;
      if ($saldo > $this->saldo)
      {
        return "Saldo al descubierto insuficiente";
      }else {
        $this->saldo-=$saldo;
        return ("Extraccion: $".$saldo."<br>"."==ATENCION=="."<br>"."Usted ha utilizado saldo al descubierto: $".$this->giroDesc."<br>"."Cuenta: ".$this->nroCuenta."<br>"."Saldo Disponible: $".$this->saldo)."<br>";
      }
    }
  }
}
 ?>
