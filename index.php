<?php

require_once 'Vistiante.php';
require_once 'Aluno.php';
require_once 'Atleta.php';
require_once 'Personal.php';


$p1= new Personal("Yoko",28,"F");
$p1->aniversario();

$a1 = new Aluno("Felipe",25,"M");
$a1->pagar();

$at = new Atleta("Homer",47,"M");
$at->pagar();

$v = new Visitante("Dennis",54,"M");


print_r($v);


















?>