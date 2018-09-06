<?php

 class Empresa extends Clientes
{

  protected $nombreFant;
  protected $cuit;

  function __construct($nombreFant, $cuit, $nroCliente)
  {
    $this->nombreFant = $nombreFant;
    $this->cuit = $cuit;
    parent::__construct($nroCliente);
  }

  public function identificar()
  {
    return ("Empresa: ".$this->nombreFant."<br>"."Cuit: ".$this->cuit."<br>"."Numero de Cliente: ".$this->nroCliente."<br>");
  }
}
 ?>
