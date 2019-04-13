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
?>
<!DOCTYPE html>
<html lang = en>
<head>
	<meta charset="utf-8">
	<title>Discussion</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/3/flatly/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/general.css">
	<link rel="stylesheet" type="text/css" href="css/discussion.css">
	<link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">

	<script type = "text/javascript" src = "JavaScript/addComment.js"></script>
</head>
<body>
	<div class="head">
		<h1>DISCUSSION</h1>
		<h2>Find Like-Minded Bread Enthusiasts :^)</h2>
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
			<div id = "comments">
				<?php
				$sql = 'SELECT UserName, Comment FROM comments';
				if ($result = mysqli_query($connection, $sql)) {
                    while($row = mysqli_fetch_assoc($result)){
                    	echo '<fieldset class = "comment">';
                    	echo "<legend>" . $row["UserName"] . "</legend>";
                    	echo "<p>" . $row['Comment'] . "</p>";
                    	echo '</fieldset>';
                    }
                    mysqli_free_result($result);
                }
				?>
			</div>

			<div class="commentdiv">
				<form name ="commentInput" action = "comment.php" method="post">
					<fieldset class = "form-group">
						<legend>Add your opinion:</legend>
					    <div class="form-group">
						    <label class="col-form-label" for="inputDefault">Name:</label>
  							<input type="text" class="form-control" name="name" placeholder="John Smith" id="inputDefault">
  						</div>
  						<div class="form-group">
						    <label for="commentTextarea">Comment:</label>
						    <textarea class="form-control" name = "comment" id="commentTextarea" rows="3"></textarea>
						</div>
						    <button type="submit" name= "submit" class="btn btn-primary" onClick="AddComment()">Submit</button>
						</div>
					</fieldset>

				</form>
    		</div>
		</div>
	</main>
<footer>
	<p>Jacob Ackerman and Ricky Quiroga 2019<br>
	CS3500 Team 9</p>
</footer>
</body>
</html>
