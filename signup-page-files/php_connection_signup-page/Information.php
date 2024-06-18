
<?php
$name = $_POST["namer"];
$password = $_POST["passwordr"];
$email = $_POST["emailr"];
$number = $_POST["number"];
$age = $_POST["age1"];

$conn = mysqli_connect("localhost", "root", "", "signup") or die("Connection Failed");

$sql = "INSERT INTO  dbs(name , password ,email, number , age) VALUES('{$name}','{$password}','{$email}','{$number}','{$age}') ";
$result = mysqli_query($conn, $sql) or die("Ouery Failed ");

mysqli_close($conn);


?>


























