<?php
	require_once __DIR__.'/Product.php';

	class DVD extends Product{

		public $size;
		
		public function __construct($sku, $prod_name, $price, $size) {
			$this->sku = $sku;
	        $this->prod_name = $prod_name;
	        $this->price = $price;
	        $this->size = $size; 
		}

		public function add(){
			$connect = new ConnectToDB;
			$link = mysqli_connect($connect->getHost(), $connect->getUser(), $connect->getPassword(), $connect->getDatabase()) or die("Ошибка " . mysqli_error($link));
			$result = mysqli_query($link, "INSERT INTO products_list (sku, product_name, price, size) VALUES ('$this->sku', '$this->prod_name', '$this->price', '$this->size')") or die("Ошибка " . mysqli_error($link));
			mysqli_close($link);      
		}
	}                                    
?>