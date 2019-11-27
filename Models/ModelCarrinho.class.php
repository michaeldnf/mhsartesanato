<?php
    class ModelCarrinho{
        public function __construct(){
            session_start();
            $this->instancia = Banco::instanciar();
        }

        public function getCarrinho(){
            if(isset($_SESSION['carrinho'])){
                return $_SESSION['carrinho'];
            }else return header('Location: http://localhost/MVC/mhsartesanato/');
        }

        public function adcionarProduto($id_produto){
            $dados = array();
            $controle = true;
            if(isset($_SESSION['contCarrinho']) and $_SESSION['contCarrinho'] > 0){
                for($i = 0;$i <= $_SESSION['contCarrinho'];$i++){
                    if(isset($_SESSION['carrinho'][$i][0]['id_produto']) and $_SESSION['carrinho'][$i][0]['id_produto'] == $id_produto){
                        $controle = false;
                    }
                }
            }

            if($controle){
                $sql = "SELECT id_produto, nome, preco, link_img FROM tb_produtos WHERE id_produto = '$id_produto'";
                $sql = $this->instancia->prepare($sql);
                $sql->execute();

                if ($sql->rowCount() > 0){
                    $dados = $sql->fetchAll();

                    if(!isset($_SESSION['contCarrinho'])){
                        $_SESSION['contCarrinho'] = 0;
                    }else{
                        $_SESSION['contCarrinho']++;
                    }

                    $_SESSION['carrinho'][$_SESSION['contCarrinho']] = $dados;
                }
            }
        }

        public function excluirProduto($id_produto){
            extract($id_produto);
            if($_SESSION['contCarrinho'] > 0){
                for($i= 0;$i <= $_SESSION['contCarrinho'];$i++){
                    if(isset($_SESSION['carrinho'][$i][0]['id_produto']) and $_SESSION['carrinho'][$i][0]['id_produto'] == $excluir){
                        unset($_SESSION['carrinho'][$i]);
                    }
                }
            }else{
                $this->limparCarrinho();
            }
        }

        public function limparCarrinho(){
            unset($_SESSION['carrinho']);
            unset($_SESSION['contCarrinho']);
        }
    }
    ?>