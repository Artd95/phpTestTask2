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
			<h1 class="name">Add product</h1>
			<ul class="menu">
				<li>
					<button type="submit" id="button_for_form" form="form"> Save </button>
				</li>
				<li>
					<button type="submit" id="button_to_product_page" onclick="location.href='index.php';"> Cancel </button>
				</li>
			</ul>
		</div>
	</header>
	<section class="products_list">
		<div class="container">
			<form method="POST" id="form" name="form" action="javascript:add()">
				<div class="main">
					<div class="field">
						<label for="sku">SKU</label>
						<input type="text" name="sku" id="sku" placeholder="Enter unique SKU for product here" pattern="[A-Z0-9]{8,}" required title="Enter unique SKU use A-Z, 0-9 and minimum 8 characters. Example: 'SVG12345'.">
						<div id="getdetails" style=""></div>
					</div>
					<div class="field">
						<label for="name">Name</label>
						<input type="text" name="name" id="name" placeholder="Enter product name here" required title="Enter product name.">
					</div>
					<div class="field">
						<label for="price">Price($)</label>
						<input type="text" name="price" id="price" placeholder="Enter product price here" pattern="\d+(\.\d{2})?" required title="Enter product price. Example: '199.99'.">
					</div>
					<div class="field">
						<label for="type_form">Type</label>
						<select id="type_form" class="type_form" onchange="changeForm()" title="Product type">
							<option value="dvd">DVD</option>
		  					<option value="book">Book</option>
		  					<option value="furniture">Furniture</option>
						</select>
					</div>

					<div id="dvd" class="form" style="display:block">
						<div class="field">
							<label for="size">Size(MB)</label>
							<input type="text" name="size" id="size" placeholder="Enter DVD-disc size here" required pattern="[0]|(\d+(\.\d{2})?)" title="Enter DVD-disc size. Example: '999'.">
						</div>	
					</div>

					<div id="book" class="form" style="display:none">
						<div class="field">
							<label for="weight">Weight(KG)</label>
							<input type="text" name="weight" id="weight" placeholder="Enter book weight here" required disabled pattern="\d+(\.\d{2})?" title="Enter book weight. Example: '0.99'.">
						</div>
					</div>

					<div id="furniture" class="form" style="display:none">
						<div class="field">
							<label for="height">Height(CM)</label>
							<input type="text" name="height" id="height" placeholder="Enter furniture height here"  required disabled pattern="\d+(\.\d{2})?" title="Enter furniture height. Example: '9.99'.">
						</div>
						<div class="field">
							<label for="width">Width(CM)</label>
							<input type="text" name="width" id="width" placeholder="Enter furniture width here"  required disabled  pattern="\d+(\.\d{2})?" title="Enter furniture width. Example: '9.99'.">
						</div>
						<div class="field">
							<label for="length">Length(CM)</label>
							<input type="text" name="long" id="long" placeholder="Enter furniture length here"  required disabled  pattern="\d+(\.\d{2})?" title="Enter furniture length. Example: '9.99'.">
						</div>
					</div>

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