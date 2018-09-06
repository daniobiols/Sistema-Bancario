<?php

class Cheque
{

  protected $monto;
  protected $bancoEmisor;

  function __construct($monto, $bancoEmisor)
  {
    $this->monto = $monto;
    $this->bancoEmisor = $bancoEmisor;
  }

  public function pedirMonto()
  {
    return $this->monto;
  }

  public function pedirBanco()
  {
    return $this->bancoEmisor;
  }
}
 ?>
