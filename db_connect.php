<?
$host = "localhost";
$dbname = "booking";
$username = "root";
$password = " ";

//establish a database connection
$conn = new mysqli($host, $username, $password, $dbname);

//check if the connection was successful
if($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}
?>