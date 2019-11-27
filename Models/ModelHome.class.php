<?php
    class ModelHome{
        private $instancia;

        public function __construct(){
            $this->instancia = Banco::instanciar();
        }

        public function getProdutos(){
            $dados = array();

            $sql = "SELECT id_produto, nome, descricao, preco, link_img FROM tb_produtos ORDER BY id_produto DESC LIMIT 6";
            $sql = $this->instancia->prepare($sql);
            $sql->execute();

            if ($sql->rowCount() > 0){
                $dados = $sql->fetchAll();
            }

            return $dados;
        }

        public function getProduto($nome){
            $produto = $nome[0];
            $dados = array();

            $sql = "SELECT p.id_produto, p.nome, p.descricao, p.preco, p.link_img, c.nome_categoria FROM tb_produtos AS p INNER JOIN tb_categorias AS c WHERE link_img = '$produto' AND p.categoria_id = c.id_categoria";
            $sql = $this->instancia->prepare($sql);
            $sql->execute();

            if ($sql->rowCount() > 0){
                $dados = $sql->fetchAll();
            }

            return $dados;
        }

        public function getCategorias(){
            $dados = array();

            $sql = "SELECT nome_categoria FROM tb_categorias";
            $sql = $this->instancia->prepare($sql);
            $sql->execute();

            if ($sql->rowCount() > 0){
                $dados = $sql->fetchAll();
            }

            return $dados;
        }

        public function getProdutosCategoria($categoria){
            $categoria = $categoria[0];
            $dados = array();

            $sql = "SELECT id_produto, nome, descricao, preco, link_img FROM tb_produtos WHERE (SELECT id_categoria FROM tb_categorias WHERE nome_categoria = '$categoria') = categoria_id";
            $sql = $this->instancia->prepare($sql);
            $sql->execute();

            if ($sql->rowCount() > 0){
                $dados = $sql->fetchAll();
            }

            $dados['categoria'] = $categoria;
            return $dados;
        }
    }
?>