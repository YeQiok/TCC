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

    //checkar se tem erro
    if(empty($usuarioerro) && empty($senhaerro) && empty($confirmar_senhaerro)){

        $sql = "INSERT INTO users (usuario, senha) VALUES (?,?)";

        if($stmt = mysqli_prepare($connect, $sql)){
            //Vincular as variáveis à instrução preparada como parâmetros
            mysqli_stmt_bind_param($stmt, "ss", $param_usuario, $param_senha);

            //Setar parametros
            $param_usuario = $usuario;
            $param_senha = password_hash($senha, PASSWORD_DEFAULT);

            //Criar senha encrypt

            if(mysqli_stmt_execute($stmt)){
                header("location: login.php");
            }else{
                echo "Algo deu errado. Por favor, tente novamente mais tarde.";
            }
            mysqli_stmt_close($stmt);
        }
    }
    mysqli_close($connect);
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($senhaerro)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $usuario; ?>">
                <span class="help-block"><?php echo $senhaerro; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($senhaerro)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $senha; ?>">
                <span class="help-block"><?php echo $senhaerro; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirmar_senhaerro)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirmar_senha; ?>">
                <span class="help-block"><?php echo $confirmar_senhaerro; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>