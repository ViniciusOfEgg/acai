<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <script src="assets/scripts/script.js"></script>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header><div id="header"></div></header>
        <main> 
            <div class="page-title">Carrinho de Compras</div>
            <div class="content">
            <section>
                <table class="tabela">
                    <thead>
                        <tr>
                            <th>Produto</th>
                            <th>Preço</th>
                            <th>Quantidade</th>
                            <th>Total</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include "assets/scripts/carrinho_script.php"
                        ?>
                    </tbody>
                </table>
            </section>
            <aside>
                <div class="box">
                <header>Resumo da Compra</header>
                <div class= "info">
                <div><span>sub-total</span><span>R$<?php echo $carrinho?></span></div>
                <div><span>frete</span><span>gratuito</span></div>
                
                </div>
                <footer>
                <span>Total</span>
                <span> R$ <?php echo $carrinho?></span>
                </footer>
                </div>
                <button> Finalizar Compra</button>
            </aside>
            </div>
        </main>
    <footer>
        <div id="footer"></div>
    </footer>
</body>
</html>