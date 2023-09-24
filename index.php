<?php include_once "Classes/SelectDB.php"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title></title>
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
		 <script type="text/javascript" src="JavaScript/GetCheckBoxes.js"></script>
		 <script type="text/javascript" src="JavaScript/addPage.js"></script>
		 <link rel="stylesheet" href="CSS/style.css">
		 <meta charset="utf-8">
	</head>
<body>
	<span id="load" hidden></span>
	<div class="header-fixed">
		<div class="header-list">
			<div>
				<h1>Product List</h1>
			</div>
			<div class="add-button-container">
				<button type="button" onclick="addPage();" class="add-button">ADD</button>
			</div>
			<div class="mass-delete-button-container">
				<button type="button" id="delete-product-btn" onclick="deleteElement();" class="mass-delete-button" style="font-size: 14px;">MASS DELETE</button>
			</div>
		</div>
		<hr />
	</div>
		<div class="product-list-container">
				<?php
				$load = new SelectDB();
				$load->getProducts();
				?>
  </div>
	<div class="footer">
		<hr />
		<p>Scandiweb Test assigment</p>
	</div>
</body>
</html>
