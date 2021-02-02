<?php
	/*
		// CLIENTE ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		include "cliente.php";

		//$resultado2 = cliente::cadastrarCliente("Calango Lindão", "calango@gmail.com", "2000-01-05", "SP","lango1234");

		$resultado = cliente::cadastrarCliente("Josefino", "josefino@hotmail.com", "1970-11-27", "SC", "jose1234fino");
		//$resultado = Cliente::cadastrarCliente($nome, $email, $dataNasc, $localEmbarque, $senha);
		if ($resultado) {
            echo "<p>O cliente foi cadastrado com sucesso</p>";
        } 
        else {
	    	echo "<p>O cliente NÃO foi cadastrado com sucesso</p>";
	    }
		

		$resultado1 = cliente::cadastrarCliente("Claudinho", "clauclau@gmail.com", "1990-10-21", "MG", "clau780");
		//$resultado = Cliente::cadastrarCliente($nome, $email, $dataNasc, $localEmbarque, $senha);
		if ($resultado1) {
            echo "<p>O cliente foi cadastrado com sucesso</p>";
        } 
        else {
	    	echo "<p>O cliente NÃO foi cadastrado com sucesso</p>";
	    }
		
	  
		
	    echo "<p>Todos os clientes:";
	    print_r(cliente::retornarCliente());

	    include_once "deletar.php";
	    cliente::deletarCliente("josefino@hotmail.com");
	    print_r(cliente::retornarCliente());
		
	   
	    /*
		EDITAR NAO ROLOU RS

	    print_r(cliente::retornarCliente());

	    cliente::editarCliente("Cleber Ronaldo", "cleber@hotmail.com", "1998-87-30", "MG", "cleber123123");

	    print_r(cliente::retornarCliente());
		

	echo "<hr>";
	// QUIZ ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	include "quiz.php";
	$resultado = quiz::cadastrarQuiz("2021-08-09", "2021-08-20", "soou uma alternativa", "sou uma resposta", "sou uma pergunta?");

	if ($resultado) {
        echo "<p>O quiz foi cadastrado com sucesso</p>";
    } 
    else {
    	echo "<p>O quiz NÃO foi cadastrado com sucesso</p>";
    }
	
	echo "<p>Todos os quizes:";
    print_r(quiz::retornarQuiz());


    

	$resultado1 = quiz::cadastrarQuiz("2091-03-01", "2091-03-10", "soou uma outra alternativa", "sou uma outra resposta", "eu sou uma pergunta?");

	if ($resultado1) {
        echo "<p>O quiz foi cadastrado com sucesso</p>";
    } 
    else {
    	echo "<p>O quiz NÃO foi cadastrado com sucesso</p>";
    }
	
	echo "<p>Todos os quizes:";
    print_r(quiz::retornarQuiz());



    include_once "deletar.php";
    quiz::deletarQuiz(1);
    echo "<br>";
    print_r(quiz::retornarQuiz());


*/

    //////////////////////////////////

	
