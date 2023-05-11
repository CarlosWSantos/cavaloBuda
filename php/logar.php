<?php
include $_SERVER['DOCUMENT_ROOT']."/php/classes/functions.php";
include $_SERVER['DOCUMENT_ROOT']."/sql/sql.php";


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


   
   //INSTANCIA E SE CONECTA NA CLASSE DO SQL
   $sql = new Sql();
   //QUERY PARA REGISTAR UM NOVO USUÁRIO
   $query_registrar = "SELECT * FROM tabela_usuarios WHERE email_usuario = :usermail AND senha_usuario = :userpass LIMIT 1";
   //DEFINE OS PARAMETROS DA QUERY
    $parametros =  [
        ":usermail" => $_POST['email'],
        ":userpass" => $_POST['senha']
    ];
   //FAZER O COMANDO SQL RODAR
   $user = $sql->select($query_registrar,$parametros);
    //ATENÇÃO!!!!
       // O RESULTADO DA QUERY VAI ESTAR NO FORMATO [0] => [DATA], CONSULTEM O INDEX 0 PRIMEIRO. COMO NESTE EXEMPLO
    //ATENÇÃO!!!
   if( !isset($user[0]) ){
       echo "Usuário ou senha incorretos";
       exit;
   }else{
    
    header("Location: /html/home/dashboard.php");
    exit;
}
        