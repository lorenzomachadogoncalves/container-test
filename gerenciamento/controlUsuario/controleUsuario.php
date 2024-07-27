<?php
    include "../modelUsuario/crudUsuario.php";

    $opcao = $_POST["opcao"];
    
    switch($opcao){
        case "cadastrar":
            cadastrarUsuario($_POST["nome"], sha1($_POST["senha"]));
            header("Location: ../viewUsuario/paginaLogin.php");
        break;
        case "entrar":
            $resultados = buscarUsuario($_POST["nome"]);
            foreach($resultados as $dados);
            $nome = $_POST["nome"];
            $senha = sha1($_POST["senha"]);
            if($nome === $dados['nomUsu']){
                if($senha === $dados['senhaUsu']){
                    session_start();
                    $_SESSION["nome"] = $nome;
                    $_SESSION["codUsu"] = $dados['codUsu'];
                    header("Location: ../viewDispositivo/menuOpcoes.php");
                }
                else{
                    echo "<script>alert('Senha incorreta');</script>";
                    echo "<script>window.location = '../viewUsuario/paginaLogin.php';</script>";
                }
            }
            else{
                echo "<script>alert('Usuário incorreto');</script>";
                echo "<script>window.location = '../viewUsuario/paginaLogin.php';</script>";
            }
        break;
        case "sair";
            session_start();
            session_destroy();
            echo "<script>alert('Logout efetuado com sucesso');</script>";
            echo "<script>window.location = '../viewUsuario/paginaLogin.php';</script>";
    }
?>