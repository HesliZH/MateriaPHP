<?php
    require_once '../DB/DBMatricula.Class.php';
    
    Class Matricula extends DBMatricula{
        private $codmatricula;
        private $codaluno;
        private $codcurso;

        public function Relatorio($filtro){
            return parent::DBRelatorio($filtro);
        }
    }
?>