<?php

    include_once "BancoDados.php";

    session_start();


    // as variáveis login e senha recebem os dados digitados na página anterior
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
    // Criar uma conexão
    $conexao = BancoDados::getInstance()->getConnection();

    // A variavel $result pega as varias $login e $senha, faz uma
    //pesquisa na tabela de usuarios

    $result = $conexao->prepare("SELECT * FROM `cliente` WHERE `email` = '$email' AND `senha`= '$senha'");

    // Executar a SQL
    $result->execute([$email, $senha]);
    // Checar resultado
    $result->fetchAll();

        
        

    /* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi
    bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor
    será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do
    resultado ele redirecionará para a página site.php ou retornara  para a página
    do formulário inicial para que se possa tentar novamente realizar o login */

    if($result > 0 ){
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('location:PaginaInicialMenu.php');
        echo "<script type='text/javascript'>alert('$email está logado');</script>";
    }
    else{
        unset ($_SESSION['email']);
        unset ($_SESSION['senha']);
        header('location:PaginaInicial.php');
         echo "<script type='text/javascript'>alert('$email não está cadastrado');</script>";
    }

?>