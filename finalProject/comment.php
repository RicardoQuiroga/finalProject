<?php 
define('DBHOST', 'localhost');
define('DBNAME', 'bread');
define('DBUSER', 'testuser');
define('DBPASS', 'mypassword');
define('DBCONNSTRING', 'mysql:dbname=bread;charset=utf8mb4;');
$connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

$name = $_POST['name'];
$comment = $_POST['comment'];
$sql = "INSERT INTO comments (UserName, Comment) VALUES ('$name', '$comment')";

if($result = mysqli_query($connection, $sql)){
	header('Location: ' . $_SERVER['HTTP_REFERER']);
}
else {
	echo "We're sorry, something went wrong and your comment was not posted";
	
}
?>