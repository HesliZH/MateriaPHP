<?php
    require_once 'DBConexao.Class.php';

    abstract class DBCurso extends DBConexao{

	    public static function DBRelatorio($filtro, $filtro2){
		    $conexao = parent::getDB();
		
            $query = pg_query($conexao, "SELECT C.CODCURSO, C.DESCRICAO, A.NOME FROM CURSO C
                                            INNER JOIN MATRICULA M ON (M.CODCURSO = C.CODCURSO)
                                            INNER JOIN ALUNO A ON (A.CODALUNO = M.CODALUNO)
                                            WHERE CAST(A.CODALUNO AS VARCHAR) = '".$filtro."' 
                                            OR A.NOME LIKE '%".$filtro."%' OR C.DESCRICAO LIKE '%".$filtro2."%' OR 'TODOS' = '".$filtro."' GROUP BY 1,2,3 ORDER BY 1");
                                        
            
            return pg_fetch_all($query);
	}
}

?>