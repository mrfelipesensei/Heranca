<?php

require_once '1-Pessoas.php';
require_once '2-Aluno.php';
require_once '3-Personal.php';
require_once '2.1-Atleta.php';
require_once '4-Funcionario.php';

$a1 = new Aluno("Felipe",25,"M");

$a1->cadastrar();
//$a1->cancelarCadastro();
//$a1->pagamento();
//$a1->fazerAniversario();

$p1 = new Personal("Jesus",33,"M");
$p1->fazerAniversario();

$at1 = new Atleta("Homer",47,"M");
$at1->cadastrar();
$at1->pagamento();

print_r($a1);
















?>