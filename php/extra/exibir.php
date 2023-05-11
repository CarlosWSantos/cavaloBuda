<?php

 $username = $_POST["username"];
 $sql = "SELECT * FROM usuarios WHERE username like '%$username%';";
 $res = mysqli_query($mysqli,$sql);
 $linhas = mysqli_num_rows($res);
 for($i=0; $i < $linhas; $i++){
     $usuario = mysqli_fetch_array($res);
     echo "Senha: ".$usuario["senha"]."<br>";
     echo "Nome: ".$usuario["nome"]."<br>";
     echo "Data de Nascimento: ".$usuario["dataDeNascimento"]."<br>";
     echo "Email: ".$usuario["email"]."<br>";
     echo "----------------------------------<br>";
 }