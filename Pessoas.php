<?php

    abstract class Pessoas{
        protected $nome;
        protected $idade;
        protected $sexo;

        function __construct($nome,$idade,$sexo){
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setSexo($sexo);

        }


        function aniversario(){
            $this->setIdade($this->getIdade()+1);
        }



        //Acessores e Modificadores

        public function getNome()
        {
                return $this->nome;
        }

        
        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }

        
        public function getIdade()
        {
                return $this->idade;
        }

        
        public function setIdade($idade)
        {
                $this->idade = $idade;

                return $this;
        }

        
        public function getSexo()
        {
                return $this->sexo;
        }

        
        public function setSexo($sexo)
        {
                $this->sexo = $sexo;

                return $this;
        }
    }









?>