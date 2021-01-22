<?php
	require_once __DIR__."/../models/Product.php";
	require_once __DIR__.'/../views/IndexView.php';

	class IndexController{

		public function load(){	
			$data = Product::output();
			$view = new IndexView($data);
			$view -> view();
		}

	} 
?>	