<?php 

    require_once '2-Aluno.php';

    class Atleta extends Aluno{
        private $desconto;


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
                echo "\n O aluno ",$this->getNome()," realizou o pagamento com desconto ";
            }
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