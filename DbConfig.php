<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
   $servername = 'localhost';
   $username = 'root';
   $password = '';
   $dbname = "rajhansrealestate";
   
   
   // Create connection
   $conn = mysqli_connect($servername,$username,$password,$dbname);

   if($conn)
    {
        //echo'Connection Successfull';
    }
     else
     {
         echo 'Not Connected';
     }
 
     mysqli_select_db($conn,'rajhansrealestate');
     
?>
</body>
</html>