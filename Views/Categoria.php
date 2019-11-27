<div class="lista-produto">
    <ol class="breadcrumb">
        <a href="http://localhost/MVC/mhsartesanato"><li class="breadcrumb-item">Home</li></a>
        <li class="breadcrumb-item active"><?php echo ucfirst($categoria); ?></li>
    </ol>
    <h4>Destaque em <?php echo ucfirst($categoria); ?></h4>
    <div class="container-produto">
        <?php
        unset ($viewData['categoria']);
        foreach ($viewData as $dados){  extract($dados); ?>
            <div class="produto">
                <a href="http://localhost/MVC/mhsartesanato/home/produto/<?php echo $link_img ?>"><img src="http://localhost/MVC/mhsartesanato/Assets/images/produtos/<?php echo $link_img ?>.jpg"></a>
                <h4><?php echo $nome?></h4>
                <p><?php echo $descricao?></p>
                <h3>R$ <?php echo number_format($preco, 2, ',', ' ')?><span>à vista.</span></h3>
                <form action="http://localhost/MVC/mhsartesanato/carrinho" method="post">
                    <button class="produto-btn" name="btn" value="<?php echo $id_produto;?>">Comprar</button>
                </form>
            </div>
        <?php
        }
        ?>
    </div>
</div>