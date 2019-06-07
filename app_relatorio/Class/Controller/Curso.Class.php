<?php
    require_once '../DB/DBCurso.Class.php';

    Class Curso extends DBCurso{
        private $codcurso;
        private $descricao;
        private $nota;
        private $dificuldade;

        public function Relatorio2($filtro, $filtro2){
            return parent::DBRelatorio($filtro, $filtro2);
        }
    }