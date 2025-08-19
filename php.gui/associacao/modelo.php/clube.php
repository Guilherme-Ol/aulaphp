<?php

    class Clube
    {
        private string $nome;
        private string $divisao;
        private int $anoFundacao;

        



        

        /**
         * Get the value of nome
         */
        public function getNome(): string
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         */
        public function setNome(string $nome): self
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of divisao
         */
        public function getDivisao(): string
        {
                return $this->divisao;
        }

        /**
         * Set the value of divisao
         */
        public function setDivisao(string $divisao): self
        {
                $this->divisao = $divisao;

                return $this;
        }

        /**
         * Get the value of anoFundacao
         */
        public function getAnoFundacao(): int
        {
                return $this->anoFundacao;
        }

        /**
         * Set the value of anoFundacao
         */
        public function setAnoFundacao(int $anoFundacao): self
        {
                $this->anoFundacao = $anoFundacao;

                return $this;
        }
    }


    //Programa principal

