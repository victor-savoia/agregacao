<?php


  require 'Aluno.php';

  $aluno = new Aluno();

  $aluno->nome = 'Rafael Cosentino';
  $aluno->rg = '11111111';
  $aluno->dataNascimento = new DateTime('1994-10-30');
  $aluno->turma->periodo = 'Manha';
  $aluno->turma->serie = '5';
  $aluno->turma->sigla = 'B';
  $aluno->turma->tipoEnsino = 'Fundamental';

  var_dump($aluno);

?>
