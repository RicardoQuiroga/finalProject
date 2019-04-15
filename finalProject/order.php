<?php
define('DBHOST', 'localhost');
define('DBNAME', 'bread');
define('DBUSER', 'testuser');
define('DBPASS', 'mypassword');
define('DBCONNSTRING', 'mysql:dbname=bread;charset=utf8mb4;');
$connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
if ( mysqli_connect_errno() ) {
	die( mysqli_connect_error() );
}

function inputValuesVal($row) {
	if (!isset($_POST[$row['Path'] . "Num"])) {
		return 0;
	} else {
		return $_POST[$row['Path'] . "Num"];
	}
}
?>
<!DOCTYPE html>
<html lang = en>
<head>
	<meta charset="utf-8">
	<title>Discussion</title>

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/3/flatly/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/general.css">
	<link rel="stylesheet" type="text/css" href="css/order.css">
	<link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
</head>
<body>
	<div class="head">
		<h1>ORDER</h1>
		<h2>You need bread? We'll get you bread.</h2>
		<nav class="navbar navbar-default">
			<div class="container-fluid" id="nav1">
			    <ul class="nav navbar-nav">
			      	<li><a href="index.php">Home</a></li>
       				<li><a href="catalog.php">Catalog</a></li>
        			<li><a href="discussion.php">Discussion</a></li>
        			<li><a href="order.php">Order</a></li>
        			<li><a href="about.html">About Us</a></li>
			    </ul>
			</div>
		</nav>
	</div>

	<main>
		<div class="main">
				<form method="get" action="http://examples.funwebdev.com/process.php">
					<fieldset>
						<legend>What would you like to order?</legend>
						<div id = "textinputs">
							<label id="namelabel">Name:</label>
							<input type="text" placeholder = "Name" name = "nameinput" id = "nameinput" class = "inputfield"><br>
							<label id="addresslabel">Address:</label>
							<input type="text" placeholder = "1234 Example St." name = "addressinput" id = "addressinput" class="inputfield"><br>
							<label id="ziplabel">ZIP:</label>
							<input type="text" placeholder="12345" name = "zipinput" id="zipinput" class = "inputfield"><br>
						</div>
						<br>
						<?php
							$sql = 'SELECT * FROM catalogclassic';

							echo '<div id = "checkboxinput">';
								echo '<div class = "columnGrouping">';
									echo '<div class = "group">';
							if ($result = mysqli_query($connection, $sql)) {
								$i = 0;
                                while($row = mysqli_fetch_assoc($result))
                                {
																	echo "<br>";
	                                echo "<input type='checkbox' class = 'form-check-input' name = 'breadbox[]' value='" .$row['Name'] . "'>" . $row['Name'];
																	echo "<br>";
	                                echo "<input type='number' class='form-control' name = '" . $row['Name'] . "Amount' id = '" . $row['Name'] . "Amount' value=" . inputValuesVal($row) . ">";
	                                echo '<br>';
	                                if($i == 3){
	                                	echo '</div>';
	                                	echo '<div class="group">';
	                                	$i = 0;
	                                }
	                                else{
	                                  	$i++;
	                                }
                                }
                                mysqli_free_result($result);
                              }
                            echo '</div>';
                        echo '</div>';
                    echo '<input type="submit" name="submit" class="btn btn-primary">';
                    echo '</div>'
					?>
					</fieldset>
				</form>
		</div>
	</main>

</body>
<footer>
	<p>Jacob Ackerman and Ricky Quiroga 2019<br>
	CS3500 Team 9</p>
</footer>
</html>
