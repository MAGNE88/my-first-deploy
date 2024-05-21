<?php 
//chama a conexão 
require_once 'conexao.php';

//recebe os valores
$login = htmlspecialchars($_POST['login']);
$senha = htmlspecialchars($_POST['senha']);

//Validar User
$sql = "SELECT *FROM tb_admin WHERE login = '$login' AND senha = '$senha';";
$query = mysqli_query($conn, $sql);

//Verifica se existe linhas afetadas
$linha = mysqli_num_rows($query);

//Verificação
    if($linha == 0){
        echo '<script type = text/javascript>
        alert("Dados incorretos ou adminitrador não cadastrado!");
        window.location = "login_admin.php";
        </script>';
    }else{
        $row = mysqli_fetch_array($query , MYSQLI_ASSOC);

        $id_admin = $row['id_admin'];
        $nome = $row['nome'];
        $email = $row['email'];
        $senha = $row['senha'];

        session_start();

        $_SESSION['id_admin'] = $id_admin;
        $_SESSION['nome'] = $nome;
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        
        header('Location: tela_admin.php');
    }
?>
