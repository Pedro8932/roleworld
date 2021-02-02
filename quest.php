<!DOCTYPE html>
<html>
<head>
	<title>Questão N - Rolê World</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	<style type="text/css">
	 	
	 	header{
	 		margin-top:-2px;
            background-image: linear-gradient(lightblue, #4AC7FF);
         }
        footer{
            margin-top: 73px;
            height:35px;
            background-image: linear-gradient(#4AC7FF, lightblue);
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
        .meio{
        	margin-top: -350px;
        	margin-left: 80px;
        }
        .opc{

        	margin-left: 75px;
		}
        h4{
        	text-align: center;
        }
        .quest{
    		width: 500px;
    		padding-bottom: 20px;
    		margin-bottom: 50px;	
    	}
        #imagem {
		width: 1100px;
		height:200px;
		}

		#texto {
		position: absolute;
		margin-top: -30px;
		}
        

		/*style="background-color:#F0F8FF;"
		*/

		#pergunta{
		margin-left:-45px;
		margin-bottom: 20px;
		}


		.io{
			margin-left: -25px;
		}

		.iao{
			margin-left: -55px;
			margin-top: 10px;
		}
    </style>

	
</head>

	
	<?php

		include "mostrar.php";

		$pergunta =  $_GET["id"];

		$resultado = mostrar::recuperarQuiz($pergunta);

		$resul = mostrar::recuperarAlternativa($pergunta);

		$pega = mostrar::recuperarTodos();
		        

	?>

<script type="text/javascript">
		
	$(document).ready(function(){
		let cont = 0;
	    $("#muda").click(function(){
	    	cont+=1;
	    	console.log('cu');
	        $(location).attr('href', 'quest.php?id='+cont);
	    });

	    
	});


</script>


<body style="background-image:url('https://media2.giphy.com/media/4N1FZFE5AGO3qrUGkw/source.gif');background-size:cover;">
	<header>
        <div id="cabecario">
            <p id="titulo">Rolê World</p>
            <img src="https://cdn4.iconfinder.com/data/icons/world-travel-guide/512/travel-13-512.png" style="width: 50px;height: 50px;background-size:cover;margin-left: 3px;margin-top:-100px;">
            <img src="http://cdn.onlinewebfonts.com/svg/img_18442.png"  style="height: 35px;width: 35px;margin-left:1280px ;margin-top: -150px;">
        <p style="font-family:Georgia;font-size:9px;margin-left: 1268px;margin-top: -69px;">Nome usuario</p>
        </div>  
    </header>
    <br>
	<h4>Qual o seu destino ideal?</h4>
	<div class="quest container">
		<form method="POST">
			

					<img src="https://www.flaticon.com/svg/static/icons/svg/3534/3534284.svg" style="height:450px;width:350px;margin-left:55px;opacity:0.8;">
				<div class="row meio">
					<input id='pergunta' name="pergunta" type="text" class="form-control io" value="<?php
					echo $resultado[0]["pergunta"];
					?>

					" placeholder=""/>
					<br>
					<div class="col-sm-10 ">
						<div class="form-check opc">
							<input class="form-check-input iao" type="radio" name="gridRadios" id="gridRadios2" value="option2">
							<label>
								<input class="form-control io"  type="text" class="form-control io"  value="<?php
							echo $resul[0]["alternativa"];
							?>"
							>
							</label>
							
						</div>
						<div class="form-check opc">
							<input class="form-check-input iao" type="radio" name="gridRadios" id="gridRadios2" value="option2">
							<label>
								<input class="form-control io" type="text" class="form-control io"   value="<?php
							echo $resul[1]["alternativa"];
							?>">
							</label>
							
						</div>
						<div class="form-check opc">
							<input class="form-check-input iao" type="radio" name="gridRadios" id="gridRadios2" value="option2">
							<label>
								<input class="form-control io" type="text" class="form-control io"   value="<?php
							echo $resul[2]["alternativa"];
							?>"
							>
							</label>
							
						
							
						</div>
						<div class="form-check opc">
							<input class="form-check-input iao" type="radio" name="gridRadios" id="gridRadios2" value="option2">
							<label>
								<input class="form-control io" type="text" class="form-control io"   value="<?php
							echo $resul[3]["alternativa"];
							?>"
							>
							</label>
							
							
						</div>
						<br>
						<br>
						<br>
						<!--
						<a href="quest2.html"><button type="button" class="btn btn-light opc" style="width:120px;">Confirmar</button></a> 
						-->
						<a><button id="muda" class="btn btn-light opc" style="width:120px;">Confirmar</button></a>

					</div>
				</div>


		</form>


		
	</div>
	<footer></footer>
	<!--
	<img id="imagem" src="http://metropolitanafm.uol.com.br/wp-content/uploads/2016/02/239755-1000-14460854401.png.jpeg"/>
	<div id="texto">Texto que fica sobre a imagem</div>
	-->


</body>


</html>