<?php

require_once("modelo.php/clube.php");
require_once("modelo.php/jogador.php");

$chape = new Clube();
$chape->setNome("Chapecoense");
$chape->setDivisao("B");
$chape->setAnoFundacao("1977");
//print_r($chape);

$jogador = new Jogador();
$jogador->setNome("Neymar Jr");
$jogador->setNUniforme("10");
$jogador->setPosicao("Ponta");
$jogador->setClube($chape);

//Imprimir os dados

echo "Dados do Jogador\n";
echo "Nome :" . $jogador->getNome() . ".\n";
echo "Número do Uniforme: " . $jogador->getNUniforme() . ".\n";
echo "Posição: " . $jogador->getPosicao() . ".\n";
echo "Clube: " . $jogador->getClube()->getNome() . ".\n";