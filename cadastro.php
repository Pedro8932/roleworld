<!DOCTYPE html>
<html>
<head>
	<title>Rolê World-Cadastro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <style type="text/css">
    	#cabecario{
            border: 1px solid #00CED1;
            height: 60px;
        }
        #titulo{
            font-family: Georgia;
            font-style: italic;
            font-size: 25px;
            margin-left:55px;
            margin-top: 10px;

        }
    	h4{
    		text-align: center;
    	}
    	#esquerda{
    		padding-top: 20px;
    		padding-bottom: 20px;
    		margin-left: 55px;
    		width: 250px;
    		float: left;
    	}
    	#direita{
    		padding-top: 20px;
    		padding-bottom: 12px;
    		margin-top: -298px;
    		margin-right: 55px;
    		width: 250px;
    		float: right;
    	}
    	.btn{
    		margin-left: 350px;
    		margin-top: -25px;
    	}
    	#cadastro{
             border-radius: 10px;
    		background-color: white;
    		width: 700px;
    		padding-bottom: 30px;

    		margin:auto;	
    	}
    	.botao{
    		margin-top: 20px;
    		margin:auto;	
    		width: 200px;
    	}
    	.img{
    		width:35px;
    		height:35px;
    	}
        .imge{
            width:50px;
            height:50px;
            margin-top: 10px;
            float: right;
            margin-right: -268px; 
        }
        header{
            background-image: linear-gradient(#b3ffe6, #4AC7FF);         }
        footer{
            margin-top: 109px;
            height:35px;
            background-image: linear-gradient(#b3ffe6, #4AC7FF);
        }
        body{
          background-image:url('IMG/funndo.png');
          background-size: cover;
            
        }
    </style>
  



</head>
<body>
	<header >
        <div id="cabecario">
            <p id="titulo">Rolê World</p>
            <img src="https://cdn4.iconfinder.com/data/icons/world-travel-guide/512/travel-13-512.png" style="width: 50px;height: 50px;background-size:couver;margin-left: 3px;margin-top:-100px;">
        </div>  
    </header>
    <br>
	<nav>
		<div id="cadastro" style="opacity:0.9">
			<br>
			<h4>Cadastre-se aqui</h4>
			<br>
            <form method="POST">
                <div id="esquerda">
                
                    <div class="form-group tam shadow botao">
                        <label>E-mail*</label>
                        <input id='email' name="email" type="text" class="form-control" placeholder="">
                    </div>
                    <br>
                    <div class="form-group tam shadow botao">
                        <label>Nome*</label>
                        <input id='nome' name="nome" type="text" class="form-control" placeholder="">
                    </div>
                    <br>
                    <div class="form-group tam shadow botao">
                        <label>Data de Nascimento*</label>
                        <input id='data' name="dataNasc" type="date" class="form-control" placeholder="">
                    </div>
                </div>
                <br style="clear: both;">
                    <div id="direita">
                        <div class="form-group tam shadow botao">
                            <label>Local de Embarque*</label>
                            <input id='localEmbarque' name="localEmbarque" type="text" class="form-control" placeholder="">
                        </div>
                        <br>
                        <div class="form-group tam shadow botao">
                            <label>Senha*</label>
                            <input id='senha' name="senha" type="password" class="form-control" placeholder="">
                        </div>
                        <br>
                        <br>
                    <div class="form-group tam">
                       <button id='confirma' type="submit" class="form-control btn-dark botao">Confirmar</button>
                       <br>
                       
                    </div>

                </div>
            </form>
			<a href="index.php"><img src="IMG/return.png" class="img rounded-circle" style="margin-top:25px; margin-left: 30px;background-color: white; padding: 5px;"></a>	
            <a href="PaginaInicialMenu.php"><img src="IMG/hghghg.jpg" class="imge rounded-circle" ></a>
		</div>
	</nav>
    <footer></footer>



    <?php

        include "cliente.php";

        if(empty($_POST["nome"]) && empty($_POST["email"]) && empty($_POST["dataNasc"]) && empty($_POST["localEmbarque"]) && empty($_POST["senha"]) ){
              echo  "<script>alert('PREENCHA TODOS OS CAMPOS');</script>";
        }


        else if(isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["dataNasc"]) && isset($_POST["localEmbarque"]) && isset($_POST["senha"])){


            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $dataNasc = $_POST["dataNasc"];
            $localEmbarque = $_POST["localEmbarque"];
            $senha = $_POST["senha"];

           // $_SESSION["email"] = $email;
            //$_SESSION["senha"] = $senha;
            //echo $_SESSION["email"];


            $resultado = Cliente::cadastrarCliente($nome, $email, $dataNasc, $localEmbarque, $senha);

            if ($resultado) {
                echo "<p>O cliente foi cadastrado com sucesso</p>";
            } 
            else {
                echo "<p>O cliente NÃO foi cadastrado com sucesso</p>";
            }
        } 




        include_once "BancoDados.php";

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

</body>
</html>