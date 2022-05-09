<?php 


    class Funcionario extends Pessoas{
        private $funcao;
        private $salario;
        
        function aumentoSalarial($aumento){
            $this->setSalario($this->getSalario()+$aumento);
        }
        
        public function getFuncao()
        {
                return $this->funcao;
        }

        
        public function setFuncao($funcao)
        {
                $this->funcao = $funcao;

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