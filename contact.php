<?php
session_start();
$_SESSION['logoutid']='1';
$dbid=$_SESSION["id"] ;

?>
<?php


function input_text($string){
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}
$errorname='';
$erroremail='';
$errormassage='';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "citysight";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['send'])){

 if(empty($_POST['contactname'])){
      $errorname='<p><label class="text-danger">Please Enter your Name</label></p>';
  }else{
     $sendname = input_text($_POST['contactname']);
  if(!preg_match("/^[a-zA-Z ]*$/",$sendname))
  {
   $errorname = '<p><label class="text-danger">Only letters and white space allowed</label></p>';
  }

}
 if(empty($_POST["contactemail"]))
 {
  $erroremail = '<p><label class="text-danger">Please Enter your Email</label></p>';
 }
 else
 {
  $sendemail = input_text($_POST["contactemail"]);
  if(!filter_var($sendemail, FILTER_VALIDATE_EMAIL))
  {
   $erroremail = '<p><label class="text-danger">Invalid email format</label></p>';
  }
 }
  if(empty($_POST["contactmassage"]))
 {
  $errormassage = '<p><label class="text-danger">Subject is required</label></p>';
 }
 else
 {
  $sendmassage = input_text($_POST["contactmassage"]);
 }

if( $errorname==''&&$erroremail==''&&$errormassage==''){
   
$sql = "INSERT INTO massage (userid,contactname,contactemail,contactmassage)
VALUES ('$dbid','$sendname','$sendemail','$sendmassage')";


if ($conn->query($sql) === TRUE) {
       $last_id = mysqli_insert_id($conn);
       $_SESSION['formSubmitted'] = '1';
    //echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
   $_SESSION['formSubmitted'] = '2';
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}
?>
<?php include 'header_menu.php' ;?>
<div class="top_bgcolor">
<h5>HOME/<span>contact</span></h5>
</div>


<div class="container-fluid contact-bg">
  <div class="row">
    <div class="col-lg-8">
    	
       <div class="contact_form_widget">
       	<div class="widget_title">
            <h4><i class='fab fa-wpforms'></i><span class="la la-phone"></span>
                Contact form</h4>
           </div>
  <form method="post" action="contact.php"  onsubmit="openModal()" id="myForm" enctype="multipart/form-data">
    <?php echo $errorname; ?>

  <div class="form-group">
    <label for="contactname">Name</label>
    <input type="text" class="form-control" id="contactname" name='contactname'placeholder="type your name">
  </div>
  <?php echo $erroremail; ?>
   <div class="form-group">
    <label for="contactemail">Email address</label>
    <input type="email" class="form-control" id="contactemail" name="contactemail" placeholder="name@example.com">
  </div>
 <?php echo $errormassage; ?>
  <div class="form-group">
    <label for="contactmassage">Massage :</label>
    <textarea class="form-control" id="contactmassage" name="contactmassage"rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" id="contact_btn"value="send" name="send">
  send massage
</button>
</button>
</form>
       </div>
    </div>
    <div class="col-lg-4">
       <div class="contact_page_widget">

            <div class="widget_title">
            <h4><i class='fas fa-blender-phone'></i><span class="la la-phone"></span>
                Contact Info</h4>
           </div>
    
            <div class="widget-body ">
                <ul>
                             <li>
                                <span class="la la-map-marker"></span>
                                <span class="atbd_info">CITY SIGHT</span>
                            </li>
                             <li>
                                <span class="la la-phone"></span>
                                <span class="atbd_info">01775661330 and 01521424570</span>
                             </li>
                              <li>
                                <span class="la la-envelope"></span>
                                <span class="atbd_info">citysight@tech.com</span>
                             </li>
                              <li>
                                <span class="la la-globe"></span>
                                <span class="atbd_info">www.citysight.com</span>
                             </li>
                  </ul>
                   <div class="white mb-5">
              <a href="#"><span ><i class='fab fa-facebook-square' style='font-size:36px ; color:#5c5cd6;padding:5px;'></i></span></a>
              <a href="#"><span ><i class='fab fa-instagram' style='font-size:36px ; color:#5c5cd6;padding:5px;'></i></span></a>
              <a href="#"><span ><i class='fab fa-twitter-square' style='font-size:36px ; color:#5c5cd6;padding:5px;'></i></span></a>
            </div>
             </div>
           
         </div>

</div>
    </div>
  </div>
<div class="container-fluid">
<div class="quick_widget">
<div class="row">


<div class="col-lg-6 ">
<h2 class="footer-heading mb-4">Quick Links</h2>
<ul class="list-unstyled">
  <li><a href="index.php">Home</a></li>
<li><a href="blogs.php">Blogs</a></li>
<li><a href="about.php">About Us</a></li>
<li><a href="contact.php">Contact Us</a></li>
</ul>
</div>

<div class="col-lg-6">
<h2 class="footer-heading mb-4">Connect</h2>
<div class=" white mb-5">
<a href="https://www.facebook.com/?stype=lo&jlou=Afe4oHZMNbpJIm2CIKgwrkqfXbPBXp_uVzwjovuGI7W4V0cClyO834bxP8gRaoI4WZs_rCdnHoJlr4beEY2X2CLUeSZiQJkGQn2FT0TMtVo5JA&smuh=25941&lh=Ac-LE4kuhlik1wHN"><span ><i class='fab fa-facebook-square' style='font-size:36px; color:#ffffff;padding:5px;'></i></span></a>
<a href="https://www.instagram.com/accounts/login/"><span ><i class='fab fa-instagram' style='font-size:36px;color:#ffffff;padding:5px;'></i></span></a>
<a href="https://twitter.com/"><span ><i class='fab fa-twitter-square' style='font-size:36px;color:#ffffff;padding:5px;'></i></span></a>
</div>
</div>

</div>
</div>

</div>

<div class="modal fade" id="thankyouModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Thank you for pre-registering!</h4>
      </div>
      <div class="modal-body">
          <p>Thanks for getting in touch!</p>                     
      </div>    
    </div>
  </div>
</div>

<script >
$('#myForm').on('submit', function(e){
  $('#myModal').modal('show');
  e.preventDefault();
});
</script>
<?php include 'footer.php';?>