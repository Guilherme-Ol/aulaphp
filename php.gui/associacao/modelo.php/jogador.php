<?php

    require_once("clube.php");

    class jogador
    {
        private string $nome;
        private string $posicao;
        private int $nUniforme;
        private Clube $clube;




        

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
         * Get the value of posicao
         */
        public function getPosicao(): string
        {
                return $this->posicao;
        }

        /**
         * Set the value of posicao
         */
        public function setPosicao(string $posicao): self
        {
                $this->posicao = $posicao;

                return $this;
        }

        /**
         * Get the value of nUniforme
         */
        public function getNUniforme(): int
        {
                return $this->nUniforme;
        }

        /**
         * Set the value of nUniforme
         */
        public function setNUniforme(int $nUniforme): self
        {
                $this->nUniforme = $nUniforme;

                return $this;
        }

        /**
         * Get the value of clube
         */
        public function getClube(): Clube
        {
                return $this->clube;
        }

        /**
         * Set the value of clube
         */
        public function setClube(Clube $clube): self
        {
                $this->clube = $clube;

                return $this;
        }
    }