<?php
	
	include_once "BancoDados.php";

	class alternativa{
		
		public static function cadastrarAlternativa($id,$alternativa){
			try {
				// Criar uma conexão
				$conexao = BancoDados::getInstance()->getConnection();

				 // Criar a SQL para executar
				$stmt = $conexao->prepare("INSERT INTO alternativa(id, alternativa) VALUES (?,?)");
				// Executar a SQL
				$stmt->execute([$id,$alternativa]);
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

	}


?>