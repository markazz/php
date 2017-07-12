



<?php 

// defining configuration fileName and path 
$configFile = 'config.ini';

// display the form if not submitted

if (!isset($_POST['submit'])) 
{


//  set up array 





//read the current congiguration values
// and use them to fill the values

// first check if the file exists
if (file_exists($configFile)) 
{
// read the entire file into an array 
$lines = file($configFile);	


//iterate over the array 
foreach ($lines as $line)
 {


 }


}






}




 ?>







