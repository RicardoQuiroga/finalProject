<?php
define('DBHOST', 'localhost');
define('DBNAME', 'id9307686_bread');
define('DBUSER', 'id9307686_breaduser');
define('DBPASS', '12345');
define('DBCONNSTRING', 'mysql:host=localhost;dbname=id9307686_bread;charset=utf8mb4;');

function getMax($connection) {
	$rowSQL = mysqli_query($connection, "SELECT MAX(UserID) AS max FROM `comments`");
	$row = mysqli_fetch_array($rowSQL);
	return ++$row['max'];
}

$connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

$largestNumber = getMax($connection);
$name = $_POST['name'];
$comment = $_POST['comment'];
$sql = "INSERT INTO comments (UserID, UserName, Comment) VALUES ('$largestNumber', '$name', '$comment')";

if($result = mysqli_query($connection, $sql)){
	header('Location: ' . $_SERVER['HTTP_REFERER']);
}
else {
	echo "We're sorry, something went wrong and your comment was not posted";

}
?>
