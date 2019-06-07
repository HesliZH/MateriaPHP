<?php
    require_once(realpath(dirname(__FILE__)).'../../../public/pdf/fpdf.php');
    require_once(realpath(dirname(__FILE__)).'../../Controller/Aluno.Class.php');

    if(empty($_POST['filtro1']) or strtoupper($_POST['filtro1'] == 'TODOS')){
        $filtro = 'TODOS';
    }else{
        $filtro = $_POST['filtro1'];
    }

    $aluno = new Aluno();
    $lista = $aluno->Relatorio($filtro);

    $pdf = new FPDF();
    $pdf->AddPage();
    //Cabeçalho da pagina
    $pdf->SetFont("arial", "B", 18);
    $pdf->Cell(0, 5, utf8_decode("RELATÓRIO DE ALUNOS"), 0, 1, 'C');
    $pdf->Cell(0, 5, "", 1, 'C');
    $pdf->Ln(50);
    //Colunas do relatório
    $pdf->SetFont("arial", "B", 14);
    $pdf->Cell(30, 5, utf8_decode("Código"), 1, 0, 'L');
    $pdf->Cell(75, 5, utf8_decode("Nome"), 1, 0, 'L');
    $pdf->Cell(50, 5, utf8_decode("CPF"), 1, 0, 'L');
    $pdf->Cell(50, 5, utf8_decode("Nascimento"), 1, 1, 'L');
    $pdf->Ln(2);
    //Dados do relatório
    foreach($lista as $item){
        $pdf->SetFont("arial", "B", 14);
        $pdf->Cell(30, 5, utf8_decode($item['codaluno']), 0, 0, 'L');
        $pdf->Cell(75, 5, utf8_decode($item['nome']), 0, 0, 'L');
        $pdf->Cell(50, 5, utf8_decode($item['cpf']), 0, 0, 'L');
        $pdf->Cell(45, 5,utf8_decode( $item['data_nasc']), 0, 1, 'L');
    }
    ob_start ();
    $pdf->Output(   );
?>