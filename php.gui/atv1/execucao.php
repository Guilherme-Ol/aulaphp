<?php

require_once("modelo/Cidade.php");
require_once("modelo/Estado.php");

//Estados
$sc = new Estado();
$sc->setNome("Santa Catarina");
$sc->setSigla("SC");

$pr = new Estado();
$pr->setNome("Paraná");
$pr->setSigla("PR");


//Cidades
$flo = new Cidade();
$flo->setNome("Florianópolis");
$flo->setQtdHabitantes(10000);
$flo->setAltitude(1500);
$flo->setEstado($sc);


$blu = new Cidade();
$blu->setNome("Blumenau");
$blu->setQtdHabitantes(11000);
$blu->setAltitude(1350);
$blu->setEstado($sc);

$foz = new Cidade();
$foz->setNome("Foz do Iguaçu");
$foz->setQtdHabitantes(14000);
$foz->setAltitude(1200);
$foz->setEstado($pr);

$cv = new Cidade();
$cv->setNome("Cascavel");
$cv->setQtdHabitantes(9000);
$cv->setAltitude(1700);
$cv->setEstado($pr);

echo "A cidade de " . $flo->getNome() . ",localizada no estado " . $flo->getEstado()->getNome() . "-" . $flo->getEstado()->getSigla() . ",possui " . $flo->getQtdHabitantes() . " habitantes e uma altitude de " . $flo->getAltitude() . " metros.\n";

echo "A cidade de " . $blu->getNome() . ",localizada no estado " . $blu->getEstado()->getNome() . "-" . $blu->getEstado()->getSigla() . ",possui " . $blu->getQtdHabitantes() . " habitantes e uma altitude de " . $blu->getAltitude() . " metros.\n";

echo "A cidade de " . $foz->getNome() . ",localizada no estado " . $foz->getEstado()->getNome() . "-" . $foz->getEstado()->getSigla() . ",possui " . $foz->getQtdHabitantes() . " habitantes e uma altitude de " . $foz->getAltitude() . " metros.\n";

echo "A cidade de " . $cv->getNome() . ",localizada no estado " . $cv->getEstado()->getNome() . "-" . $cv->getEstado()->getSigla() . ",possui " . $cv->getQtdHabitantes() . " habitantes e uma altitude de " . $cv->getAltitude() . " metros.\n";