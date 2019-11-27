$(function () {
    calcularValor();
    ajustarRodape();
});

function aumentarQuantidade($id){
    $valor = parseInt($('#'+$id+' #quantidade').val());
    if ($valor < 10){
        $valor++;
        $('#'+$id+' #quantidade').val($valor);
        calcularValor();
    }
}

function diminuirQuantidade($id){
    $valor = parseInt($('#'+$id+' #quantidade').val());
    if ($valor > 1){
        $valor--;
        $('#'+$id+' #quantidade').val($valor);
        calcularValor();
    }
}

function calcularValor() {
    $somaValor = 0;
    $linhas = $('#produtosCarrinho tr').length;
    for ($i = 1;$i <= $linhas;$i++){
        $valorTotal = $('#'+$i+' #quantidade').val() * parseFloat($('#'+$i+' #valor').text());
        $('#'+$i+' #valorTotal').text($valorTotal.toFixed(2));
        $somaValor = $somaValor + $valorTotal;
        localStorage['quantidade'+$i] = $('#'+$i+' #quantidade').val();
    }
    $('#somaTotal').text($somaValor.toFixed(2));
}

function ajustarRodape(){
    if(($('#produtosCarrinho tr').length < 4) && ($(window).width() > 990)){
        $('.rodape').css("position", "absolute");
        $('.rodape').css("bottom", "0");
    }
}

function finalizarCompra(){

}