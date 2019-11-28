<?php
    class ControllerCarrinho extends ControllerHelper{
        public function index(){
            $dados = array();

            $modelCarrinho = new ModelCarrinho();
            if (isset($_POST['btn'])){
                extract(filter_input_array(INPUT_POST));
                $modelCarrinho->adcionarProduto($btn);
            }

            $dados = $modelCarrinho->getCarrinho();
            $this->loadTemplate("Carrinho", $dados);
        }

        public function excluir(){
            $modelCarrinho = new ModelCarrinho();
            $modelCarrinho->excluirProduto(filter_input_array(INPUT_POST));
            header('Location: http://localhost/mhsartesanato/carrinho/');
        }

        public function checkout(){
            $modelCarrinho = new ModelCarrinho();
            $dados = $modelCarrinho->getCarrinho();
            $this->loadTemplate('Checkout', $dados);
            $modelCarrinho->limparCarrinho();
        }
    }
?>