<ol class="breadcrumb">
    <a href="http://localhost/mhsartesanato/"><li class="breadcrumb-item">Home</li></a>
    <li class="breadcrumb-item active">Carrinho</li>
</ol>

<div class="carrinho-container">
    <h2>MEU CARRINHO</h2>
    <table class="carrinho">
        <thead>
        <tr>
            <th>Produto</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Total</th>
            <th>Excluir</th>
        </tr>
        </thead>
        <tbody id="produtosCarrinho">
        <?php $i = 0; foreach ($viewData as $dados){ $i++;?>
        <tr id="<?php echo $i; ?>">
            <td>
                <a href="http://localhost/mhsartesanato/home/produto/<?php echo $dados[0]['link_img']?>"><img src="http://localhost/mhsartesanato/Assets/images/produtos/<?php echo $dados[0]['link_img']?>.jpg"></a>
                <p><?php echo $dados[0]['nome']?></p>
            </td>
            <td>R$ <span id="valor"><?php echo number_format($dados[0]['preco'], 2, '.', ' ');?></span></td>
            <td><span onclick="diminuirQuantidade(<?php echo $i; ?>)">-</span> <input id="quantidade" readonly="true" type="text" value="1" maxlength="2"> <span onclick="aumentarQuantidade(<?php echo $i; ?>)">+</span></td>
            <td>R$ <span id="valorTotal"></span></td>
            <td><form action="http://localhost/mhsartesanato/carrinho/excluir" method="post"><button name="excluir" value="<?php echo $dados[0]['id_produto']?>">x</button></form></td>
        </tr>
        <?php } ?>
        </tbody>
        <tfoot>
        <tr>
            <td colspan="3"></td>
            <td>Total: R$ <span id="somaTotal"></span></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td colspan="2">
                <a onclick="finalizarCompra()" href="http://localhost/mhsartesanato/carrinho/checkout">Finalizar Compra</a>
            </td>
        </tr>
        </tfoot>
    </table>
</div>