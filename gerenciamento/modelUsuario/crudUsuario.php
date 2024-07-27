<?php
    include 'conexaoBD.php';
    function cadastrarUsuario($nome, $senha){
        connect();
        query("INSERT INTO usuario (nomUsu, senhaUsu) VALUES ('$nome', '$senha')");
        close();
    }
    function buscarUsuario($nome){
        connect();
        $resultados = query("SELECT * FROM usuario WHERE nomusu = '$nome'");
        close();
        return $resultados;
    }
?>