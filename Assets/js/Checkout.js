$(function () {
   carregarQuantidade();
   localStorage.clear();
   ajustarRodape();
});

function carregarQuantidade(){
    for($i = 1;$i <= localStorage.length;$i++){
        $('#'+$i+' #quantidade').text(localStorage['quantidade'+$i]);
    }
    calcularValor();
}

function calcularValor() {
    $somaValor = 0;
    $linhas = $('#produtosCarrinho tr').length;
    for ($i = 1;$i <= $linhas;$i++){
        $valorTotal = parseInt($('#'+$i+' #quantidade').text()) * parseFloat($('#'+$i+' #valor').text());
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