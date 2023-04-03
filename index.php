<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/shopping-cart.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/menu.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Scripts -->
    <script src="assets/scripts/script.js"></script>
    <title>Purple açaí - Cardápio</title>
</head>

<body>
    <header>
        <div id="header"></div>
    </header>
    <main>
        <div class="background1">
            <div class="container">
                <div class="list-itens">
                    <h1>Combos de açaí</h1>
                    <form action=" ">
                        <!--php abre-->
                        <?php
                        include "assets/scripts/index_script.php";
                        ?>
                        <!--php fecha-->
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div id="footer"></div>
    </footer>
</body>
</html>