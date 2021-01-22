<?php
	class ConnectToDB {

		public $host, $database, $user, $password;
		
		function __construct($host = 'localhost', $database = 'id15742290_productsdb',	$user = 'id15742290_phpadmin',	$password = 'isgJ*rIW4}342M}z') {
			$this->host = $host;
	        $this->database = $database;
	        $this->user = $user;
	        $this->password = $password;
		}

		public function getHost(){
        	return $this->host;
    	}

    	public function getDatabase(){
        	return $this->database;
    	}

    	public function getUser(){
        	return $this->user;
    	}

    	public function getPassword(){
        	return $this->password;
    	}

	}
?>