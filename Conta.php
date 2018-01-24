<?php

  require 'Agencia.php';

  class Conta{

    public $conta;
  	public $numero;
  	public $saldo;
  	public $limite = 100;
    public $agencia;


    function __construct(){
      $this->agencia = new Agencia();
    }

  }

?>
