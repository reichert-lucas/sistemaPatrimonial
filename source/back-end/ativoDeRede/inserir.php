<?php
    include_once '../conexao.class.php';

    $banco = new Database();

    if(isset($_POST['descricao']) && isset($_POST['mac']) && isset($_POST['responsavelSelecionado']) && isset($_POST['localSelecionado'])){
        $idLocal = $_POST['localSelecionado'];
        $idResponsavel = $_POST['responsavelSelecionado'];
        $descricao = $_POST['descricao'];
        $mac = $_POST['mac'];
        //var_dump($_POST);
        
        $campos = "'$descricao', '$mac', $idResponsavel, $idLocal";
        if($banco->inserir("ativoDeRede", "descricao, mac, idResponsavel, idLocal", $campos)){
            echo "Dados inseridos Corretamente";
        }else{
            echo "Erro ao inserir no banco!";    
        }
        $banco->__destruct();
        echo "<script>location.href='../../front-end/alteracao/patrimonio.php';</script>";
        
    }else{
        echo "<script>
        alert('Verifique se todos os campos foram preenchidos');
        location.href='../../front-end/alteracao/patrimonio.php';
        </script>";
    }
    
    
?>

