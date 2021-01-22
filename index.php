<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
	<title>Web-app Product_list</title>
	<link rel="icon" href="image/main.ico">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="js/scripts.js"></script>
</head>
<body>
	<header class="header">
		<div class="container">
			<h1 class="name">Products list</h1>
			<ul class="menu">
				<li>
					<button type="submit" id="button_to_product_page" onclick="location.href='add.php';"> Add </button>
				</li>
				<li>
					<button type="submit" id="button_to_product_page" form="deleteForm" onclick="massDelete();return false;"> Mass delete </button>
				</li>
			</ul>
		</div>
	</header>
	<section class="products_list">
		<div class="container">	
			<form id="deleteForm" name="deleteForm" method="post">
				<div class="table" id="table">
					<?php 
						require_once __DIR__."/app_data/controllers/IndexController.php"; 
						$view = new IndexController();
						$view -> load(); 
					?>					
				</div>
			</form>
		</div>
	</section>
	<footer class="footer">
		<div class="container">
			<p>
				Scandiweb Test assignment 
			</p>
			<p>
				Duboiski Artur, 2020
			</p>	
		</div>
	</footer>

</body>