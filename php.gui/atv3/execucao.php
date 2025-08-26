<?php

require_once("modelo/Departamento.php");
require_once("modelo/Funcionario.php");

$funcionarios = array();

for ($i=1; $i = 5 ; $i++) { 
    $depto = new Departamento();
    $depto->setNome(readline("Informe o nome do departamento: \n"));
    $depto->setNumero(readline("Informe o número da sala: \n"));

    $funcionario = new Funcionario();
    $funcionario->setNome(readline("Informe o nome do Funcionário: \n"));
    $funcionario->setCargo(readline("Informe o cargo deste funcionário: \n"));
    $funcionario->setSalario(readline("Informe o salário dete funcionário: \n"));
    $funcionario->setDepto($depto);
    echo "Funcionário cadastrado!\n";
    
    array_push($funcionarios, $funcionario);
}

foreach ($funcionarios as $fun) {
    echo"Funcionário " . $fun->getnome() . " | Cargo: ". $fun->getCargo() . " | Salário: ". $fun->getsalario() . " | Nome do Departamento: " . $depto->getNome() . " | Número da sala: " . $depto->getNumero() . ".\n";
}