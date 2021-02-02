<?php
	
	include_once "BancoDados.php";

	class quiz{
		
		public static function cadastrarQuiz($pergunta){
			try {
				// Criar uma conexão
				$conexao = BancoDados::getInstance()->getConnection();

				 // Criar a SQL para executar
				$stmt = $conexao->prepare("INSERT INTO quiz(pergunta) VALUES (?)");
				// Executar a SQL
				$stmt->execute([$pergunta]);
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
	

		public static function retornarQuiz() {
			$resultado = array();

			try {
				$conexao = BancoDados::getInstance()->getConnection();

				$stmt = $conexao->prepare("SELECT id, pergunta FROM quiz ORDER BY id");

				$stmt->execute();

				 $resultado = $stmt->fetchAll();
			} 
			catch(Exception $e) {
				echo $e->getMessage();
				exit;
			}

			return $resultado;
		}

		public static function deletarQuiz($id){

	        try {
	            // Criar uma conexão
	            $conexao = BancoDados::getInstance()->getConnection();

	            // Criar a SQL para executar
	            $stmt = $conexao->prepare("DELETE FROM quiz WHERE id=?");

	            // Executar a SQL
	            $stmt->execute([$id]);

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