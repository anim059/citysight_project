<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "citysight";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$email=$_POST['useremail'];
$password=$_POST['userpassword'];

$check=mysqli_query($conn,"select * from usertable where useremail='$email' AND userpassword='$password' ");
    $checkrows=mysqli_num_rows($check);

    if($checkrows!=0)  
    {  

    while($row=mysqli_fetch_assoc($check) ) 
    {  
    $dbusername=$row['useremail'];  
    $dbpassword=$row['userpassword'];  
	$dbname=$row['username'];
    $dbid=$row['userid'];
    }  

   $_SESSION["id"] = $dbid;
  
    if($email == $dbusername && $password == $dbpassword)  
    {  
         $_SESSION['logoutid']='1';
        // $_SESSION['pageid']='3';
       // echo $_SESSION['userid'];
      header("Location:index.php");
    }  
    else{
    	 header("Location:index.php");
    }
    } else {  
   header("Location:index.php");
    }  

?>