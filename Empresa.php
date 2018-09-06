<?php

 class Empresa extends Clientes
{

  protected $nombreFant;
  protected $cuit;

  function __construct($nombreFant, $cuit)
  {
    $this->nombreFant = $nombreFant;
    $this->cuit = $cuit;
  }

}
 ?>
