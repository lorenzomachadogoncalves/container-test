<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>Cadastro</title>
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
                                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dispositivos
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="cadastrarDispositivo.php">Cadastrar</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="mostrarDispositivos.php">Visualizar</a></li>
                                </ul>
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php
                                    session_start();
                                    if(isset($_SESSION['nome'])){
                                        echo $_SESSION['nome'];                
                                    }
                                    else{
                                        echo "<script>alert('Entre com uma conta para acessar esta página.');</script>";
                                        echo "<script>window.location = '../viewUsuario/paginaLogin.php';</script>";
                                    }
                                    ?>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="opcoesConta.php">Opções da conta</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <?php
                echo "<h2 style='margin: 1%;'>Seja bem vindo(a), " .$_SESSION['nome']. ".</h2>"
            ?>
            <h1>Cadastrar dispositivos</h1>
            <form method="POST" action="../controlDispositivos/controleDispositivos.php">
                <div class="row align-items-center">
                    <div class="col">
                        <label for="nome" class="form-label">Nome do eletrônico:</label>
                        <input type="text" class="form-control" id="nome" name="nomeDisp">
                    </div>
                    <div class="col">
                        <label for="endereco" class="form-label">Endereço MAC:</label>
                        <input type="text" class="form-control" id="MAC" name="enderecoMAC">
                    </div>
                    </div class="mt-4">
                        <button type="submit" class="btn btn-primary" name="opcao" value="cadastrar" style="width: 20%; margin-top: 2%;">Cadastrar</button>
                    </div>
                    <input type="hidden" name="codusuario" value="<?php echo $_SESSION['codUsu']; ?>">
                </div>
            </form>
        </div>
        <script
            src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
            crossorigin="anonymous">
        </script>
        <script src="jqueryMasks.js" type="text/javascript"></script>
        <script src="jqueryMascara.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>