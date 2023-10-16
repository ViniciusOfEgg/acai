<?php 
    $carrinho = 0;
    if(isset($_SESSION['carrinho'])){
        foreach($_SESSION['carrinho'] as $key => $value) {
            $total = $value['preco'] * $value['quantidade'];
    ?>
    
                    <tr>
                    <td>
                        <div class="product">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-s/18/13/98/f6/acai-no-copo-com-granola.jpg" width="90px" alt="">
                        <div class="info">
                            <div class="name"><?php echo $value['nome'];?></div>
                            <div class="category"><?php echo $value['descricao'];?></div>
                        </div>
                    </div>
                    </td>
                    <td>R$ <?php echo $value['preco'];?></td>
                    <td>
                        <div class="qty">
                            <button type="submit" name="diminuir" value="<?php echo $key?>">-</button>
                            <span><?php echo $value['quantidade'];?></span>
                            <button type="submit" name="add" value="<?php echo $key?>">+</button>
                        </div>

                    </td>
                    <td>R$ <?php echo $total;?></td>
                    <td>
                        <button type='submit' name='remover' value='<?php echo $key;?>' class="remove"><i class='bx bx-x'></i></button>
                    </td>
                    </tr>
            
<?php  
        $carrinho += $total;
    }
            }else{
                echo "Adicione produtos ao seu carrinho!";
        }

    if(isset($_GET['remover'])){
        $idProduto = (int) $_GET['remover'];
        if(isset($_SESSION['carrinho'][$idProduto])){
            if(isset($_SESSION['carrinho'][$idProduto])){
                unset($_SESSION['carrinho'][$idProduto]);
            }
            echo '<script>window.location.href = "carrinho.php"</script>';
        }
    }

    if(isset($_GET['add'])){
        $idProduto = (int) $_GET['add'];
        if(isset($_SESSION['carrinho'][$idProduto])){
                $_SESSION['carrinho'][$idProduto]['quantidade']++;
        }
            echo '<script>window.location.href = "carrinho.php"</script>';
        }

    if(isset($_GET['diminuir'])){
        $idProduto = (int) $_GET['diminuir'];
        if(isset($_SESSION['carrinho'][$idProduto])){
            if($_SESSION['carrinho'][$idProduto]['quantidade'] <= 1){
                unset($_SESSION['carrinho'][$idProduto]);
            } else {
                $_SESSION['carrinho'][$idProduto]['quantidade']--;
            }
            echo '<script>window.location.href = "carrinho.php"</script>';
        }
    }


?>


                    