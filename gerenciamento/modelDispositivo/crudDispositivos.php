<?php
    include 'conexaoBD.php';

    function cadastrarDispositivo($codEstrangeiro, $nome, $endMAC){
        connect();
        query("INSERT INTO dispositivo(nomDisp, endMAC, codUsu) 
        VALUES ('$nome', '$endMAC', '$codEstrangeiro')");
        close();
    }

    function mostrarDispositivos($codUsu){
        connect();
        $resultados = query("SELECT * FROM dispositivo WHERE codUsu = $codUsu");
        close();
        return $resultados;
    }

    function mostrarDispositivoAlterar($codDisp){
        connect();
        $resultados = query("SELECT * FROM dispositivo WHERE codDisp = $codDisp");
        close();
        return $resultados;
    }

    function alterarDispositivo($codDisp, $nome, $endMAC){
        connect();
        query("UPDATE dispositivo SET nomDisp='$nome', endMAC='$endMAC'
        WHERE codDisp = $codDisp");
        close();
    }
    function excluirDispositivo($codDisp){
        connect();
        query("DELETE FROM dispositivo WHERE codDisp = $codDisp");
        close();
    }
?>