<?php
    include "../modelDispositivo/crudDispositivos.php";

    $opcao = $_POST["opcao"];

    switch($opcao){
        case "cadastrar":
            session_start();
            cadastrarDispositivo($_SESSION["codUsu"], $_POST["nomeDisp"], $_POST["enderecoMAC"]);
            header("Location: ../viewDispositivo/cadastrarDispositivo.php");
        break;

        case "alterar":
            alterarDispositivo($_POST["codDisp"], $_POST["nomDisp"], $_POST["enderecoMAC"]);
            header("Location: ../viewDispositivo/mostrarDispositivos.php");
        break;

        case "excluir";
            excluirDispositivo($_POST["codDisp"]);
            header("Location: ../viewDispositivo/mostrarDispositivos.php");
        break;
    }
?>