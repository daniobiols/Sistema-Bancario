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

  public function pedirMonto(int $monto)
  {
    echo "Monto del cheque: ".$monto;
  }

  public function pedirBanco(int $bancoEmisor))
  {
    echo "Monto del cheque: ".$bancoEmisor;
  }
}
 ?>
