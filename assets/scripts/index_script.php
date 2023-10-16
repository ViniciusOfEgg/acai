<?php
    $items = array(['nome'=>'Big trufadão 770ml',       'imagem'=>'assets/images/acai-copo.jpg',        'preco'=>'24.99','descricao'=>'morango,gotas de chocolate,creme de leite ninho,creme de avelâ.'],
                    ['nome'=>'Frutamix 770ml',          'imagem'=>'assets/images/acai-copo.jpg',        'preco'=>'23.99','descricao'=>'banana,moranjo,kiwi,leite em pó,leite condensado.'],
                    ['nome'=>'Limão purple 770ml',      'imagem'=>'assets/images/acai-copo.jpg',        'preco'=>'19.99','descricao'=>'leite em pó,leite condensado,mousse de limão,abacaxi.'],
                    ['nome'=>'Maracuja purple 770ml',   'imagem'=>'assets/images/acai-copo.jpg',        'preco'=>'21.99','descricao'=>'mousse de maracuja,leite em pó,leite condensado,pessego.'],   
                    ['nome'=>'Morango purple',          'imagem'=>'assets/images/acai-copo.jpg',        'preco'=>'22.99','descricao'=>'morango,mousse de morango,leite em pó,leite condensado.'],
                    ['nome'=>'Tradicionar purple',      'imagem'=>'assets/images/acai-copo.jpg',        'preco'=>'19.99','descricao'=>'banana,leite,condensado,leite em pó,granola'],
                    ['nome'=>'Trufado purple',          'imagem'=>'assets/images/acai-copo.jpg',        'preco'=>'24.99','descricao'=>'creme de avelã,morango,leite em pó,kitkat,canudo walfer.'],
                    ['nome'=>'Trufado ninho',           'imagem'=>'assets/images/acai-copo.jpg',        'preco'=>'24.99','descricao'=>'creme de lite ninho,morango,leite condensado,leite em pó.'],
                    ['nome'=>'Trufado ovomaltine',      'imagem'=>'assets/images/acai-copo.jpg',        'preco'=>'24.99','descricao'=>'chocowaffer,creme de avelã,ovomaltine,morango.'],
                    ['nome'=>'Trufado tradicional',     'imagem'=>'assets/images/acai-copo.jpg',        'preco'=>'19.99','descricao'=>'creme de avelã,morango,leite em pó,leite condensado.']
                                            );
    foreach ($items as $key => $value){
?>
    <div class="itens">
        <div class="item">
            <img src="<?php echo $value['imagem']?>" width="100px" alt="açai">
            <div class="buttons">
            <button type="submit" name="adicionar" value="<?php echo $key?>">
                Adicionar
            </button>
            </div>
            <p><?php echo $value['nome']?></p>
            <div class="info">
                <p><?php echo $value['descricao']?></p>
            </div>
            <div class="preco">
                <p>R$<?php echo $value['preco']?></p>
            </div>
        </div>
    </div>    
<?php
     }

     if(isset($_GET['adicionar'])){
        $idProduto = $_GET['adicionar'];
        if(isset($items[$idProduto])){
            if(isset($_SESSION['carrinho'][$idProduto])){
                $_SESSION['carrinho'][$idProduto]['quantidade']++;
            }else{
                $_SESSION['carrinho'][$idProduto] = array('quantidade'=>1,'nome'=>$items[$idProduto]['nome'],'preco'=>$items[$idProduto]['preco'],'imagem'=>$items[$idProduto]['imagem'],'descricao'=>$items[$idProduto]['descricao']);
            }
            echo '<script>window.location.href = "carrinho.php"</script>';
        }
    }

?>