<?php

    require_once '1-Pessoas.php';

    class Personal extends Pessoas{
        private $especialidade;
        private $salario;



        function aumentoSalarial($aumento){
            $this->setSalario($this->getSalario()+$aumento);
        }





        public function getEspecialidade()
        {
                return $this->especialidade;
        }

        
        public function setEspecialidade($especialidade)
        {
                $this->especialidade = $especialidade;

                return $this;
        }

        
        public function getSalario()
        {
                return $this->salario;
        }

         
        public function setSalario($salario)
        {
                $this->salario = $salario;

                return $this;
        }
    }






















?>