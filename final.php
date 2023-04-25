<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="finall.css">
    <link rel="shortcut icon" href="IMAGENS/bolo-icon.ico" type="image/x-icon">
    <title>Confeitos da Jô</title>
</head>
<body>

    <div>
        <?php
            $usuario = $_POST["wnome"];
            echo "<font color='#6c9a5f' size='5px'>Olá $usuario, seu pedido foi finalizado com sucesso!!!</font>"
        ?>
        <!--ICONE CHECK-->
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
            <circle class="path circle" fill="none" stroke="#73AF55" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
            <polyline class="path check" fill="none" stroke="#73AF55" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
        </svg><br><br>

        <p>Obrigado pela preferência!</p><br>
        
        <form action="index.html" method="post">
        <input type="submit" value="Início">  
        </form>
    </div>  

    
</body>
</html>
