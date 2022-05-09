<?php 

    require_once '1-Pessoas.php';

    class Aluno extends Pessoas{
        private $matricula;
        private $pagamento;
        private $cadastro;
        

        function cadastrar(){
            $this->cadastro = true;
            echo "Cadastro realizado ";
        }
        
        function cancelarCadastro(){
            $this->cadastro = false;
            echo "Cadastro cancelado ";
        }

        function pagamento(){
            if($this->getCadastro() == false){
                echo "Verifique o cadastro "; 
            } else if ($this->getCadastro() == true) {
                echo "\n O aluno ",$this->getNome()," realizou o pagamento ";
            }
        }

        


        //Acessores e modificadores

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


        public function getCadastro()
        {
                return $this->cadastro;
        }

        
        public function setCadastro($cadastro)
        {
                $this->cadastro = $cadastro;

                return $this;
        }
    }















?>