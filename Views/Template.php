<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=0.8, user-scalable=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="icon" href="http://localhost/MVC/mhsartesanato/Assets/images/ico.png">
        <link rel="stylesheet" href="http://localhost/MVC/mhsartesanato/Assets/css/style.css">

        <?php if (file_exists("Assets/css/".$view.".css")){ ?>
            <link rel="stylesheet" href="http://localhost/MVC/mhsartesanato/Assets/css/<?php echo $view ?>.css">
        <?php }?>

        <script type="text/javascript" src="http://localhost/MVC/mhsartesanato/Assets/js/jquery.js"></script>
        <script type="text/javascript" src="http://localhost/MVC/mhsartesanato/Assets/js/script.js"></script>

        <?php if (file_exists("Assets/js/".$view.".js")){ ?>
            <script type="text/javascript" src="http://localhost/MVC/mhsartesanato/Assets/js/<?php echo $view ?>.js"></script>
        <?php }?>

        <title><?php if(isset($viewData['categoria'])) echo ucfirst($viewData['categoria']); elseif(isset($viewData[0]['nome']) and $view != 'Home') echo $viewData[0]['nome']; else echo $view ?> - MHS Artesanato</title>
    </head>
    <body>
        <header class="cabecalho">
            <div class="container">
                <a href="http://localhost/MVC/mhsartesanato" class="logo"><span>MHS</span>Artesanato</a>
                <nav class="menu">
                    <a class="home-btn" href="http://localhost/MVC/mhsartesanato">Home</a>
                    <a class="carrinho-btn" href="http://localhost/MVC/mhsartesanato/carrinho">Carrinho</a>
                    <div class="dropdown">
                        <a href="" class="dropdown-btn">Categorias</a>
                        <div class="dropdown-menu">
                            <?php foreach ($categorias as $dados){ extract($dados);?>
                                <a class="dropdown-item <?php if($viewData['categoria'] == $nome_categoria) echo "active"; ?>" href="http://localhost/MVC/mhsartesanato/home/listar_produto/<?php echo $nome_categoria?>"><?php echo ucfirst($nome_categoria)?></a>
                            <?php } ?>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <section class="main-container">
            <?php $this->loadViewInTemplate($view, $viewData); ?>
        </section>
        <footer class="rodape">
            <div class="container">
                <div class="creditos">
                    <span>WhatsApp: (69)98432-0122</span><br>
                    <span>Instagram: @mhsystem</span><br>
                    <span>Copyright: 2019 By MHSystem</span>
                </div>
                <a href="http://localhost/MVC/mhsartesanato/" class="logo"><span>MHS</span>Artesanato</a>
            </div>
        </footer>
    </body>
</html>