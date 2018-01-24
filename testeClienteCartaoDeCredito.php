<?php

  require 'CartaoDeCredito.php';

  $cartao = new CartaoDeCredito();

  $cartao->numero = 111111;
  $cartao->dataDeValidade = new DateTime('2018-12-12');
  $cartao->cliente->nome = 'Rafael Cosentino';
  $cartao->cliente->codigo = 123;

  echo $cartao->cliente->nome.PHP_EOL;
  echo $cartao->cliente->codigo.PHP_EOL;


?>
