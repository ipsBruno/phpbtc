<?php

	/*
                *
	* 2014 Bruno da Silva (c) 
	* down2money.net mixmusicas.com.br email@brunodasilva.com
                *
	*/

	class BitcoinRPC {
			
		// configurações btc server
		public $server =  "127.0.0.1";
		public $porta =  "11974" ;  

		public $usuario =  "USER"; 
		public $senha =  "xxxx"; 

		public function conectar() {

			$url = "http://". $this->usuario . ":" . $this->senha. "@".$this->server.":".$this->porta . "/";
			$s = null;

			try {
				$s = new jsonRPCClient($url);
			} 
			catch (Exception $e) {
				die($e);
			}

			return $s;
		}
	}



	class LitecoinRPC {

		// configurações ltc server
		public $server =  "127.0.0.1";
		public $porta =  "11974" ; 

		public $usuario =  "USER"; 
		public $senha =  "xxxx"; 

		public function conectar() {

			$url = "http://". $this->usuario . ":" . $this->senha. "@".$this->server.":".$this->porta . "/";
			$s = null;

			try {
				$s = new jsonRPCClient($url);
			} 
			catch (Exception $e) {
				die($e);
			}

			return $s;
		}
	}



?>
