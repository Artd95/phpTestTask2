<?php
	require_once __DIR__.'/Product.php';

	class Furniture extends Product{

		public $height, $width, $lenght;
		
		function __construct($sku, $prod_name, $price, $height, $width, $lenght) {
			$this->sku = $sku;
	        $this->prod_name = $prod_name;
	        $this->price = $price;
	        $this->height = $height;
	        $this->width = $width;
	        $this->lenght = $lenght;
		}

		public function add(){
			$connect = new ConnectToDB;
			$link = mysqli_connect($connect->getHost(), $connect->getUser(), $connect->getPassword(), $connect->getDatabase()) or die("Ошибка " . mysqli_error($link));
			$result = mysqli_query($link, "INSERT INTO products_list (sku, product_name, price, height, width, lenght) VALUES ('$this->sku', '$this->prod_name', '$this->price', '$this->height', '$this->width', '$this->lenght')") or die("Ошибка " . mysqli_error($link));
			mysqli_close($link);      
		}
	}                                    
?>