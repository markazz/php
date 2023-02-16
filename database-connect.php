


<?php 

// attempt database connection 

$mysqli = new mysqli("localhost","databaseUsername", "databasePassword","databaseName");


// if the attempt failed 
if($mysqli === false)
{

die("ERROR......Could not connect to database".mysqli_connect_error());
}

// Display message if successful 
echo "That Works !!!!!!!!!!!!";

 ?>



