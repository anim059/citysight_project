<?php
function input_text($string){
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}

$errorname='';
$erroremail='';
$errornumber='';
$erroraddress='';
$errorpassword='';
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
if(isset($_POST['submit'])){
	$target="image/".basename($_FILES['userimage']['name']);


 if(empty($_POST['username'])){
      $errorname='<p><label class="text-danger">Please Enter your Name</label></p>';
  }else{
     $name = input_text($_POST['username']);
  if(!preg_match("/^[a-zA-Z ]*$/",$name))
  {
   $errorname = '<p><label class="text-danger">Only letters and white space allowed</label></p>';
  }
}


if(empty($_POST['useremail'])){
	 $erroremail = '<p><label class="text-danger">Please Enter your Email</label></p>';
	}else{
		$email=$_POST['useremail'];
		 if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
   $erroremail = '<p><label class="text-danger">Invalid email format</label></p>';
  }
	}

if(empty($_POST['usernumber'])){
      $errornumber='<p><label class="text-danger">Please Enter your number</label></p>';
  }else{
     $cell = input_text($_POST['usernumber']);
  if(!preg_match("/^[0-9]*$/",$cell))
  {
   $errornumber = '<p><label class="text-danger">Only number space allowed</label></p>';
  }
}

 if(empty($_POST["useraddress"]))
 {
  $erroraddress = '<p><label class="text-danger">Subject is required</label></p>';
 }
 else
 {
  $address = input_text($_POST["useraddress"]);
 }

 if(empty($_POST["userpassword"]))
 {
  $errorpassword = '<p><label class="text-danger">Subject is required</label></p>';
 }
 else
 {
  $password = input_text($_POST["userpassword"]);
 }

$image=$_FILES['userimage']['name'];

if(move_uploaded_file($_FILES['userimage']['tmp_name'], $target)){
  $error = '<p><label class="text-danger">success</label></p>';
}else{
  $error = '<p><label class="text-danger">error</label></p>';
}
 if( $errorname==''&&$erroremail==''&&$errornumber==''&&$erroraddress==''&&$errorpassword==''){
 $check=mysqli_query($conn,"select * from usertable where useremail='$email' OR userpassword='$password' ");
    $checkrows=mysqli_num_rows($check);
if($checkrows!=0){
	echo "user exists";
}else{

$sql = "INSERT INTO usertable (username,useremail,usernumber,useraddress,userpassword,userimage)
VALUES ('$name','$email',$cell,'$address','$password','$image')";

if ($conn->query($sql) === TRUE) {
      header("Location:index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}
}
$conn->close();
?>