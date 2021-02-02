<?php
	
	include_once "BancoDados.php";

	class mostrar{
		
		public static function recuperarQuiz($pergunta){
			$resultado = null;
			try {
				// Criar uma conexão
				$conexao = BancoDados::getInstance()->getConnection();

				 // Criar a SQL para executar
				$stmt = $conexao->prepare("SELECT `pergunta` FROM `quiz` WHERE id=?");


				// Executar a SQL
				$stmt->execute([$pergunta]);
				// Checar resultado
				$resultado = $stmt->fetchAll();

			}
			catch(Exception $e) {
				echo $e->getMessage();
				exit;
			}
			return $resultado;
		}


		public static function recuperarAlternativa($pergunta){
			$resultado = null;
			try {
				// Criar uma conexão
				$conexao = BancoDados::getInstance()->getConnection();

				 // Criar a SQL para executar
				$stmt = $conexao->prepare("SELECT `alternativa` FROM `alternativa` WHERE id=?");


				// Executar a SQL
				$stmt->execute([$pergunta]);
				// Checar resultado
				$resultado = $stmt->fetchAll();

			}
			catch(Exception $e) {
				echo $e->getMessage();
				exit;
			}
			return $resultado;
		}


		public static function recuperarTodos(){
			$resultado = [];
			try {
				// Criar uma conexão
				$conexao = BancoDados::getInstance()->getConnection();

				 // Criar a SQL para executar
				$stmt = $conexao->prepare("SELECT `id` FROM `quiz`");

				// Executar a SQL
				$stmt->execute();
				
				// Checar resultado
				$resultado = $stmt->fetchAll();

			}
			catch(Exception $e) {
				echo $e->getMessage();
				exit;
			}

			return $resultado;
		}



	}


?>