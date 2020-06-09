<?php
session_start();
$_SESSION['logoutid']='1';
$dbid=$_SESSION["id"] ;
if(!empty($_GET['pagetype']) && $_GET['pagetype']=='logout'){
  $_SESSION['logoutid']='2';
  unset($_SESSION['id']);
  header('Location:index.php');
  exit();
}

// Start the session

?>
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "citysight";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$getdata="select * from usertable where userid='$dbid'";
$sqldata=mysqli_query($conn,$getdata) or die('error getting data');

while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){

  $pname=$row['username'];
  $pemail=$row['useremail'];
  $pnumber=$row['usernumber'];
  $paddress=$row['useraddress'];
  $pimage=$row['userimage'];
  $pdescription=$row['userdescription'];
  $ppassword=$row['userpassword'];
  $pid=$row['userid'];

}


 $_SESSION["name"] = $pname;
  $_SESSION["email"] = $pemail;
   $_SESSION["number"] = $pnumber;
    $_SESSION["address"] = $paddress;
    $_SESSION["description"]=$pdescription;
    $_SESSION["password"]=$ppassword;
    $_SESSION["image"]=$pimage;
    $_SESSION["userid"]=$pid;
// Check connection
 
if(isset($_POST['post'])){
$target="image/".basename($_FILES['postimage']['name']);
$category=$_POST['postcategory'];
$city=$_POST['postcity'];
$location=$_POST['postlocation'];
$description=$_POST['postdescription'];
$image=$_FILES['postimage']['name'];

if(move_uploaded_file($_FILES['postimage']['tmp_name'], $target)){
  echo "sucess";
}else{
   echo"error";
}

$sql = "INSERT INTO post (postlocation,postcategory,postcity,postdescription,postimage,userid)
VALUES ('$location','$category','$city','$description','$image','$dbid')";


if ($conn->query($sql) === TRUE) {
       $last_id = mysqli_insert_id($conn);
    //echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

////////////////fetch data for post ///////////////


$conn->close();
//session_destroy();
?>

<?php include 'header_menu.php' ;?>

<div class="top_bgcolor">
   <h5>HOME/<span>profile</span></h5>
     <div class="d-inline-block float_right">

       <a href="?pagetype=logout">
        <button class="btn btn_color">logout</button>
       </a>
       
       <a href="editprofilepage.php" >
       <button class="btn btn_color">Edit profile</button>
       </a>
    </div>
</div>

<div class="P_page_container">
  
  <div class="row">

    <div class="col-lg-4 left_sidebar_margin ">
       <div class="image-cover-box d-flex justify-content-center"> 
           <?php
          echo '<img src="image/'.$pimage.'" class="cover_photo rounded-circle">';          
              ?>
      </div>
      <div class=" display-text ">       
        <label class="pro_info_lable" >Name  : </label><label class="pro_info_value"><?php echo $pname;?></label><br>
        <label class="pro_info_lable" >Email  : </label><label class="pro_info_value"><?php echo $pemail;?></label><br>
        <label class="pro_info_lable" >Contact  : </label><label class="pro_info_value"><?php echo $pnumber;?></label><br>
        <label class="pro_info_lable" >Address  : </label><label class="pro_info_value"><?php echo $paddress;?></label><br>
         <label for="userpost" class=" pro_info_lable ">BIO :</label><br>
            <label class="pro_info_value"><?php echo $pdescription;?></label><br>
        
      </div>
    </div>

    <div class="col-lg-4 justify-content-center" >
      <h3 class="text_margin text-center ">Your Post</h3>
      <div class="scroll">
     
       
           <div class="card" >

             <?php

                 $conn = new mysqli($servername, $username, $password, $dbname);
                 $fetchdata="select * from post where userid='$dbid'";
                 $postdata=mysqli_query($conn,$fetchdata) or die('error getting data');
                while($row=mysqli_fetch_array($postdata)){

                     $ptlocation=$row['postlocation'];
                     $ptcity=$row['postcity'];
                     $ptcategory=$row['postcategory'];
                     $ptdescription=$row['postdescription'];
                     $ptimage=$row['postimage'];

                 echo '<img  class="card-img-top " src=image/'.$ptimage.' alt="Card image" >';          
                   echo '<div class="card-body">';
                     echo '<h4 class="text-heading">'. $ptcity.' </h4>';
                     echo '<h4 class="card_title">'. $ptlocation.' </h4>';
                   echo '<label class="text-heading">Category:</label><h4 class="card_title">'.$ptcategory.' </h4>';
                   
                      echo '<h6 class="text-heading">Discription:</h6>';
                       echo '<p class="card_text">'.$ptdescription.'</p>';                                
                  echo '</div>';
                  }
                   ?>
             </div>
          
             
          

             </div>               
    </div>

    <div class="col-lg-4 right_sidebar_margin scroll_right">
         <div class="">
        <label class="text-center text-style1">Post Your Experience</label>
        <form method="post" action="profile.php" enctype="multipart/form-data">
           <div class="form-group">
            <div>
             <h5 class="pro_info_lable">Uplode Image :</h5> <input type="file" name="postimage" class="inputfile">
            </div>
             <label for="userpost" class="col-form-label pro_info_lable ">Select Category :</label>
             <select name="postcategory" class="selectcategory">
               <option value="place">place</option>
               <option value="hotel">hotel</option>
               <option value="food">food</option>
               <option value="shopping">shopping</option>
               <option value="history">history</option>
               <option value="others">others</option>
           </select><br>
             <label for="userpost" class="col-form-label pro_info_lable ">Select City :</label>
             <select name="postcity" class="selectcity">
               <option value="Dhaka">Dhaka</option>
               <option value="Barishal">Barishal </option>
               <option value="Chittagong">Chittagong</option>
               <option value="Comilla">Comilla</option>
               <option value="Khulna">Khulna</option>
               <option value="Mymensingh">Mymensingh</option>
               <option value="Rajshahi">Rajshahi</option>
               <option value="Rangpur">Rangpur</option>
               <option value="Sylhet">Sylhet</option>

           </select>
           <br>
            <label class="col-form-label pro_info_lable ">Location:</label>
            <input type="text" class="form-control" name="postlocation" required>
            <label for="userpost" class="col-form-label pro_info_lable ">description :</label>
             <textarea class="form-control" cols="70" rows="4" name="postdescription" required></textarea>
          </div>
            <button type="submit" class="btn btn_color loginformbutton" value="uplode image" name="post">Post</button>
        </form>
      </div>
    </div>
  </div>
  
</div>

<?php include 'footer.php';?>