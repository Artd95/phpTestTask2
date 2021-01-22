<?php
	require_once __DIR__."/../models/Product.php";
	require_once __DIR__.'/../controllers/IndexController.php';

	if (isset ($_POST['ajax'])) {
        $ajax = new IndexDeleteController();
        $ajax -> delete();
    }

	class IndexDeleteController{

		public function delete(){	
			Product::deleteAll($_POST['checks']);
			$indexController = new IndexController();
			$indexController -> load();
		}

	} 
?>