<?php 
//chama a conexão 
require_once 'conexao.php';

//recebe os valores
$email = htmlspecialchars($_POST['email']);
$senha = htmlspecialchars($_POST['senha']);

//Validar User
$sql = "SELECT *FROM tb_cliente WHERE email = '$email' AND senha = '$senha';";
$query = mysqli_query($conn, $sql);

//Verifica se existe linhas afetadas
$linha = mysqli_num_rows($query);

//Verificação
    if($linha == 0){
        echo '<script type = text/javascript>
        alert("Email ou Senha incorretos!");
        window.location = "index.php";
        </script>';
    }else{
        $row = mysqli_fetch_array($query , MYSQLI_ASSOC);

        $id_cliente = $row['id_cliente'];
        $nome = $row['nome'];
        $email = $row['email'];
        $senha = $row['senha'];

        session_start();

        $_SESSION['id_cliente'] = $id_cliente;
        $_SESSION['nome'] = $nome;
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;

        header('Location: home.php');
    }
?>