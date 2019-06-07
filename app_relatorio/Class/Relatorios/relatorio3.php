<?php
    require_once(realpath(dirname(__FILE__)).'../../../public/pdf/fpdf.php');
    require_once(realpath(dirname(__FILE__)).'../../Controller/Matricula.Class.php');

    if(empty($_POST['filtro1']) or strtoupper($_POST['filtro1'] == 'TODOS')){
        $filtro = 'TODOS';
    }else{
        $filtro = $_POST['filtro1'];
    }

    $matricula = new Matricula();
    $lista = $matricula->Relatorio($filtro);

    $pdf = new FPDF();
    $pdf->AddPage();
    //Cabeçalho da pagina
    $pdf->SetFont("arial", "B", 18);
    $pdf->Cell(0, 5, utf8_decode("Relação de matriculas por curso"), 0, 1, 'C');
    $pdf->SetFont("arial", "B", 5);
    $pdf->Cell(0, 5, "", 1, 'C');
    $pdf->Ln(15);
    //Colunas do relatório
    $pdf->SetFont("arial", "B", 10);
    $pdf->Cell(75, 5, utf8_decode("Código do curso"), 1, 0, 'L');
    $pdf->Cell(60, 5, utf8_decode("Descrição do curso"), 1, 0, 'L');
    $pdf->Cell(60, 5, utf8_decode("Quantidade de alunos cadastrados"), 1, 1, 'L');
    $pdf->Ln(2);
    //Dados do relatório
    foreach($lista as $item){
        $pdf->SetFont("arial", "B", 10);
        $pdf->Cell(30, 5, utf8_decode($item['codcurso']), 0, 0, 'L');
        $pdf->Cell(75, 5, utf8_decode($item['descricao']), 0, 0, 'L');
        $pdf->Cell(50, 5, utf8_decode($item['quantidade']), 0, 1, 'L');
    }
    ob_start ();
    $pdf->Output(   );
?>