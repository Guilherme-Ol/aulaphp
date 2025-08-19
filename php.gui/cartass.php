<?php

class Carta
{
    private $nome;
    private $numero;

    
    public function __toString()
    {
        return sprintf("(%s) | %s\n", $this->numero, $this->nome);
    }


    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of numero
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     */
    public function setNumero($numero): self
    {
        $this->numero = $numero;

        return $this;
    }
}

//programa principal

$cartas = [];


$ais = new Carta();
$ais->setNumero("1")->setNome("ais");

$dois = new Carta();
$dois->setNumero("2")->setNome("dois");

$tres = new Carta();
$tres->setNumero("3")->setNome("tres");

$quatro = new Carta();
$quatro->setNumero("4")->setNome("quatro");

$cinco = new Carta();
$cinco->setNumero("5")->setNome("cinco");

$seis = new Carta();
$seis->setNumero("6")->setNome("seis");

$sete = new Carta();
$sete->setNumero("7")->setNome("sete");

$oito = new Carta();
$oito->setNumero("8")->setNome("oito");

$nove = new Carta();
$nove->setNumero("9")->setNome("nove");

$valete = new Carta();
$valete->setNumero("10")->setNome("valete");

$dama = new Carta();
$dama->setNumero("11")->setNome("dama");

$rei = new Carta();
$rei->setNumero("12")->setNome("rei");

$cartas = [$ais, $dois, $tres, $quatro, $cinco, $seis, $sete, $oito, $nove, $valete, $dama, $rei];

$cartaSorteada = $cartas[array_rand($cartas)];

echo "--Tente advinhar a carta sorteada do baralho--\n";
echo "Cartas disponíveis: \n";

foreach ($cartas as $carta) {
    echo $carta;
}

$tentativas = 0;

do {
    $palpite = readline("Digite a carta sorteada: ");
    $tentativas++;

    if ((int)$palpite == $cartaSorteada->getNumero()) {
        echo "\nVocê acertou!\n";
        echo "Carta sorteada: " . $cartaSorteada;
        echo "Você acertou em : " . $tentativas . " tentativas!\n";
        break;
    } else {
        echo "Tente novamente.\n";
    }
} while (true);