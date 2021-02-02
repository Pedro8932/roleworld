<?php
	
	include_once "BancoDados.php";

	class contcliente{
		
		public static function finalizarCadastroCliente($email, $cpf, $rg, $numCartao){
			try {
				// Criar uma conexão
				$conexao = BancoDados::getInstance()->getConnection();

				 // Criar a SQL para executar
				$stmt = $conexao->prepare("UPDATE cliente (cpf, rg, numCartao) SET (?, ?, ?) WHERE email=?");

				// Executar a SQL
				$stmt->execute([$cpf, $rg, $numCartao]);
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