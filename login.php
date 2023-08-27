<?php
setcookie("email");
setcookie("senha");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    <title>Login</title>
</head>

<body>

    <h1 class="título">Login</h1>
    <p class="p">Não possui uma conta?</p>
    <p class="p">Realizar <a href="cadastro.php" class="link">cadastro</a></p>


    <div class="flex-container">
        <form action="index.php" method="post">
            <div class="flex-item">
                <input type="text" name="email" placeholder="email" class="texto"> <br>
                <input type="password" name="senha" placeholder="senha" class="texto"><br>

            </div>

            <div class="flex-item">

                <button type="submit" class="button">
                    Concluir
                </button><br>
                <button type="reset" class="button">
                    Resetar
                </button>

            </div>
            <div>


            </div>
        </form>

</body>

</html>