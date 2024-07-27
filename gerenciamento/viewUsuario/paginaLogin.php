<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>Entrar página</title>
    </head>
    <body>
        <div class="container text-center">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Tech Inc</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Opções de entrada
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="paginaCadastro.php">Cadastrar-se</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="paginaLogin.php">Entrar com sua conta</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <h1>Entrar com sua conta</h1>
            <form method="POST" action="../controlUsuario/controleUsuario.php">
                <div class="row justify-content-center">
                    <div class="col-4">
                        <label for="nome" class="form-label">Usuário:</label>
                        <input type="text" name="nome" id="nome" class="form-control" autocomplete="off">
                        
                    </div>
                    <div class="col-4 mb-5">
                        <label for="senha" class="form-label">Senha:</label>
                        <input type="password" name="senha" id="senha" class="form-control">
                    </div>
                    <div class="d-grid gap-2 d-md-block">
                        <button type="submit" value="entrar" name="opcao" class="btn btn-primary">Entrar com a conta</button>
                    </div>                    
                </div>    
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>