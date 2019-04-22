 <!DOCTYPE html>
<html>
<body>
<?php 
$firstname = $_POST["Firstname"];
$email = $_POST["Email"];
$pass = $_POST["Password"];

?>

Welcome <?php echo $firstname;?>
<br>

<br>
 <?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "petits_comptes_entre_amis";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<div class= top-right> you are Connected successfully at the data base !<div>";

$sql = "INSERT INTO users(Name,Email,Password)
VALUES ('$firstname','$email','$pass')";

if ($conn->query($sql) === TRUE) {
    echo "<br><div class= top-right> New record created successfully </div>";
    echo "<br><a href = login.html> Login </a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//close connection
$conn->close();

?> 



</body>
</html> 