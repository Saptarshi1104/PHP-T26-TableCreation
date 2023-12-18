<?php
echo "Welcome to MySQL Table Creation in PHP <br>";
// ==============CODE START======================= \\
// Ways to connect to a MySQL Database
// Method-1: MySQLi Extension {Procedural and Object Oriented}
// Method-2: PDO
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbsap2";
// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if(!$conn){
    die("Sorry we failed to connect: " . mysqli_connect_error() . "<br>");
}
echo "Connection was successful <br>";
// Create a table in the database
$sql = "CREATE TABLE `phptrip` (`sno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `dest` VARCHAR(6) NOT NULL , PRIMARY KEY (`sno`))";
$result = mysqli_query($conn, $sql);
// Check for the table creation success
if($result){
    echo "The Database was created successfully <br>";
}
else{
    echo "The Database was not created successfully: " . mysqli_error($conn) . "<br>";
}
echo "The result is ";
echo var_dump($result);
echo "<br>";
// ==============CODE END========================== \\
?>