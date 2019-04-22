 <!DOCTYPE html>

<html>
	<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <title>Petits comptes entre amis</title>
 
    </head>
		<body>
		<div class="flex-center position-ref full-height">
			
		
		
			<!--connection to the server -->

 			<?php

				$servername = "localhost";
				$username = "root";
				$password = "root";
				$dbname = "petits_comptes_entre_amis";

				// Create connection
				$conn = mysqli_connect($servername, $username, $password,$dbname);

				// Check connection
				if ($conn->connect_error) {
    				die("Connection failed: " . $conn->connect_error);
				}

				else {
				   
					// Check user
                               
				$email = $_POST["email"];
				$pass = $_POST["Password"];
				$table = "users";
                                $result = mysqli_query($conn, "SELECT Email , Password FROM $table WHERE Email = '$email' and Password = '$pass';" );
		
				if ( $result->num_rows > 0 ) {

					echo " <h1>Welcome</h1> ";
                                        echo "<br>";
                                        echo "<div class=top-right ><a href = Event.html> Dashboard </a></div>" ;
                                        
					}

				else {

					echo " 0 results, please <br> ";
                                       
                                        echo "<a href = register.html> register</a>";
				 }				

				}

			?> 
                        
		</div>
			
			
		</body>
				//close connection
				$conn->close();

</html> 
