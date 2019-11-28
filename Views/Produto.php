<ol class="breadcrumb">
    <a href="http://localhost/mhsartesanato/"><li class="breadcrumb-item">Home</li></a>
    <a href="http://localhost/mhsartesanato/home/listar_produto/<?php echo $viewData[0]['nome_categoria'];?>"><li class="breadcrumb-item"><?php echo ucfirst($viewData[0]['nome_categoria']);?></li></a>
    <li class="breadcrumb-item active"><?php echo $viewData[0]['nome'];?></li>
</ol>

<div class="produto-container">
    <img src="http://localhost/mhsartesanato/Assets/images/produtos/<?php echo $viewData[0]['link_img'];?>.jpg">
    <div class="desc-produto">
        <h2><?php echo $viewData[0]['nome'];?></h2>
        <p><?php echo $viewData[0]['descricao'];?></p>
        <h3>R$ <?php echo number_format($viewData[0]['preco'], 2, ',', ' ');?><span>à vista.</span></h3>
        <form action="http://localhost/mhsartesanato/carrinho" method="post">
            <button class="produto-btn" name="btn" value="<?php echo $viewData[0]['id_produto'];?>">Comprar</button>
        </form>
    </div>
</div>
<div class="lista-produto">
    <h4>Produtos Relacionados</h4>
    <div class="container-produto">
        <?php
        unset($viewData['produtos_relacionados']['categoria']);
        foreach ($viewData['produtos_relacionados'] as $dados){  extract($dados); ?>
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