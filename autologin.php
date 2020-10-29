<?php
$host = "localhost";
$user = "root";
$password = "";
$bd = "upperjob";
$connect = mysqli_connect($host, $user, $password, $bd);

if(!$connect){
    echo "Erro na conexão, tente novamente!";
}

$usuario = $_POST['usuario'];
$senha = md5($_POST['senha']);

$sql_select = "SELECT * FROM tb_usuario";
if(mysqli_connect($connect, $sql_select)){
    echo "";
} else{
    echo "Erro, ". $sql_select . "<br>" . mysqli_error($connect);
}
?>