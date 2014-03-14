<?php

	include 'inc/jsonRPCClient.php';
	include 'config.php';


	function PegarEndereço($moeda, $id) {

		$moeda .= "RPC";

		$rpc = new $moeda();

		$conexao = $rpc->conectar();

		$carteira = $conexao->getaccountaddress($id);

		return $carteira;
	}


	function EnviarQuantia($moeda, $carteira, $para, $valor) {

		$moeda .= "RPC";

		$rpc = new $moeda();

		$conexao = $rpc->conectar();

		return $conexao->sendfrom($carteira,  $para, (float) $valor);

	}

	function ValorDisponivel($moeda, $carteira) {

		$moeda .= "RPC";

		$rpc = new $moeda();

		$conexao = $rpc->conectar();

		$carteira = $conexao->getbalance($carteira);

		return $carteira;
	}

	function FazerBackup($moeda, $carteira) {
		

		$moeda .= "RPC";

		$rpc = new $moeda();

		$conexao = $rpc->conectar();

		$carteira = $conexao->backupwallet(__DIR__."/backups/".$carteira.".dat");

		return __DIR__."/backups/".$carteira.".dat";

	}
	


?>
