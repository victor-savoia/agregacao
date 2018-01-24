<?php

  require 'Conta.php';

  $conta = new Conta();

  $conta->agencia->numero = 178;
  $conta->numero = 123;
  $conta->saldo = 1000.0;
  $conta->limite = 500;

  echo $conta->agencia->numero.PHP_EOL;
  echo $conta->numero.PHP_EOL;
  echo $conta->saldo.PHP_EOL;
  echo $conta->limite.PHP_EOL;

?>
