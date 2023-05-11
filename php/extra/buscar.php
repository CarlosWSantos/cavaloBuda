<?php

$sql = "SELECT * FROM usuarios;";
$res = mysqli_query($mysqli,$sql);
$linhas = mysqli_num_rows($res);
for($i=0; $i < $linhas; $i++){
    $usuario = mysqli_fetch_array($res);
    echo "Senha: ".$usuario["senha"]."<br>";
    echo "Nome: ".$usuario["nome"]."<br>";
    echo "Idade: ".$usuario["dataDeNascimento"]."<br>";
    echo "Email: ".$usuario["email"]."<br>";
    echo "<a href='altera_aula16.php?cod_usuario=".$usuario["cod_usuario"]."'>Alterar usuário</a><br>";
    echo "----------------------------------<br>";
}