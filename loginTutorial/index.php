<?php session_start() ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Login Php</title>
</head>
<body>
    <?php
        if(!isset($_SESSION['login'])){

            if(isset($_POST['acao'])){
                $login = 'Icaro';
                $senha = 'coxinha123';

                $loginForm = $_POST['login'];
                $senhaForm = $_POST['senha'];

                if($login == $loginForm && $senha == $senhaForm){
                    //Logado com sucesso.
                    $_SESSION['login'] = $login;
                    header('Location: index.php');
                } else {
                    //Houve algum erro.
                    echo 'Dados inválidos, verifique novamente.';
                }
            }

            include('login.php');
        } else {
            if(isset($_GET['logout'])){
                unset($_SESSION['login']);
                session_destroy();
                header('Location: index.php');
            }
            include('home.php');
        }
    ?>
</body>
</html>