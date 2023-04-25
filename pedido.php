<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pedido.css">
    <link rel="shortcut icon" href="IMAGENS/bolo-icon.ico" type="image/x-icon">
    <title>Confeitos da Jô</title>
</head>
<body>
    <div>
        <?php
            if(isset($_GET['wbrigadeiro']))
            {
                echo "<font color='#6c9a5f' size='5px'> O seu pedido de brigadeiro foi registrado </font>";
            }

            if(isset($_GET['wcasadinho']))
            {
                echo "<font color='#6c9a5f' size='5px'> O seu pedido de casadinho foi registrado </font>";
            }

            if(isset($_GET['wbeijinho']))
            {
                echo "<font color='#6c9a5f' size='5px'> O seu pedido de beijinho foi registrado </font>";
            }

            if(isset($_GET['wboloarco']))
            {
                echo "<font color='#6c9a5f' size='5px'> O seu pedido de bolo arco-íris foi registrado </font>";
            }

            if(isset($_GET['wconfei']))
            {
                echo "<font color='#6c9a5f' size='5px'> O seu pedido de bolo confeitado foi registrado </font>";
            }

            if(isset($_GET['wnaked']))
            {
                echo "<font color='#6c9a5f' size='5px'> O seu pedido de naked cake foi registrado </font>";
            }

            if(isset($_GET['wmesclado']))
            {
                echo "<font color='#6c9a5f' size='5px'> O seu pedido de bolo mesclado foi registrado </font>";
            }

            if(isset($_GET['wcenoura']))
            {
                echo "<font color='#6c9a5f' size='5px'> O seu pedido de bolo de cenoura foi registrado </font>";
            }

            if(isset($_GET['wmilho']))
            {
                echo "<font color='#6c9a5f' size='5px'> O seu pedido de bolo de milho foi registrado </font>";
            }

            if(isset($_GET['wchocolate']))
            {
                echo "<font color='#6c9a5f' size='5px'> O seu pedido de bolo de pote de chocolate foi registrado </font>";
            }

            if(isset($_GET['wnutella']))
            {
                echo "<font color='#6c9a5f' size='5px'> O seu pedido de bolo de pote de nutella e ninho foi registrado </font>";
            }

            if(isset($_GET['wmaracuja']))
            {
                echo "<font color='#6c9a5f' size='5px'> O seu pedido de bolo de pote de maracujá foi registrado </font>";
            }
        ?>
        <!--ICONE CHECK-->
         <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
            <circle class="path circle" fill="none" stroke="#73AF55" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
            <polyline class="path check" fill="none" stroke="#73AF55" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
        </svg><br><br>

        <a href="login.html">Finalizar pedido</a>

    </div>
</body>
</html>