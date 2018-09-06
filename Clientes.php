<?php

abstract class Clientes
{
  protected $nroCliente;

  public function __construct($nroCliente)
  {
    $this->nroCliente = $nroCliente;
  }
  public function identificar()
  {
    return ("Nombre y Apellido: ".$this->nombre." ".$this->apellido."<br>"."DNI: ".$this->dni."<br>"."Numero de Cliente: ".$this->nroCliente);
  }
}
?>
