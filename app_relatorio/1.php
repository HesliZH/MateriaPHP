<!DOCTYPE html>
<html>
    <title>HTML Tutorial</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <script src="public/js/jquery.js">
    <script src="public/js/bootstrap.min.js">
<body>
    
    <nav class="navbar navbar-expand-sm bg-light">
    <h1>Seja bem - vindo!</h1>
    
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#modalAluno">Relatório 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Relatório 2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Relatório 3</a>
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
                <div class="modal-body">
                    Modal body..
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>