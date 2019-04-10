<?php
define('DBHOST', 'localhost');
define('DBName', 'bread');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBCONNSTRING', 'mysql:dbname=bread;charset=utf8mb4;');

function fillCatalog($catalog) {
	$rowCount = 0;

	try {
		$pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);
		$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = 'select * from ' . $catalog;
		$result = $pdo -> query($sql);
		while ($row = $result -> fetch()) {
			//CREATE NEW ROW AFTER 2 ENTRIES IN CURRENT ROW
			if ($rowCount % 2 == 0) {
				echo '<div class="row">';
			}

			echo '<div class="col-md-6">';
			echo '<div class="panel panel-default" id="' . $row['Name'] . '">';
			echo '<div class="panel-body">';
			echo '<p style="text-align: center; font-size: 250%;"><strong>' . $row['Name'] . '</strong></p>';
			echo '<img src = "images/catalog_' . $row['Path'] . '" class="img-responsive center-block" Title="' . $row['Name'] . '" alt="' . $row['Name'] . '" />';
			echo '<p><strong>Additional types:</strong> ' . $row['Additional'] . '<br><br></p>';
			echo '<p><strong>Description:</strong> ' . $row['Description'] . '<br><br></p>';
			echo '</div>';
			echo '</div>';
			echo '</div>';

			if (++$rowCount % 2 == 0 && $rowCount != 0) {
				echo '</div>';
			}
		}
		$pdo = null;
		echo '<div class="col-md-6">';
		echo '<div class="panel panel-default">';
		echo '<div class="panel-body">';
		echo '<p style="font-size: 200%;">Have any suggestions? Feel from to email them to us! Find our contact info on the About Us page.</p>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
	} catch (PDOException $e) {
		echo 'database connection failed...';
		die($d -> getMessage());
	}
}
?>
<!DOCTYPE html>
<html lang=en>

<head>
	<meta charset="utf-8">
	<title>Catalog</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/3/flatly/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/general.css">
	<link rel="stylesheet" type="text/css" href="css/catalog.css">
	<link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
	<div class="head">
		<h1>CATALOG</h1>
		<h2>CS3500's Leading Bread Information Center</h2>
		<nav class="navbar navbar-default">
			<div class="container-fluid" id="nav1">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="catalog.php">Catalog</a></li>
					<li><a href="discussion.html">Discussion</a></li>
					<li><a href="order.html">Order</a></li>
					<li><a href="about.html">About Us</a></li>
				</ul>
			</div>
		</nav>
	</div>
	<main>
		<div class="jumbotron" id="newAddition">
			<div class="container" id="newContent">
				<h3 style="color: gold;">NEW*</h3>
				<h1><strong>Rye/Pumpernickel</strong></h1>
				<h2><em>A new addition to our classic catalog</em></h2>
			</div>
		</div>
		<div class="jumbotron" id="classicsSpecial">
			<div class="container" style="text-align: center; margin-bottom: 0;">
				<p style="font-size: 200%">Classic breads</p>
			</div>
		</div>
		<div class="row" id="quickBar">
			<div class="panel-body">
				<div class="btn-group">
					<button class="btn btn-primary">Jump to:</button>
					<button class="btn btn-primary"><a href="#Whole Wheat">Whole Wheat</a></button>
					<button class="btn btn-primary"><a href="#White">White</a></button>
					<button class="btn btn-primary"><a href="#Italian">Italian</a></button>
					<button class="btn btn-primary"><a href="#French">French</a></button>
					<button class="btn btn-primary"><a href="#Raisin">Raisin</a></button>
					<button class="btn btn-primary"><a href="#Sourdough">Sourdough</a></button>
					<button class="btn btn-primary"><a href="#Cinnamon">Cinnamon</a></button>
					<button class="btn btn-primary"><a href="#Multigrain">Multigrain</a></button>
					<button class="btn btn-primary"><a href="#Rye">Rye/Pumpernickel</a></button>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9">
				<?php
					fillCatalog("catalogClassic");
				?>
				</div>
			</div>
			<div class="col-md-3">
				<div class="panel panel-default" id="orderPanel">
					<div class="panel-heading">
						<p><strong>CS3500's Bread Catalog</strong></p>
					</div>
					<div class="panel-body">
						<p>We've worked very hard to find the most popular types of bread that
							are found and bought in the United States, and put them here for you
							to learn a little bit more about each. Feel free to got to our discussion
							page to talk about your favorites, or go to our order page to buy something!<br><br></p>
						<p><a href="discussion.html"><button class="btn btn-primary">Go to discussions</button></a> <a href="order.html"><button class="btn btn-primary">Checkout</button></a></p>
					</div>
				</div>
			</div>
		</div>

		<div class="jumbotron" id="classicsSpecial">
			<div class="container" id="specialSection" style="text-align: center; margin-bottom: 0;">
				<p style="font-size: 200%">Special breads</p>
				<h6 style="margin: 0;">*Available soon</h6>
			</div>
		</div>
		<div class="row" id="quickBar">
			<div class="panel-body">
				<div class="btn-group">
					<button class="btn btn-primary">Jump to:</button>
					<button class="btn btn-primary"><a href="#Flatbread">Flatbread</a></button>
					<button class="btn btn-primary"><a href="#Bagel">Bagel</a></button>
					<button class="btn btn-primary"><a href="#Pretzel">Pretzel</a></button>
					<button class="btn btn-primary"><a href="#Pasta">Pasta</a></button>
					<button class="btn btn-primary"><a href="#Cornbread">Cornbread</a></button>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9">
				<?php
				fillCatalog("CatalogSpecial");
				?>
			</div>
		</div>
			<div class="col-md-3">
				<div class="panel panel-default" id="orderPanel">
					<div class="panel-heading">
						<p><strong>New Options Coming Soon</strong></p>
					</div>
					<div class="panel-body">
						<p>OH NO! These selections aren't available yet. Although, this section
							is still being included to give you a better idea of things to come. Fret not!
							More will be offered soon.</p>
					</div>
				</div>
			</div>
		</div>
		<footer>Jacob Ackerman and Ricky Quiroga 2019<br>CS3500 Team 9</footer>
	</main>
</body>

</html>
