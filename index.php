<!--

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Rolê World</title>
</head>
<body>

	<h1>Rolê World</h1>

	<h2>Cadastre seu cliente</h2>
	<form method="POST">
		<p>Digite seu nome:</p>
		<input type="text" name="nome" required="">
		<p>Digite seu email:</p>
		<input type="email" name="email" required="">
		<p>Informe sua data de nascimento:</p>
		<input type="date" name="dataNasc" required="">
		<p>Digite o local de embarque desejado:</p>
		<input type="text" name="localEmbarque" required="">
		<p>Digite sua senha:</p>
		<input type="password" name="senha" required="">

		<br><br>
		<button>Cadastrar</button>

		<hr>



	</form>

	<h2>Cadastre seu Quiz</h2>
	<form method="POST">
		<p>Informe o ID:</p>
		<input type="number" name="id" required="">
		<p>Digite a data de chegada:</p>
		<input type="date" name="dataChegada" required="">
		<p>Digite a data de saída:</p>
		<input type="date" name="dataSaida" required="">
		<p>Digite a alternativa:</p>
		<input type="text" name="alternativa" required="">
		<p>Digite a resposta:</p>
		<input type="text" name="resposta" required="">
		<p>Digite a pergunta:</p>
		<input type="text" name="pergunta" required="">

		<br><br>
		<button>Cadastrar</button>

		<hr>

		

	</form>

	<?php
	/*

		include "cliente.php";

		if(isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["dataNasc"]) && isset($_POST["localEmbarque"]) && isset($_POST["senha"])){

			$nome = $_POST["nome"];
			$email = $_POST["email"];
			$dataNasc = $_POST["dataNasc"];
			$localEmbarque = $_POST["localEmbarque"];
			$senha = $_POST["senha"];


			$resultado = Cliente::cadastrarCliente($nome, $email, $dataNasc, $localEmbarque, $senha);

			if ($resultado) {
	            echo "<p>O cliente foi cadastrado com sucesso</p>";
	        } 
	        else {
		    	echo "<p>O cliente NÃO foi cadastrado com sucesso</p>";
		    }
		} 


				



		include "quiz.php";

		if(isset($_POST["id"]) && isset($_POST["dataChegada"]) && isset($_POST["dataSaida"]) && isset($_POST["alternativa"]) && isset($_POST["resposta"]) && isset($_POST["pergunta"])){

			$id = $_POST["id"];
			$dataChegada = $_POST["dataChegada"];
			$dataSaida = $_POST["dataSaida"];
			$alternativa = $_POST["alternativa"];
			$resposta = $_POST["resposta"];
			$pergunta = $_POST["pergunta"];

			//Cliente::cadastrarCompleto($nome, $idade, $sexo);
			$resultado = Cliente::cadastrarQuiz($id, $dataChegada, $dataSaida, $alternativa, $resposta, $pergunta);

			if ($resultado) {
	            echo "<p>O quiz foi cadastrado com sucesso</p>";
	        } 
	        else {
		    	echo "<p>O quiz NÃO foi cadastrado com sucesso</p>";
		    }
		} */

	?>

</body>
</html>

-->


<!DOCTYPE html>
<html lang="en" img id="fundo" src="IMG/funndo.jpg">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Home - Rolê World</title>
</head>
<style>
    #cabecario{
        height: 60px;
    }
    #botão_login{
        margin-left: 1175px;
        margin-top: 10px;
        
    }
    #botão_cadas{
        margin-left: 1245px;
        margin-top: -67px;
        
    }
    #titulo{
        font-family: Georgia;
        font-style: italic;
        font-size: 25px;
        margin-top: -60px;
        margin-left: 55px;

    }
    #foto{
        width: 20px;;
        height: 20px;
        
    }
    
  
    .card{
        margin-left: 20px;
        float: left;
        margin-top: 100px;

        border-radius: 10px;
    }
    #texto{
        margin-left: -20px;
        float: left;
        margin-top: 130px;

    }
    header{
      background-image: linear-gradient(#b3ffe6, #4AC7FF);
    }
    footer{
      margin-top: 599px;
      height:35px;
      background-image: linear-gradient(#b3ffe6, #4AC7FF);
    }
    body{
      background-image:url('IMG/funndo.png');
      background-size: cover;
    }
    
           /* {
      filter: blur(4px);
    }*/
</style>

<body>
  
    <header >
        <div id="cabecario">
            <a href="login.php"><button type="button" id="botão_login" class="btn btn-light esquerdinha">Login</button></a> <br>
            <a href="cadastro.php"><button type="button" id="botão_cadas" class="btn btn-light esquerdinha">Cadastra-se</button></a>
            <p id="titulo">Rolê World</p>
            <img src="https://cdn4.iconfinder.com/data/icons/world-travel-guide/512/travel-13-512.png" style="width: 50px;height: 50px;background-size:cover;margin-left: 3px;margin-top:-100px;"> 
        </div>        
    </header>
        <div id="texto" style="width: 18rem;height: 18rem;margin-left:50px;">
           <p style="font-family:Georgia;font-size:25px;margin-left:50px;margin-top:30px;color:black;font-style: oblique; text-align: center;">Quer encontrar o melhor destino para sua viagem? Venha com a gente!</p>
        </div>

      <nav class="container">
       
          <div class="card" style="width: 16rem;height: 18rem;margin-left: 80px;">
            
            <div class="card-body">
               <h6 class="card-title">Como a Rolê World funciona?</h6>
               <img src="http://cdn.onlinewebfonts.com/svg/img_10589.png" style="width: 30px;height: 30px;background-size: couver;margin-left: 155px;margin-top:-90px;">
               <p class="card-text">Temos um quiz que irá te mostrar o melhor destino para você fazer a melhor viagem da sua vida, acabando com a indecisão de não saber para onde viajar</p>  
             </div>
           </div>

           <div class="card" style="width: 16rem;height: 18rem;margin-left: 20px;">
             <div class="card-body">
               <h6 class="card-title">Inteligência</h6>
               <img src="https://image.flaticon.com/icons/png/512/900/900961.png" style="width: 30px;height: 30px;background-size: couver;margin-left: 100px;margin-top:-65px;">
               <p class="card-text">Possuímos um quiz extremamente inteligente que através da suas resposta irá ajudar você a encontrar sua viagens dos sonhos!</p>
               
             </div>
           </div>

           <div class="card " style="width: 16rem;height: 18rem;margin-left: 20px;">
              <div class="card-body">
                <h6 class="card-title">Os melhores preços</h6>
                <img src="https://image.flaticon.com/icons/png/512/45/45052.png" style="width: 40px;height: 40px;background-size: couver;margin-left: 150px;margin-top:-60px;">
                <p class="card-text">Além de darmos o melhor destino para você, támbem oferecemos o melhor preço para que possa aproveitar sua viagem sem se preocupar com o dinheiro!</p>
                
              </div>
            </div>
          
        
      </nav>
  </div>
<footer>    
</footer>
   
    
    
    
    
    
</body>
</html>