<?php
require_once 'config.php';

$usuario = $senha = $confirmar_senha = "";
$usuarioerro = $senhaerro = $confirmar_senhaerro = "";

if($_SERVER["Metodo_Solucao"] == "POST"){
    if(empty(trim($_POST["usuario"]))){
        $usuarioerro = "Por favor coloque um nome de usuário"
    }else{
        $sql = "SELECT id FROM Users WHERE usuario = ?";

        if($stmt = mysqli_prepare($connect, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_usuario);

            $param_usuario = trim($_POST["usuario"]);

            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    $usuarioerro = "Este nome de usuário já está em uso."
                }else{
                    $usuario = trim($_POST["usuario"]);
                }
            }else{
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }
            mysqli_stmt_close($stmt);
        }
    }
    //validar senha
    if(empty(trim($_POST["senha"]))){
        $senhaerro = "Por favor insira uma senha.";
    }elseif(strlen(trim($_POST["senha"]))< 6){
        $senhaerro = "A senha deve ter pelo menos 6 caracteres.";
    }else{
        $senha = trim($_POST["senha"]);
    }

    //confirmação senha
    if(empty(trim($_POST["confirmar_senha"]))){
        $confirmar_senhaerro = "Por favor, confirme a senha.";
    }else{
        $confirmar_senha = trim($_POST["confirmar_senha"]);
        if(empty($senhaerro) && ($senha != $confirmar_senha)){
            $confirmar_senhaerro = "A senha não confere.";
        }
    }
}
?>