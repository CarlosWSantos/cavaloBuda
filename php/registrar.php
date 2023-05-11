<?php
include $_SERVER['DOCUMENT_ROOT']."/php/classes/functions.php";
include $_SERVER['DOCUMENT_ROOT']."/sql/sql.php";


    //VALIDA O O CAMPO NOME ESTÁ VAZIO
    if( verifica_string_vazia($_POST["nome"]) == false ){
        echo "Favor digitar seu nome corretamente.";
        
        exit;
    }

    //VALIDA O TAMANHO DO CAMPO NOME
    if( valida_tamanho_da_string($_POST["nome"], 6, 30) == false ){
        echo "Tamanho do nome muito pequeno ou grande demais";
     
        exit;
    }

    //VALIDA O TAMANHO DO CAMPO SENHA
    if( valida_tamanho_da_string($_POST["senha"], 5, 30) == false ){
        echo "Tamanho da senha muito pequena ou grande demais";
      
        exit;
    }


    //VALIDA O TAMANHO DO CAMPO E-MAIL
    if( valida_tamanho_da_string($_POST["email"], 5, 30) == false ){
        echo "Tamanho do e-mail muito pequeno ou grande demais";
      
        exit;
    }


    if($_POST["nome"] == $_POST["senha"]){
        echo "O username e a senha devem ser diferentes.<br>";
      
        exit;
    }


   
   //INSTANCIA E SE CONECTA NA CLASSE DO SQL
   $sql = new Sql();
   //QUERY PARA REGISTAR UM NOVO USUÁRIO
   $query_registrar = "INSERT INTO tabela_usuarios (nome_usuario, email_usuario, senha_usuario) 
   VALUES (:nome_usuario,:email_usuario,:senha_usuario)";
   //DEFINE OS PARAMETROS DA QUERY
    $parametros =  [
        ":nome_usuario" => $_POST['nome'],
        ":email_usuario" => $_POST['email'],
        ":senha_usuario" => $_POST['senha']
    ];
   //FAZER O COMANDO SQL RODAR
   $sql->QuerySQL($query_registrar,$parametros);
   echo "Registrados com Sucesso!";
   exit;