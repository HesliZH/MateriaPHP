<?php
    require_once '../DB/DBAluno.Class.php';

    Class Aluno extends DBAluno{
        private $codaluno;
	    private $nome;
	    private $cpf;
	    private $data_nasc;

        /*public function __set($codaluno, $valor){
            $this->$codaluno = $valor;
        }

        public function __get($codaluno){
            return $this->$codaluno;
        }

        public function __set($nome, $valor){
            $this->$nome = $valor;
        }
        
        public function __get($nome){
            return $this->$nome;
        }
        public function __set($cpf, $valor){
            $this->$cpf = $valor;
        }
        
        public function __get($cpf){
            return $this->$cpf;
        }

        public function __set($data_nasc, $valor){
            $this->$data_nasc = $valor;
        }
        
        public function __get($data_nasc){
            return $this->$data_nasc;
        }*/

        public function Relatorio($filtro){
            return parent::DBRelatorio($filtro);
        }
    }