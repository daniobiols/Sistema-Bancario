<?php

class Individual extends Clientes
{

  protected $nombre;
  protected $apellido;
  protected $dni;

  public function __construct($nombre, $apellido, $dni, $nroCliente)
  {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->dni = $dni;
    parent::__construct($nroCliente);
  }

}
 ?>
