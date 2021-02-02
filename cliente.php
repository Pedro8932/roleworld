<?php
	
	include_once "BancoDados.php";

	class cliente{
		
		public static function cadastrarCliente($nome, $email, $dataNasc, $localEmbarque, $senha){
			try {
				// Criar uma conexão
				$conexao = BancoDados::getInstance()->getConnection();

				 // Criar a SQL para executar
				$stmt = $conexao->prepare("INSERT INTO cliente(nome, email, dataNasc, localEmbarque, senha) VALUES (?, ?, ?, ?, ?)");

				// Executar a SQL
				$stmt->execute([$nome, $email, $dataNasc, $localEmbarque, $senha]);
				// Checar resultado
				$linhas_alteradas = $stmt->rowCount();

			}
			catch(Exception $e) {
				echo $e->getMessage();
				exit;
			}
			if($linhas_alteradas > 0) {
				return true;
			}
			else{
				return false;
			}
		}
	

		/*

		public static function logarCliente($email, $senha){
			$resultado = null;
			try {
				// Criar uma conexão
				$conexao = BancoDados::getInstance()->getConnection();

				 // Criar a SQL para executar
				$stmt = $conexao->prepare("SELECT `email`, `senha` FROM `cliente` WHERE email=?");


				// Executar a SQL
				$stmt->execute([$email, $senha]);
				// Checar resultado
				$resultado = $stmt->fetchAll();

			}
			catch(Exception $e) {
				echo $e->getMessage();
				exit;
			}
			return $resultado;
		}
		*/







		public static function deletarCliente($email){

	        try {
	            // Criar uma conexão
	            $conexao = BancoDados::getInstance()->getConnection();

	            // Criar a SQL para executar
	            $stmt = $conexao->prepare("DELETE FROM cliente WHERE email=?");

	            // Executar a SQL
	            $stmt->execute([$email]);

	            // Checar resultado
	            $linhas_alteradas = $stmt->rowCount();
	        } catch (Exception $e) {
	            echo $e->getMessage();
	            exit;
	        }

	        if ($linhas_alteradas > 0) {
	            return true;
	        } else {
	            return false;
	        }
	    }

	    
 
	





	     public static function editarCliente($nome, $email, $dataNasc, $localEmbarque, $senha){

	        try {
	            // Criar uma conexão
	            $conexao = BancoDados::getInstance()->getConnection();

	            // Criar a SQL para executar
	            $stmt = $conexao->prepare("UPDATE cliente(nome, email, dataNasc, localEmbarque, senha) SET (?,?,?,?,?) WHERE email=?");

	            // Executar a SQL
	            $stmt->execute([$nome, $email, $dataNasc, $localEmbarque, $senha]);

	            // Checar resultado
	            $linhas_alteradas = $stmt->rowCount();
	        } catch (Exception $e) {
	            echo $e->getMessage();
	            exit;
	        }

	        if ($linhas_alteradas > 0) {
	            return true;
	        } else {
	            return false;
	        }
   		}



	}


?>