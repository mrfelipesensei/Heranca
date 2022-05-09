<?php

    require_once 'Pessoas.php';

    class Aluno extends Pessoas{
        private $matricula;
        private $pagamento;


        function matricular(){
            echo "Matricula realizada";
        }

        function fecharMatricula(){
            echo "Matrícula cancelada";
        }

        function pagar(){
            echo "O aluno ", $this->getNome(), " pagou sua mensalidade ";
        }


        
        public function getMatricula()
        {
                return $this->matricula;
        }

        
        public function setMatricula($matricula)
        {
                $this->matricula = $matricula;

                return $this;
        }

        public function getPagamento()
        {
                return $this->pagamento;
        }

        public function setPagamento($pagamento)
        {
                $this->pagamento = $pagamento;

                return $this;
        }

        
        
    }





















?>