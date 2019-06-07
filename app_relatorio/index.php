<!DOCTYPE html>
<html>
    <title>HTML Tutorial</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <script src="public/js/jquery.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
<body>
    
    <nav class="navbar navbar-expand-sm bg-light">
    <h1>Seja bem - vindo!</h1>
    
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#modalAluno">Relatório 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#modalRelatorio2">Relatório 2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#modalRelatorio3">Relatório 3</a>
        </li>
    </ul>
    </nav>
    <div class="modal" id="modalAluno">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Filtro de relatórios</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="Class/Relatorios/relatorioAlunos.php" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="filtro1">Código ou nome:</label>
                            <input type="text" class="form-control" id="filtro1" placeholder="" name="filtro1" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Imprimir</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal" id="modalRelatorio2">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Filtro de relatórios</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="Class/Relatorios/relatorio2.php" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="filtro1">Código ou nome do aluno:</label>
                            <input type="text" class="form-control" id="filtro1" placeholder="" name="filtro1">
                            <label for="filtro2">Nome do curso:</label>
                            <input type="text" class="form-control" id="filtro2" placeholder="" name="filtro2">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Imprimir</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal" id="modalRelatorio3">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Filtro de relatórios</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="Class/Relatorios/relatorio3.php" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="filtro1">Código ou Nome do curso:</label>
                            <input type="text" class="form-control" id="filtro1" placeholder="" name="filtro1">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Imprimir</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>