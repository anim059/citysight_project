
<?php
    session_start();
 $pname = $_SESSION["name"] ;
 $pemail = $_SESSION["email"];
 $pnumber = $_SESSION["number"];
 $paddress = $_SESSION["address"] ;
 $pdescription= $_SESSION["description"];
 $ppassword =  $_SESSION["password"];
 $pimage=$_SESSION["image"];

 $dbid=$_SESSION["id"] ;
?>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "citysight";



	

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_POST['post'])){
///$target="image/".basename($_FILES['userimage']['name']);
$target="image/".basename($_FILES['userimage']['name']);
$name=$_POST['username'];
$email=$_POST['useremail'];
$cell=$_POST['usernumber'];
$address=$_POST['useraddress'];
$description=$_POST['userdescription'];
$password=$_POST['userpassword'];
//$image=$_POST['userimage'];
//$image=$_FILES['userimage']['name'];
if($_FILES["userimage"]["error"] == 4){
	$image=$_SESSION["image"];
}else{
	$image=$_FILES['userimage']['name'];
}



if(move_uploaded_file($_FILES['userimage']['tmp_name'], $target)){
  echo "sucess";
}else{
   echo"error";
}

$check=mysqli_query($conn,"select * from usertable where userid='$dbid' ");
$checkrows=mysqli_num_rows($check);
if($checkrows!=0){
   $sql="UPDATE usertable set username='$name',useremail='$email',usernumber='$cell',useraddress='$address',userpassword='$password',userimage='$image',userdescription='$description' where  userid='$dbid'";
   if($conn->query($sql)===true){
   
   	header('Location:profile.php');
   }else{
   	echo "Error: " . $sql . "<br>" . $conn->error;
   }
}else{
	$sql = "INSERT INTO usertable (username,useremail,usernumber,useraddress,userpassword,userimage,userdescription)
VALUES ('$name','$email',$cell,'$address','$password','$image',$description)";
if ($conn->query($sql) === TRUE) {
	
    header("Location:profile.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

}
$conn->close();
?>
<?php include 'header_menu.php' ;?>

<div class="container">

  <div class="row">
    <div class="col">
    	<h3 class="text-center">Edit your profile</h3>
      <div>
  
        <form action="editprofilepage.php" method="post" enctype="multipart/form-data" >
          <div class="form-group">
            <label for="username" class="col-form-label" >Name</label>
            <?php
           echo '<input type="text" class="form-control" name="username" value="'.$pname.'" required>'; 
           ?>
          </div>
          <div class="form-group">
            <label for="useremail" class="col-form-label">email:</label>
             <?php
           echo '<input type="text" class="form-control" name="useremail" value="'.$pemail.'" required>'; 
           ?>
        
          </div>
           <div class="form-group">
            <label for="usercell" class="col-form-label">cellnumber:</label>
             <?php
           echo '<input type="text" class="form-control" name="usernumber" value="'.$pnumber.'" required>'; 
           ?>
          </div>
           <div class="form-group">
            <label for="useraddress" class="col-form-label">address:</label>
             <?php
           echo '<input type="text" class="form-control" name="useraddress" value="'.$paddress.'" required>'; 
           ?>
            
          </div>
           <div class="form-group">
            <label for="userpassword" class="col-form-label">password:</label>
             <?php
           echo '<input type="text" class="form-control" name="userpassword" value="'.$ppassword.'" required>'; 
           ?>
           <br>
           <label>Change your image</label>
            <?php
           echo '<input type="file" class="form-control" name="userimage" value="'.$pimage.'" >'; 
           ?>

            <label for="userpost" class="col-form-label ">description :</label>
            <?php
           echo '<input type="text" class="form-control" name="userdescription" value="'.$pdescription.'" required>'; 
             ?>
          </div>
           <div class="modal-footer">
        <button type="submit" class="btn btn-primary loginformbutton" value="change image" name="post">submit</button>
      </div>
        </form>

         </div>
      </div>
   
    <div class="col">
      
    </div>
  </div>
</div>




<?php include 'footer.php';?>