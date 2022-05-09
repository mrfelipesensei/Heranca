<?php 

    require_once 'Aluno.php';

    class Atleta extends Aluno{
        private $desconto;


        function pagar(){
            echo "O aluno ", $this->getNome(), " pagou com desconto ";
        }

        
        public function getDesconto()
        {
                return $this->desconto;
        }

        
        public function setDesconto($desconto)
        {
                $this->desconto = $desconto;

                return $this;
        }
        
    }










?>