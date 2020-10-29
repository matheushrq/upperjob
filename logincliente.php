<?php
$host = "localhost";
$user = "root";
$password = "";
$bd = "upperjob";
$connect = mysqli_connect($host, $user, $password, $bd);

if(!$connect){
    echo "Erro na conexão, tente novamente!";
}
$sql_select = "SELECT * FROM tb_usuario WHERE usuario = "" . $usuario . "" ";

session_start();
/*
// recuperando o login
$usuario = isset($_POST['usuario']) ? addslashes(trim($_POST['usuario'])) : FALSE;
// recuperando a senha
$senha = isset($_POST['senha']) ? md5(trim($_POST['senha'])) : FALSE;
*/

if(isset($_POST['logar'])){
    // declarando usuário e senha
    $usuario = $_POST['usuario'];
    $senha = md5($_POST['senha']);
    // verificando usuário e senha
    if($usuario == "" || $usuario == null){
        echo "Você não informou seu usuário";
        exit;
    }
}
?>