/*

    include "quiz.php";

		//$id, $dataChegada, $dataSaida, $alternativa, $pergunta

		$resultado1 = quiz::cadastrarQuiz("Você irá viajar com quem?");
		//$resultado = Cliente::cadastrarCliente($nome, $email, $dataNasc, $localEmbarque, $senha);
		if ($resultado1) {
            echo "<p>O quiz1 foi cadastrado com sucesso</p>";
        } 
        else {
	    	echo "<p>O quiz1 NÃO foi cadastrado com sucesso</p>";
	    }




	    $resultado2 = quiz::cadastrarQuiz("Qual o tipo financeiro de sua viagem?");
		//$resultado = Cliente::cadastrarCliente($nome, $email, $dataNasc, $localEmbarque, $senha);
		if ($resultado2) {
            echo "<p>O quiz2 foi cadastrado com sucesso</p>";
        } 
        else {
	    	echo "<p>O quiz2 NÃO foi cadastrado com sucesso</p>";
	    }






	    $resultado3 = quiz::cadastrarQuiz("Sua viagem será:");
		//$resultado = Cliente::cadastrarCliente($nome, $email, $dataNasc, $localEmbarque, $senha);
		if ($resultado3) {
            echo "<p>O quiz3 foi cadastrado com sucesso</p>";
        } 
        else {
	    	echo "<p>O quiz3 NÃO foi cadastrado com sucesso</p>";
	    }





	     $resultado4 = quiz::cadastrarQuiz("Você deseja ir a um lugar com clima:");
		//$resultado = Cliente::cadastrarCliente($nome, $email, $dataNasc, $localEmbarque, $senha);
		if ($resultado4) {
            echo "<p>O quiz4 foi cadastrado com sucesso</p>";
        } 
        else {
	    	echo "<p>O quiz4 NÃO foi cadastrado com sucesso</p>";
	    }
	    




	    $resultado5 = quiz::cadastrarQuiz("Qual a duração desejada da sua viagem?");
		//$resultado = Cliente::cadastrarCliente($nome, $email, $dataNasc, $localEmbarque, $senha);
		if ($resultado5) {
            echo "<p>O quiz5 foi cadastrado com sucesso</p>";
        } 
        else {
	    	echo "<p>O quiz5 NÃO foi cadastrado com sucesso</p>";
	    }


	     $resultado6 = quiz::cadastrarQuiz("Que tipo de comida mais te agrada?");
		//$resultado = Cliente::cadastrarCliente($nome, $email, $dataNasc, $localEmbarque, $senha);
		if ($resultado6) {
            echo "<p>O quiz6 foi cadastrado com sucesso</p>";
        } 
        else {
	    	echo "<p>O quiz6 NÃO foi cadastrado com sucesso</p>";
	    }


	     $resultado7 = quiz::cadastrarQuiz("O que mais te atrai em uma viagem?");
		//$resultado = Cliente::cadastrarCliente($nome, $email, $dataNasc, $localEmbarque, $senha);
		if ($resultado7) {
            echo "<p>O quiz7 foi cadastrado com sucesso</p>";
        } 
        else {
	    	echo "<p>O quiz7 NÃO foi cadastrado com sucesso</p>";
	    }
	    
	
    
	include "alternativa.php";

		//$id, $dataChegada, $dataSaida, $alternativa, $pergunta

		$alternativa = alternativa::cadastrarAlternativa(1,"Namorado(a)");
		//$resultado = Cliente::cadastrarCliente($nome, $email, $dataNasc, $localEmbarque, $senha);
		if ($alternativa) {
            echo "<p>A alternativa foi cadastrado com sucesso</p>";
        } 
        else {
	    	echo "<p>A alternativa NÃO foi cadastrado com sucesso</p>";
	    }

	    $alternativa1 = alternativa::cadastrarAlternativa(1,"Sozinho(a)");
		//$resultado = Cliente::cadastrarCliente($nome, $email, $dataNasc, $localEmbarque, $senha);
		if ($alternativa1) {
            echo "<p>A alternativa foi cadastrado com sucesso</p>";
        } 
        else {
	    	echo "<p>A alternativa NÃO foi cadastrado com sucesso</p>";
	    }

	     $alternativa2 = alternativa::cadastrarAlternativa(1,"Família");
		//$resultado = Cliente::cadastrarCliente($nome, $email, $dataNasc, $localEmbarque, $senha);
		if ($alternativa2) {
            echo "<p>A alternativa foi cadastrado com sucesso</p>";
        } 
        else {
	    	echo "<p>A alternativa NÃO foi cadastrado com sucesso</p>";
	    }


	    $alternativa3 = alternativa::cadastrarAlternativa(1,"Amigos");
		//$resultado = Cliente::cadastrarCliente($nome, $email, $dataNasc, $localEmbarque, $senha);
		if ($alternativa3) {
            echo "<p>A alternativa foi cadastrado com sucesso</p>";
        } 
        else {
	    	echo "<p>A alternativa NÃO foi cadastrado com sucesso</p>";
	    }

	    ///////////////////////////////////////////////////////
	    ///////////////////////////////////////////////////////
	    ///////////////////////////////////////////////////////
	    ///////////////////////////////////////////////////////
	    ///////////////////////////////////////////////////////


	    $alternativa4 = alternativa::cadastrarAlternativa(2,"Econômico");
		//$resultado = Cliente::cadastrarCliente($nome, $email, $dataNasc, $localEmbarque, $senha);
		if ($alternativa4) {
            echo "<p>A alternativa foi cadastrado com sucesso</p>";
        } 
        else {
	    	echo "<p>A alternativa NÃO foi cadastrado com sucesso</p>";
	    }

	    $alternativa5 = alternativa::cadastrarAlternativa(2,"Mediano");
		//$resultado = Cliente::cadastrarCliente($nome, $email, $dataNasc, $localEmbarque, $senha);
		if ($alternativa5) {
            echo "<p>A alternativa foi cadastrado com sucesso</p>";
        } 
        else {
	    	echo "<p>A alternativa NÃO foi cadastrado com sucesso</p>";
	    }

	     $alternativa6 = alternativa::cadastrarAlternativa(2,"Muito bom");
		//$resultado = Cliente::cadastrarCliente($nome, $email, $dataNasc, $localEmbarque, $senha);
		if ($alternativa6) {
            echo "<p>A alternativa foi cadastrado com sucesso</p>";
        } 
        else {
	    	echo "<p>A alternativa NÃO foi cadastrado com sucesso</p>";
	    }


	    $alternativa7 = alternativa::cadastrarAlternativa(2,"Luxuoso");
		//$resultado = Cliente::cadastrarCliente($nome, $email, $dataNasc, $localEmbarque, $senha);
		if ($alternativa7) {
            echo "<p>A alternativa foi cadastrado com sucesso</p>";
        } 
        else {
	    	echo "<p>A alternativa NÃO foi cadastrado com sucesso</p>";
	    }


	    ///////////////////////////////////////////////////////
	    ///////////////////////////////////////////////////////
	    ///////////////////////////////////////////////////////
	    ///////////////////////////////////////////////////////
	    ///////////////////////////////////////////////////////


	    $alternativa8 = alternativa::cadastrarAlternativa(3,"Nacional");
		//$resultado = Cliente::cadastrarCliente($nome, $email, $dataNasc, $localEmbarque, $senha);
		if ($alternativa8) {
            echo "<p>A alternativa foi cadastrado com sucesso</p>";
        } 
        else {
	    	echo "<p>A alternativa NÃO foi cadastrado com sucesso</p>";
	    }

	    $alternativa9 = alternativa::cadastrarAlternativa(3,"Internacional");
		//$resultado = Cliente::cadastrarCliente($nome, $email, $dataNasc, $localEmbarque, $senha);
		if ($alternativa9) {
            echo "<p>A alternativa foi cadastrado com sucesso</p>";
        } 
        else {
	    	echo "<p>A alternativa NÃO foi cadastrado com sucesso</p>";
	    }


 		///////////////////////////////////////////////////////
	    ///////////////////////////////////////////////////////
	    ///////////////////////////////////////////////////////
	    ///////////////////////////////////////////////////////
	    ///////////////////////////////////////////////////////

	     $alternativa10 = alternativa::cadastrarAlternativa(4,"Frio");
		//$resultado = Cliente::cadastrarCliente($nome, $email, $dataNasc, $localEmbarque, $senha);
		if ($alternativa10) {
            echo "<p>A alternativa foi cadastrado com sucesso</p>";
        } 
        else {
	    	echo "<p>A alternativa NÃO foi cadastrado com sucesso</p>";
	    }


	    $alternativa11 = alternativa::cadastrarAlternativa(4,"Temperado");
		//$resultado = Cliente::cadastrarCliente($nome, $email, $dataNasc, $localEmbarque, $senha);
		if ($alternativa11) {
            echo "<p>A alternativa foi cadastrado com sucesso</p>";
        } 
        else {
	    	echo "<p>A alternativa NÃO foi cadastrado com sucesso</p>";
	    }

	     $alternativa12 = alternativa::cadastrarAlternativa(4,"Quente");
		//$resultado = Cliente::cadastrarCliente($nome, $email, $dataNasc, $localEmbarque, $senha);
		if ($alternativa12) {
            echo "<p>A alternativa foi cadastrado com sucesso</p>";
        } 
        else {
	    	echo "<p>A alternativa NÃO foi cadastrado com sucesso</p>";
	    }

	///////////////////////////////////////////////////////
	    ///////////////////////////////////////////////////////
	    ///////////////////////////////////////////////////////
	    ///////////////////////////////////////////////////////
	    ///////////////////////////////////////////////////////

	     $alternativa13 = alternativa::cadastrarAlternativa(5,"3 dias");
		//$resultado = Cliente::cadastrarCliente($nome, $email, $dataNasc, $localEmbarque, $senha);
		if ($alternativa13) {
            echo "<p>A alternativa foi cadastrado com sucesso</p>";
        } 
        else {
	    	echo "<p>A alternativa NÃO foi cadastrado com sucesso</p>";
	    }


	    $alternativa14 = alternativa::cadastrarAlternativa(5,"7 dias");
		//$resultado = Cliente::cadastrarCliente($nome, $email, $dataNasc, $localEmbarque, $senha);
		if ($alternativa14) {
            echo "<p>A alternativa foi cadastrado com sucesso</p>";
        } 
        else {
	    	echo "<p>A alternativa NÃO foi cadastrado com sucesso</p>";
	    }

	     $alternativa15 = alternativa::cadastrarAlternativa(5,"15 dias");
		//$resultado = Cliente::cadastrarCliente($nome, $email, $dataNasc, $localEmbarque, $senha);
		if ($alternativa15) {
            echo "<p>A alternativa foi cadastrado com sucesso</p>";
        } 
        else {
	    	echo "<p>A alternativa NÃO foi cadastrado com sucesso</p>";
	    }


	      $alternativa16 = alternativa::cadastrarAlternativa(5,"30 dias");
		//$resultado = Cliente::cadastrarCliente($nome, $email, $dataNasc, $localEmbarque, $senha);
		if ($alternativa16) {
            echo "<p>A alternativa foi cadastrado com sucesso</p>";
        } 
        else {
	    	echo "<p>A alternativa NÃO foi cadastrado com sucesso</p>";
	    }



	///////////////////////////////////////////////////////
	    ///////////////////////////////////////////////////////
	    ///////////////////////////////////////////////////////
	    ///////////////////////////////////////////////////////
	    ///////////////////////////////////////////////////////

	     $alternativa17 = alternativa::cadastrarAlternativa(6,"Fast-food");
		//$resultado = Cliente::cadastrarCliente($nome, $email, $dataNasc, $localEmbarque, $senha);
		if ($alternativa17) {
            echo "<p>A alternativa foi cadastrado com sucesso</p>";
        } 
        else {
	    	echo "<p>A alternativa NÃO foi cadastrado com sucesso</p>";
	    }


	    $alternativa18 = alternativa::cadastrarAlternativa(6,"Massas");
		//$resultado = Cliente::cadastrarCliente($nome, $email, $dataNasc, $localEmbarque, $senha);
		if ($alternativa18) {
            echo "<p>A alternativa foi cadastrado com sucesso</p>";
        } 
        else {
	    	echo "<p>A alternativa NÃO foi cadastrado com sucesso</p>";
	    }

	     $alternativa19 = alternativa::cadastrarAlternativa(6,"Sushi");
		//$resultado = Cliente::cadastrarCliente($nome, $email, $dataNasc, $localEmbarque, $senha);
		if ($alternativa19) {
            echo "<p>A alternativa foi cadastrado com sucesso</p>";
        } 
        else {
	    	echo "<p>A alternativa NÃO foi cadastrado com sucesso</p>";
	    }


	      $alternativa20 = alternativa::cadastrarAlternativa(6,"Comidas Exóticas");
		//$resultado = Cliente::cadastrarCliente($nome, $email, $dataNasc, $localEmbarque, $senha);
		if ($alternativa20) {
            echo "<p>A alternativa foi cadastrado com sucesso</p>";
        } 
        else {
	    	echo "<p>A alternativa NÃO foi cadastrado com sucesso</p>";
	    }



	    ///////////////////////////////////////////////////////
	    ///////////////////////////////////////////////////////
	    ///////////////////////////////////////////////////////
	    ///////////////////////////////////////////////////////
	    ///////////////////////////////////////////////////////

	     $alternativa21 = alternativa::cadastrarAlternativa(7,"Autoconhecimento");
		//$resultado = Cliente::cadastrarCliente($nome, $email, $dataNasc, $localEmbarque, $senha);
		if ($alternativa21) {
            echo "<p>A alternativa foi cadastrado com sucesso</p>";
        } 
        else {
	    	echo "<p>A alternativa NÃO foi cadastrado com sucesso</p>";
	    }


	    $alternativa22 = alternativa::cadastrarAlternativa(7,"Culinária e cultura");
		//$resultado = Cliente::cadastrarCliente($nome, $email, $dataNasc, $localEmbarque, $senha);
		if ($alternativa22) {
            echo "<p>A alternativa foi cadastrado com sucesso</p>";
        } 
        else {
	    	echo "<p>A alternativa NÃO foi cadastrado com sucesso</p>";
	    }

	     $alternativa23 = alternativa::cadastrarAlternativa(7,"Diversão/Compras");
		//$resultado = Cliente::cadastrarCliente($nome, $email, $dataNasc, $localEmbarque, $senha);
		if ($alternativa23) {
            echo "<p>A alternativa foi cadastrado com sucesso</p>";
        } 
        else {
	    	echo "<p>A alternativa NÃO foi cadastrado com sucesso</p>";
	    }


	      $alternativa24 = alternativa::cadastrarAlternativa(7,"Aventura");
		//$resultado = Cliente::cadastrarCliente($nome, $email, $dataNasc, $localEmbarque, $senha);
		if ($alternativa24) {
            echo "<p>A alternativa foi cadastrado com sucesso</p>";
        } 
        else {
	    	echo "<p>A alternativa NÃO foi cadastrado com sucesso</p>";
	    }

	    

	include "alternativa.php";

	    $alternativa25 = alternativa::cadastrarAlternativa(3,"");
		//$resultado = Cliente::cadastrarCliente($nome, $email, $dataNasc, $localEmbarque, $senha);
		if ($alternativa25) {
            echo "<p>A alternativa foi cadastrado com sucesso</p>";
        } 
        else {
	    	echo "<p>A alternativa NÃO foi cadastrado com sucesso</p>";
	    }

	    */
?>