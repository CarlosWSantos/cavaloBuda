<?php

if(isset($_POST['idCurtida']))
{
  $curtidaPostId = $_POST['idCurtida'];  
}
else{}

if(isset($_POST['curtir']))
{
  $curtirQ = $_POST['curtir'];  
}
else{}


$autorC = $_SESSION["nome"];
if(isset($curtirQ))
{
    if($curtirQ == "sim")
    {
        $sql = "INSERT INTO curtidas (autorCurtida, curtidaPostId) VALUES ('$autorC','$curtidaPostId');";       
        mysqli_query($conexao, $sql);
    }
    else
    {
        $sql = "DELETE FROM curtidas WHERE autorCurtida = '$autorC' AND curtidaPostId =  '$curtidaPostId' ;";   
        mysqli_query($conexao, $sql);
    }
}
else{}

    header("paginaInicial.php");

?>