<a href="http://localhost/mhsartesanato/home/produto/brinco-amarelo"><img class="bannerPromo" src="http://localhost/mhsartesanato/Assets/images/bannerPromo.jpg"></a>
<div class="lista-produto">
    <h4>Últimos Lançamentos</h4>
    <div class="container-produto">
        <?php
            foreach ($viewData as $dados){ extract($dados);?>
                <div class="produto">
                    <a href="http://localhost/mhsartesanato/home/produto/<?php echo $link_img ?>"><img src="http://localhost/mhsartesanato/Assets/images/produtos/<?php echo $link_img ?>.jpg"></a>
                    <h4><?php echo $nome?></h4>
                    <p><?php echo $descricao?></p>
                    <h3>R$ <?php echo number_format($preco, 2, ',', ' '); ?><span>à vista.</span></h3>
                    <form action="http://localhost/mhsartesanato/carrinho" method="post">
                        <button class="produto-btn" name="btn" value="<?php echo $id_produto;?>">Comprar</button>
                    </form>
                </div>
            <?php
            }
            ?>
    </div>
</div>