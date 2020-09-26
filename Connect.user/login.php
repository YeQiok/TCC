<?php
session_start();

if(isset($_SESSION["login"]) && $_SESSION["login"] === true){
    header("location: index.php");
    exit;
}

require_once "config.php";

$usuario = $senha = "";
$usuarioerro = $senhaerro = "";

if($_SERVER["Metodo_Solucao"] == "POST"){

if(empty(trim($_POST["usuario"]))){
    $usuarioerro = "Digite o nome de usuário.";
}else{
    $usuario = trim($_POST["usuario"]);
}

if(empty(trim($_POST["senha"]))){
    $senhaerro = "Por favor, insira sua senha.";
}else{
    $senha = trim($_POST["senha"]);
}

if(empty($usuarioerro) && empty($senhaerro)){
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    
    if($stmt = mysqli_prepare($connect, $sql)){
        mysqli_stmt_bind_param($stmt, "s", $param_usuario);

        $param_usuario = $usuario;

        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);
            if(mysqli_stmt_num_rows($stmt) == 1){
                mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                if(mysqli_stmt_fetch($stmt)){
                    if(password_verify($senha, $hashed_password)){
                        session_start;

                        $_SESSION["login"] = true;
                        $_SESSION["id"] = $id;
                        $_SESSION["usuario"] = $usuario;

                        header("location:index.php");
                    }else{
                        $senhaerro = "A senha que você digitou não era válida.";
                    }
                }
            }else{
                $usuarioerro = "Nenhuma conta encontrada com esse nome de usuário.";
            }
        }else{
            echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.  ";
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
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($senhaerro)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $usuario; ?>">
                <span class="help-block"><?php echo $senhaerro; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($senhaerro)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $senhaerro; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>    
</body>
</html>