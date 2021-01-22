<?php
	require_once __DIR__."/../models/Product.php";
	require_once __DIR__."/../models/DVD.php";
	require_once __DIR__."/../models/Book.php";
	require_once __DIR__."/../models/Furniture.php";

	if (isset ($_POST['ajax1'])) {
		$ajax1 = new AddController();
       	$ajax1 -> check();
   	}
    
    if (isset ($_POST['ajax2'])){
		$ajax2 = new AddController();
       	$ajax2 -> add();
    }

	class AddController{

		public function check(){	
			Product::check($_POST['sku']);
		}

		public function add(){	
			$inform = $_POST['inform'];
			switch ($_POST['action']) {
				case 'dvd':
					$dvd = new DVD($_POST['sku'], $_POST['name'], $_POST['price'], $_POST['size']);
					$dvd -> add();
					break;

				case 'book':
					$book = new Book($_POST['sku'], $_POST['name'], $_POST['price'], $_POST['weight']);
					$book -> add();
					break;

				case 'furniture':
					$furniture = new Furniture($_POST['sku'], $_POST['name'], $_POST['price'], $_POST['height'], $_POST['width'], $_POST['long']);
					$furniture -> add();
					break;
			}
		}

	} 
?>