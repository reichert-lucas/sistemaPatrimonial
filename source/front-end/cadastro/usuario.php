<html>
    <head>
        <title> Cadastro de Usuário </title>
        <link href="../css/bootstrap.css" rel="stylesheet">
        <script type="text/javascript" src="../js/batman.js"></script>
        <meta charset="UTF-8"/>
        <?php
            session_start();
            if(!isset($_SESSION['usuario'])){
                echo "<script> location.href='../login/index.php' </script>";
            }
        ?>
    </head>

    <body>
        <div id="geral">
            <input type="hidden" id="tipoTela" name="tipoTela" value="cadastrar">
            <input type="hidden" id="tela" name="tela" value="usuario">

            <?php include '../includes/cabecalho.html'?>
            <?php include '../includes/menuLateralCollapsedSidebar.html'?>

            <script> confMenus();</script>

            <div id="conteudo">
                <div id="container-cadastro">
                    <form action='../../back-end/usuario/inserir.php' method='POST'>
                        <h2>Cadastro</h2>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Usuario</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Escolha o seu apelido">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Sobrenome</label>
                            <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Sobrenome">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">E-mail</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Digite um e-mail válido (Ex: exemplo@exemplo.com)">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Senha</label>
                            <input type="password" class="form-control" id="senha1" name="senha1" placeholder="Digite sua senha">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Senha</label>
                            <input type="password" class="form-control" id="senha2" name="senha2" placeholder="Repita a sua senha">
                        </div>
                        
                        
                        <button type="submit" class="btn btn-success btn-block">Cadastrar</button>

                        
                
                    </form>
                </div>
                 
            </div>
            <?php include '../includes/rodape.html'?>
        </div>
    
       

    </body>
</html>