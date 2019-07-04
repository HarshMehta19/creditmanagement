<?php
$accname = $_POST["sname"];
$email = $_POST["email"];
$amount = floatval($_POST["amount"]);
$conn = new mysqli('localhost', 'root', '', 'transaction');
if($conn->connect_error)
die('Connection Error' .$conn->connect_error);
$sql = "INSERT INTO accounts(AccName, Email, Amount) VALUES('$accname', '$email', $amount)";
$result = $conn->query($sql);
if($result)
print("Successfully Inserted!");
else
print("Error".$sql."<br>".$conn->error);
$conn->close();
?>