<?php

  require 'CartaoDeCredito.php';

  $cartao = new CartaoDeCredito();

  $cartao->numero = 111111;
  $cartao->dataDeValidade = DateTime::createFromFormat('d-m-Y', '12/12/2018');
  $cartao->cliente->nome = 'Rafael Cosentino';
  $cartao->cliente->codigo = 123;

  echo $cartao->cliente->nome.PHP_EOL;
  echo $cartao->cliente->codigo.PHP_EOL;


?>
