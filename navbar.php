
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="./css/nav.css" media="screen" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="div-logo">

        <img class="logo" src="./imgs/logo.png">
        <div class="tools">
            <div class="cadastro">
                <a href="cadastro.php" class="cadastro-link"> Cadastro </a>
            </div>
            <div class="login">
                <a href="login.php" class="login-link"> Login </a>
            </div>
            <div class="perfil">
                <a href="perfil.php"><img class="perfil-img" src="./imgs/perfil.png"></a>
            </div>
            <div class="carrinho">
                <a href="carrinho.php"><img class="carrinho-img" src="./imgs/carrinho.png"></a>
            </div>
            <div class="ferramenta">
                <a href="configura.php"><img class="ferramenta-img" src="./imgs/ferramenta.png"></a>
            </div>

        </div>
        <div class="home">
           <a href="index.php" class="home-link"> <img class="home-img" src="./imgs/home.png"></a>
            <input type="text" class="textbox" placeholder="Pesquisar" list="sugestoes">
            <datalist id="sugestoes">
                <option value="O pequeno príncipe">
                <option value="Os sete maridos de Evelyn Hugo">
                <option value="Percy Jackson e o Ladrão de Raios">
                <!-- Adicione mais sugestões conforme necessário -->
            </datalist>
            <a href="autores.php" class="grupo-link"> Autores</a>
            <a href="sagas.php" class="grupo-link">Sagas</a>     
             <a href="duvida.php"><img class="duvida-img" src="imgs/duvida.png"></a>
            
        </div>
           
    </div>

</body>

</html>