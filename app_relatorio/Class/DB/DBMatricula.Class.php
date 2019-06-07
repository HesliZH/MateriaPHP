<?php
    require_once 'DBConexao.Class.php';

    abstract class DBMatricula extends DBConexao{

        public function DBRelatorio($filtro){
            $conexao = parent::getDB();
		
            $query = pg_query($conexao, "SELECT COUNT(CODMATRICULA) as QUANTIDADE, C.DESCRICAO, C.CODCURSO FROM MATRICULA M
                                        INNER JOIN CURSOS C ON (C.CODCURSO = M.CODCURSO)
                                        WHERE CAST(M.CODCURSO AS VARCHAR) = '%".$filtro."%' OR C.DESCRICAO LIKE '%".$filtro."%'
                                        OR 'TODOS' = '".$filtro."'
                                        GROUP BY 1,2,3");
            
            return pg_fetch_all($query);
        }
    }
?>