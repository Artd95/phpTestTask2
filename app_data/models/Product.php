<?php
	require_once __DIR__."/../configs/ConnectToDB.php";

	abstract class Product{

		public $sku, $prod_name, $price;
		
		public function __construct($sku, $prod_name, $price) {
			$this->sku = $sku;
	        $this->prod_name = $prod_name;
	        $this->price = $price;
		}

		abstract public function add();

		static public function check($sku){
			$connect = new ConnectToDB;
			$link = mysqli_connect($connect->getHost(), $connect->getUser(), $connect->getPassword(), $connect->getDatabase()) or die("Ошибка " . mysqli_error($link));
			$result = mysqli_query($link, "SELECT * FROM products_list WHERE sku LIKE '$sku';") or die("Ошибка " . mysqli_error($link));
			$data = array();
  			while($row = mysqli_fetch_assoc($result)){$data[] = $row;}
			$total = count($data);
			echo $total;
			mysqli_close($link);      
		}

		static public function output(){
			$connect = new ConnectToDB;
			$link = mysqli_connect($connect->getHost(), $connect->getUser(), $connect->getPassword(), $connect->getDatabase()) or die("Ошибка " . mysqli_error($link));
			$result = mysqli_query($link, "SELECT * FROM products_list") or die("Ошибка " . mysqli_error($link));
			$data = array();
  			while($row = mysqli_fetch_assoc($result)){$data[] = $row;}
			mysqli_close($link); 
			return $data;   
		}

		static public function deleteAll($checks){
			$connect = new ConnectToDB;
			$link = mysqli_connect($connect->getHost(), $connect->getUser(), $connect->getPassword(), $connect->getDatabase()) or die("Ошибка " . mysqli_error($link));
			for ($count=0; $count < count($checks) ; $count++) {
				$sku = $checks[$count]; 
				mysqli_query($link, "DELETE FROM products_list WHERE sku='$sku';") or die("Ошибка " . mysqli_error($link));	
			}
			mysqli_close($link);
		}
	}                                    
?>