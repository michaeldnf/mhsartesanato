<?php
    class ControllerHome extends ControllerHelper{
        public function index(){
            $dados = array();
            $modelHome = new ModelHome();
            $dados = $modelHome->getProdutos();
            $this->loadTemplate("Home", $dados);
        }

        public function listar_produto($categoria){
            $modelHome = new ModelHome();
            $dados = $modelHome->getProdutosCategoria($categoria);
            $this->loadTemplate("Categoria", $dados);
        }

        public function produto($produto){
            $modelHome = new ModelHome();
            $dados = $modelHome->getProduto($produto);
            $categoria = array(0 => $dados[0]['nome_categoria']);
            $dados['produtos_relacionados'] = $modelHome->getProdutosCategoria($categoria);
            $this->loadTemplate("Produto", $dados);
        }
    }
?>