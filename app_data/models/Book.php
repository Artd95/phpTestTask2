<?php
	require_once __DIR__.'/Product.php';

	class Book extends Product{

		public $weight;
		
		public function __construct($sku, $prod_name, $price, $weight) {
			$this->sku = $sku;
	        $this->prod_name = $prod_name;
	        $this->price = $price;
	        $this->weight = $weight;
		}

		public function add(){
			$connect = new ConnectToDB;
			$link = mysqli_connect($connect->getHost(), $connect->getUser(), $connect->getPassword(), $connect->getDatabase()) or die("Ошибка " . mysqli_error($link));
			$result = mysqli_query($link, "INSERT INTO products_list (sku, product_name, price, weight) VALUES ('$this->sku', '$this->prod_name', '$this->price', '$this->weight')") or die("Ошибка " . mysqli_error($link));
			mysqli_close($link);      
		}
	}                                    
?>