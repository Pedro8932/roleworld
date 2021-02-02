<!DOCTYPE html>
<html>
<head>
	<title>Rolê World-Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <style type="text/css">
        header{
            background-image: linear-gradient(#b3ffe6, #4AC7FF);
         }
        footer{
            margin-top: 153px;
            height:35px;
            background-image: linear-gradient(#b3ffe6, #4AC7FF);
        }
    	#cabecario{
            border: 1px solid #00CED1;
            height: 60px;
        }
        #titulo{
            font-family: Georgia;
            font-style: italic;
            font-size: 25px;
            margin-left:55px;
        }
        h4{
    		text-align: center;
    	}
    	#lik{
    		text-align: center;
    		font-size: 14px;
    	}
    	.btn{
    		margin-left: 350px;
    		margin-top: -25px;
    	}
    	#login{
            border-radius: 10px;
    		background-color: white;
    		width: 500px;
    		padding-bottom: 20px;
    		margin:auto;
            opacity: 1;

    	}
    	.botao{
            background-color: white;
    		margin-top: 20px;
    		margin:auto;	
    		width: 200px;
    	}
    	.img{
    		width:35px;
    		height:35px;
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
            <img src="https://cdn4.iconfinder.com/data/icons/world-travel-guide/512/travel-13-512.png" style="width: 50px;height: 50px;background-size:cover;margin-left: 3px;margin-top:-80px;"> 
        </div>        
    </header>
    <br><br>
	<nav>
        <form method="POST" action="logando.php" id="formlogin" name="formlogin" >
            
            <fieldset id="fie">
        		<div id="login" class="shadow"  style="opacity:0.9">
        			<br>
        			<img src="IMG/unlock.png" class="img" style="margin-left:160px;margin-bottom:-50px;">
        			<h4>Login</h4>
        			<br>
        			<div class="form-group tam shadow botao">
        				<label>E-mail</label>
        				<input id='email' name="email" type="text" class="form-control" placeholder="">
        			</div>
        			<br>
        			<div class="form-group tam shadow botao">
        				<label>Senha</label>
        				<input id='senha' name="senha" type="password" class="form-control" placeholder="">
        			</div>
        			<br>
        			<p id="lik"><a href="cadastro.php">Não tem uma conta? Cadastre-se aqui</a></p>
        			<br>
                     <input type="submit" class="btn-dark" value="LOGAR" style="width: 120px; margin-left: 195px;" >

        			<a href="index.php"><img src="IMG/return.png" class="img rounded-circle" style="margin-top: -55px;margin-left:90px; background-color: white; padding: 5px;"></a>
        		</div>
            </fieldset>
	   </form>
    </nav>
    <footer></footer>




</body>


</html>