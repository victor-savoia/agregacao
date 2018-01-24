<?php

require 'Cliente.php';

  class CartaoDeCredito{
    public $numero;
    public $dataDeValidade;
    public $cliente;

    function __construct(){
        $this->cliente = new Cliente();
    }

  }



 ?>
