<?php

  require 'Turma.php';

  class Aluno{
    public $nome;
    public $rg;
    public $dataNascimento;
    public $turma;

    function __construct(){
      $this->turma = new Turma();
    }
  }

?>
