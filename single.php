<?php
session_start();
$ptid=$_GET['postid'];
$pid=$_SESSION["userid"];
echo $pid ;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "citysight";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}



$sql="select * from post where postid='$ptid'";
$sqldata=mysqli_query($conn,$sql) or die('error getting data');

while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){

                    $ptlocation=$row['postlocation'];
                     $ptcategory=$row['postcategory'];
                     $ptdescription=$row['postdescription'];
                     $ptimage=$row['postimage'];
                     $userid=$row['userid'];

}

$biosql="select * from usertable where userid='$userid'";
$biodata=mysqli_query($conn,$biosql) or die('error getting data');
while($row=mysqli_fetch_array($biodata)){

  $pname=$row['username'];
  $pimage=$row['userimage'];
  $pdescription=$row['userdescription'];
}

if(isset($_POST['PostComment'])){

$commentname=$_POST['commentname'];
$commentemail=$_POST['commentemail'];
$commentmassage=$_POST['commentmassage'];

$commentsql="INSERT INTO comment (commentname,commentemail,commentmassage,userid)
VALUES ('$commentname','$commentemail','$commentmassage','$pid')";

if ($conn->query($commentsql) === TRUE) {
       $last_id = mysqli_insert_id($conn);
    //echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $commentsql . "<br>" . $conn->error;
}

}
$conn->close();
?>
<?php include 'header_menu.php' ;?>
<div class="top_bgcolor">
<h5>HOME/<span>food</span></h5>
</div>




<div class="container">
<div class="row blog-entries element-animate fadeInUp element-animated">


<div class="col-md-12 col-lg-8 main-content">
<?php

  echo '<img  src=image/'.$ptimage.' class=" size-direo_blog post-image mt-4" alt="">';
echo'<h1 class="mb-4 mt-5">'. $ptlocation.'</h1>';
echo'<a class="category mb-5" href="#">Food</a> <a class="category mb-5" href="#">Travel</a>';
echo'<div class="post-content-body">';
echo'<p>'.$ptdescription.'</p>';



echo'</div>';


echo'<div class="pt-3">';
echo'<p class="text-heading">Categories: <a href="#">'.$ptcategory.'</a> </p>';
echo'</div>';
?>

<ul class="children">
<li class="comment">
<div class="vcard">
<img src="image/ador.jpg" alt="Image placeholder" class="user_image" height="50" width="50" >
</div>
<div class="comment-body">
<h3>ador</h3>
<div class="meta">January 9, 2018 at 2:21pm</div>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
<p><a href="#" class="reply rounded">Reply</a></p>
</div>
</li>
</ul>

<div class="pt-4">

<div class="comment-form-wrap pt-4">
<h3 class="mb-5">Leave a comment</h3>

<form action="single.php" class="p-5 bg-light" method="post">
<div class="form-group">
<label for="name">Name *</label>
<input type="text" class="form-control"  name="commentname">
</div>
<div class="form-group">
<label for="email">Email *</label>
<input type="email" class="form-control"  name="commentemail">
</div>
<div class="form-group">
<label for="message">Message</label>
<textarea  cols="30" rows="10" class="form-control" name="commentmassage"></textarea>
</div>
<div class="form-group">
 <button type="submit" value="PostComment" name="PostComment" class="btn btn-primary"><a href=single.php?postid=<?php echo $ptid ;?> style="text-decoration:none;color:#ffffff;">Post Comment</a></button>
</div>
</form>

</div>
</div>
</div>

<div class="col-md-12 col-lg-4 sidebar">
<div class="sidebar-box search-form-wrap">
<form action="#" class="search-form">
<div class="form-group">

<input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
</div>
</form>
</div>

<div class="sidebar-box">
<div class="bio text-center">
<?php
echo'<img src="image/'.$pimage.'" alt="Image Placeholder" class="img_fluid">';
?>
<div class="bio-body">
<h2><?php echo $pname;?></h2>
<p><?php echo $pdescription;?></p>


   <ul class="d-flex flex-wrap social" >
                                    <li>
                                        <a href="" class="gap">
                                            <span class="fab fa-google-plus-g"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="gap">
                                            <span class="fab fa-facebook"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="gap">
                                            <span class="fab fa-twitter"></span>
                                        </a>
                                    </li>
                                   <li>
                                        <a href="" class="gap">
                                            <span class="fab fa-linkedin-in"></span>
                                        </a>
                                  </li>                                
                        </ul>
</div>
</div>
</div>



<div class="sidebar-box">
<h3 class="heading">Categories</h3>
	
                    <ul class="ul_">
				          
	                      <li class="cat-item "><a href="">PLace</a> </li>
	                     <li class="cat-item "><a href="">FOod</a> </li>
	                     <li class="cat-item "><a href="">HOtel</a> </li>
	                      <li class="cat-item "><a href="">HIstory</a> </li>
	                      <li class="cat-item "><a href="">SHopping</a> </li>
                        <li class="cat-item "><a href="">OThers</a> </li>

		            </ul>
			      </div>
</div>

</div>

</div>
</div>






<?php include 'footer.php';?>