<?php
    require_once 'DBConexao.Class.php';

    abstract class DBAluno extends DBConexao{

	    public static function DBRelatorio($filtro){
		    $conexao = parent::getDB();
		
            $query = pg_query($conexao, "SELECT codaluno, nome, cpf, data_nasc
                                        FROM aluno
                                        WHERE CAST(codaluno AS VARCHAR) = '".$filtro."'
                                        OR nome LIKE '%".$filtro."%'
                                        OR 'TODOS' = '".$filtro."'
                                        ");
            
            return pg_fetch_all($query);
	}
}

?>
