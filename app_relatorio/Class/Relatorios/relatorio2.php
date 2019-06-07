<?php
    require_once(realpath(dirname(__FILE__)).'../../../public/pdf/fpdf.php');
    require_once(realpath(dirname(__FILE__)).'../../Controller/Aluno.Class.php');
    require_once(realpath(dirname(__FILE__)).'../../Controller/Curso.Class.php');

    //Filtragem de alunos
    if(empty($_POST['filtro1']) or strtoupper($_POST['filtro1'] == 'TODOS')){
        $filtro = 'TODOS';
    }else{
        $filtro = $_POST['filtro1'];
    }

    //Filtragem de cursos
    if(empty($_POST['filtro2']) or strtoupper($_POST['filtro2'] == 'TODOS')){
        $filtro2 = 'TODOS';
    }else{
        $filtro2 = $_POST['filtro2'];
    }

    $curso = new Curso();
    $lista = $curso->Relatorio2($filtro, $filtro2);

    $pdf = new FPDF();
    $pdf->AddPage();
    //Cabeçalho da pagina
    $pdf->SetFont("arial", "B", 18);
    $pdf->Cell(0, 5, utf8_decode("Relação de cursos e alunos matriculados"), 0, 1, 'C');
    $pdf->Cell(0, 5, "", 1, 'C');
    $pdf->Ln(20);
    //Colunas do relatório
    $pdf->SetFont("arial", "B", 14);
    $pdf->Cell(45, 5, utf8_decode("Código do curso"), 1, 0, 'L');
    $pdf->Cell(75, 5, utf8_decode("Descrição do curso"), 1, 0, 'L');
    $pdf->Cell(75, 5, utf8_decode("Nome do aluno"), 1, 0, 'L');
    $pdf->Ln(5);
    //Dados do relatório
    foreach($lista as $item){
        $pdf->SetFont("arial", "B", 14);
        $pdf->Cell(45, 5, utf8_decode($item['codcurso']), 0, 0, 'C');
        $pdf->Cell(75, 5, utf8_decode($item['descricao']), 0, 0, 'C');
        $pdf->Cell(75, 5, utf8_decode($item['nome']), 0, 1, 'C');
    }
    ob_start ();
    $pdf->Output(   );
?>