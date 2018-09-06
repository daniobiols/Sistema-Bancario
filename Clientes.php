<?php

abstract class Clientes
{
  protected $nroCliente;

  public function __construct($nroCliente)
  {
    $this->nroCliente = $nroCliente;
  }

  public function identificar(int $nroCliente)
  {

  }
}



 ?>
