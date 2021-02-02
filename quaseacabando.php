<!DOCTYPE html>
<html>
<head>
	<title>Rolê World</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <style type="text/css">
        body{
          background-image:url('IMG/funndo.png');
          background-size: cover;
            
        }
         header{
          margin-top:-2px;
          background-image: linear-gradient(#b3ffe6, #4AC7FF);
           }
          footer{
              margin-top: 128px;
              height:35px;
              background-image: linear-gradient(#b3ffe6, #4AC7FF);
          }
    	#cabecario{
            border: 2px solid #00CED1;
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
    	.btn{
    		margin-left: 350px;
    		margin-top: -25px;
    	}
    	#quaseAcabando{
             border-radius: 10px;
            opacity:0.9;
    		background-color: white;
    		width: 500px;
    		padding-bottom: 20px;
    		margin-bottom: 50px;
    		margin:auto;	
    	}
    	.botao{
    		margin-top: 20px;
    		margin:auto;	
    		width: 200px;
    	}
    </style>
  
</head>
<body>
	 <header >
        <div id="cabecario">
            <p id="titulo">Rolê World</p>
            <img src="https://cdn4.iconfinder.com/data/icons/world-travel-guide/512/travel-13-512.png" style="width: 50px;height: 50px;background-size:couver;margin-left: 3px;margin-top:-100px;">
            <img src="http://cdn.onlinewebfonts.com/svg/img_18442.png"  style="height: 35px;width: 35px;margin-left:1280px ;margin-top: -150px;">
        <p style="font-family:Georgia;font-size:9px;margin-left: 1268px;margin-top: -69px;">Nome usuario</p>
        </div>  
    </header>
    <br><br>
	<nav>
		<div id="quaseAcabando">
			<br>
			<h4>Estamos quase acabando...</h4>
			<br>
			<div class="form-group tam shadow botao">
				<label>CPF</label>
				<input id='CPF' name="CPF" type="text" class="form-control" placeholder="">
			</div>
			<br>
			<div class="form-group tam shadow botao">
				<label>RG</label>
				<input id='RG' name="RG" type="text" class="form-control" placeholder="">
			</div>
			<br>
			<div class="form-group tam shadow botao">
				<label>Número do Cartão</label>
				<input id='numCartao' name="numCartao" type="text" class="form-control" placeholder="">
			</div>
			<br>
			<br>
			 <button id='confirma' type="submit" class="form-control btn-dark botao">Finalizar pacote</button>
		</div>
	</nav>
    <footer></footer>


     <?php

        include "contcliente.php";

        if(isset($_POST["CPF"]) && isset($_POST["RG"]) && isset($_POST["numCartao"])){

            $CPF = $_POST["CPF"];
            $RG = $_POST["RG"];
            $numCartao = $_POST["numCartao"];


            $resultado = contcliente::finalizarCadastroCliente($CPF, $RG, $numCartao);

            if ($resultado) {
                echo "<p>Os dados restantes do cliente foram cadastrados com sucesso</p>";
            } 
            else {
                echo "<p>Os dados restantes do cliente NÃO foram cadastrados com sucesso</p>";
            }
        } 

    ?>

</body>
</html>