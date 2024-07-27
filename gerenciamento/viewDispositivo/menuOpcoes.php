<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>Menu</title>
    </head>
    <body>
        <div class="container text-center">
            <?php
                session_start();
                if(isset($_SESSION['nome'])){
                    echo "<h2 style='margin: 1%;'>Seja bem vinda(o), " .$_SESSION['nome']. ".</h2>";
                }
                else{
                    echo "<script>alert('Entre com uma conta para acessar esta página.');</script>";
                    echo "<script>window.location = '../viewUsuario/paginaLogin.php';</script>";
                }
            ?>
            <div class="row justify-content-center">
                <h1>Opções</h1>
                <div class="col-3 list-group mt-4 mb-4">
                    <a class="list-group-item list-group-item-action" href="cadastrarDispositivo.php">Cadastrar dispositivo</a>
                    <a class="list-group-item list-group-item-action" href="mostrarDispositivos.php">Mostrar dispositivos</a>
                </div>
                <form method="POST" action="../controlUsuario/controleUsuario.php">
                   <button type="submit" class="btn btn-danger" value="sair" name="opcao">Sair da sua conta</button>
                </form>
            </div>
        </div>
    </body>
</html>