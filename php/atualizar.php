<?php
include $_SERVER['DOCUMENT_ROOT']."/php/classes/functions.php";
include $_SERVER['DOCUMENT_ROOT']."/sql/sql.php";


    //VALIDA O O CAMPO NOME ESTÁ VAZIO
    if( verifica_string_vazia($_POST["nome"]) == false ){
        echo "Favor digitar seu nome corretamente.";
        header("Location: /");
        exit;
    }

    //VALIDA O TAMANHO DO CAMPO NOME
    if( valida_tamanho_da_string($_POST["nome"], 6, 30) == false ){
        echo "Tamanho do nome muito pequeno ou grande demais";
        header("Location: /");
        exit;
    }

    //VALIDA O TAMANHO DO CAMPO SENHA
    if( valida_tamanho_da_string($_POST["senha"], 5, 30) == false ){
        echo "Tamanho da senha muito pequena ou grande demais";
        header("Location: /");
        exit;
    }

    
    //VALIDA O TAMANHO DO CAMPO E-MAIL
    if( valida_tamanho_da_string($_POST["email"], 5, 50) == false ){
        echo "Tamanho do e-mail muito pequeno ou grande demais";
        header("Location: /");
        exit;
    }


    if($_POST["nome"] == $_POST["senha"]){
        echo "O username e a senha devem ser diferentes.<br>";
        header("Location: /");
        exit;
    }


   

  $sql = new Sql();