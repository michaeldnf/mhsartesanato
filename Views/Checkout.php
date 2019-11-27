<ol class="breadcrumb">
    <a href="http://localhost/MVC/mhsartesanato/"><li class="breadcrumb-item">Home</li></a>
    <a href="http://localhost/MVC/mhsartesanato/carrinho"><li class="breadcrumb-item">Carrinho</li></a>
    <li class="breadcrumb-item active">Checkout</li>
</ol>

<div class="carrinho-container">
    <h2>COMPRA REALIZADA COM SUCESSO!</h2>
    <table class="carrinho">
        <thead>
        <tr>
            <th>Produto</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody id="produtosCarrinho">
        <?php $i = 0; foreach ($viewData as $dados){ $i++;?>
            <tr id="<?php echo $i; ?>">
                <td>
                    <a href="http://localhost/MVC/mhsartesanato/home/produto/<?php echo $dados[0]['link_img']?>"><img src="http://localhost/MVC/mhsartesanato/Assets/images/produtos/<?php echo $dados[0]['link_img']?>.jpg"></a>
                    <p><?php echo $dados[0]['nome']?></p>
                </td>
                <td>R$ <span id="valor"><?php echo number_format($dados[0]['preco'], 2, '.', ' ');?></span></td>
                <td id="quantidade"></td>
                <td>R$ <span id="valorTotal"></span></td>
            </tr>
        <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3"></td>
                <td>Total: R$ <span id="somaTotal"></span></td>
            </tr>
        </tfoot>
    </table>
</div>