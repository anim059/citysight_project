<?php
session_start();
    //include_once('lode_once.php');
  //if($_SESSION['pageid']=='3'){
  //  $_SESSION['logoutid']='1';
  //}
 // else{
  //  $_SESSION['logoutid']='2';

 // }

  include 'registretion.php';

?>


<!doctype html>
<!DOCTYPE html>
<html lang="en">
     <head> 
	     <meta charset="utf-8">
	     <meta name="viewport" content="width=device-width, initial-scale=1">
	     <title>Cityside</title>
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
     <link rel="stylesheet" href="Css/slick-theme.css" />
    <link rel="stylesheet"  href="Css/slick.css" />
		<link rel="stylesheet" type="text/css" href="Css/stylesheet.css" />
		<link rel="stylesheet" type="text/css" href="Css/bootstrap.min.css" />
    
  
    
	 </head>
	 
	 
<body data-spy="scroll" data-target="#navbarResponsive">
     <div>
       <h1 class="text-center logo border border-secondary">CitySight</h1>
    </div>

   <div class="bgimg">
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar_opacity">
         <div class="container">
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav md-auto">
                            <li class="nav-item">
                              <a class="nav-link "href="index.php">HOME</a>
                            </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CATEGORY</a>
                              <ul class="dropdown-menu">
                               <li class="dropdown-item">
                                    <a class="nav-link" id="placepage" href="#">PLACES</a>
                               </li>
                               <li class="dropdown-item">
                                    <a class="nav-link " id="hotelpage" href="#">HOTEL</a>
                               </li>
                               <li class="dropdown-item">
                                    <a class="nav-link " id="foodpage" href="#">FOOD</a>
                               </li>
                               <li class="dropdown-item">
                                    <a class="nav-link " id="shoppingpage" href="#">SHOPPING</a>
                               </li>
                               <li class="dropdown-item">
                                    <a class="nav-link " id="historypage" href="#">HISTORY</a>
                               </li>
                               <li class="dropdown-item">
                                    <a class="nav-link " id="otherpage" href="#">OTHERS</a>
                               </li>
                              </ul>
                            </li>
                              <li class="nav-item">
                              <a class="nav-link " id="blogpage" href="#">BLOGS</a>
                            </li>

                            <li class="nav-item dropdown" >
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PAGES</a>
                               <ul class="dropdown-menu">
                               <li class="dropdown-item">
                                    <a class="nav-link " id="profilepage" href="#">PROFILE</a>
                               </li>
                               <li class="dropdown-item">
                                    <a class="nav-link "id="aboutpage" href="#">ABOUT</a>
                               </li>
                               <li class="dropdown-item">
                                      <a class="nav-link "id="contactpage" href="#">CONTECT</a>
                               </li>

                             </ul>
                            </li>
                            <button style="background-color: #3b004f;color: #ffffff;text-align: center;font-size: 15px; height: 40px; margin-top: 10px;">Book your tour</button>
                        </ul>
                   </div>
                     <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                               

                              <a class="nav-link nav_link_text" data-toggle="modal" data-target="#loginform" data-whatever="@getbootstrap" href="#login">
                                <i class='fas fa-user-tie' style='font-size:24px; color:white;padding-right:2px;'></i>Login</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link nav_link_text"data-toggle="modal" data-target="#Registerform" data-whatever="@getbootstrap" href="#register">
                                <i class='fas fa-registered' style='font-size:24px; color:white;padding-right:2px;'></i>Register</a>
                            </li>
                           
                        </ul>
                   </div>
         </div>
       </nav>
        <div class="container text-center headerset">
          <p id="demo"></p>
           <h1>welcome To CitySight</h1>
             <h3>know the cities in bangladesh </h3>
               <div class="input-group mb-3">
                 <input type="text" class="form-control" placeholder="Search a  location">
                  <div class="input-group-append">
                  <button type="button" class="btn btn-dark">Search</button>
                  </div>
               </div>
        </div>      
   </div>

<!---category section-->
   <section class="category bg-light">
     <div class="container categoryheardertext border">
        <h1>ListingAround The City</h1>
        <p>Explore The City</p>
     </div>
     
     <div class="container">
      
          <div class="category_outer">

            <div class="category_inner justify-content-center">
                  <div class="card" >
                     <img class="cardImg" src="image/history.jpg" alt="Card image" >
                     <div class="centered">
                       <i class='fas fa-chart-area' style='font-size:24px;color:#ffffff; transform: translate(120%, -120%);'></i>
                    <h4>PLACES</h4>
                     <a href="#" id="placepage1" class="btn btn-primary stretched-link">See more</a>
                    </div>
                    </div>
            </div>
            

           <div class="category_inner justify-content-center">
                  <div class="card" >
                     <img class="cardImg" src="image/hotel.jpg" alt="Card image" >
                     <div class="centered">
                       <i  class='fas fa-hotel' style='font-size:24px;color:#ffffff; transform: translate(120%, -120%);'></i>
                    <h4>HOTEL</h4>
                     <a href="#" id="hotelpage1" class="btn btn-primary stretched-link">See more</a>
                    </div>
                    </div>
            </div>
            
           

           <div class="category_inner justify-content-center">
                  <div class="card" >
                     <img class="cardImg" src="image/food.jpg" alt="Card image" >
                     <div class="centered">
                       <i class='fas fa-hamburger'style='font-size:24px;color:#ffffff; transform: translate(120%, -120%);'></i>
                    <h4>FOOD</h4>
                     <a href="#" id="foodpage1" class="btn btn-primary stretched-link">See more</a>
                    </div>
                    </div>
            </div>
           
           <div class="category_inner justify-content-center">
                  <div class="card" >
                     <img class="cardImg" src="image/history.jpg" alt="Card image" >
                     <div class="centered">
                       <i class='fas fa-archway' style='font-size:24px;color:#ffffff; transform: translate(120%, -120%);'></i>
                    <h4>HISTORY</h4>
                     <a href="#" id="historypage1" class="btn btn-primary stretched-link">See more</a>
                    </div>
                    </div>
            </div>

            <div class="category_inner justify-content-center">
                  <div class="card" >
                     <img class="cardImg" src="image/shopping.jpg" alt="Card image" >
                     <div class="centered">
                      <i class='fas fa-shopping-cart' style='font-size:24px;color:#ffffff; transform: translate(120%, -120%);'></i>
                    <h4>SHOPPING</h4>
                     <a href="#" id="shoppingpage1" class="btn btn-primary stretched-link">See more</a>
                    </div>
                    </div>
            </div>

          <div class="category_inner justify-content-center">
                  <div class="card" >
                     <img class="cardImg" src="image/intro.jpg" alt="Card image" >
                     <div class="centered">
                       <i <i class='fas fa-mountain' style='font-size:24px;color:#ffffff; transform: translate(120%, -120%);'></i>
                    <h4>OTHERS</h4>
                     <a href="#" id="otherpage1" class="btn btn-primary stretched-link">See more</a>
                    </div>
                    </div>
            </div>

          </div>
     </div>
    </div>
   </section>
   <!---post section -->
                 <section>
                   <div class="container">
                    <div class="row d-flex justify-content-center">
                      <div class="">
                      <div class="col-md-12">
                         <div class=" allheardertext border">
                           <h2 class="post_para">POSTS</h2>
                        </div>
                    
                          <div class="post-wrapper2">                                 
                                 <?php     
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "citysight";
                                        
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        $fetchdata="select * from post ORDER BY postid DESC";
                                        $postdata=mysqli_query($conn,$fetchdata) or die('error getting data');
                                            $x=0;
                                          while($x<6 && $row=mysqli_fetch_array($postdata)){
                                             $ptlocation=$row['postlocation'];
                                              $ptcategory=$row['postcategory'];
                                             $ptdescription=$row['postdescription'];
                                             $ptcity=$row['postcity'];
                                               $text = substr($ptdescription, 0, 150);
                                            $ptimage=$row['postimage'];
                                             echo '<div class="category_inner1">';
                                            echo '<div class="card" >';                                               
                                            echo '<img  class="card-img-top" src=image/'.$ptimage.' alt="Card image" >';          
                                           echo '<div class="card-body">';
                                        echo '<h4 class="text-heading"> '. $ptcity.' </h4><br>';
                                         
                                          echo '<h4 class="text-heading"> '. $ptlocation.' </h4><br>';
                                        //echo '<h6 class="text-heading">Discription:</h6>';
                                         echo '<p class="card_text">'.$text.'</p>';  
                                         echo '<h4 class="card_title btn_color">'.$ptcategory.' </h4>';                              
                                           echo '</div>';
                                                echo '</div>';
                                                 echo '</div>';
                                                 $x++;
                                               }
                                               
                                  ?>
                                                              
                          </div>
                        </div>
                      </div>
                       <div class="text-center ">
                             <a href="#" id="blogpage_btn" class="btn btn-primary post-stretched-link">See more</a>
                         </div>
                    </div>
                   </div>
                 </section>

<!---About us -->
                 <section class="bg-light">
                       <div class="container">
                            <div class="row ">           
                               <div class="col-md-12">
                                
                                      <div class="allheardertext border">
                                             <h2>About Us</h2><p class="comment_slider_para">Here is the info</p>
                                      </div>
                                      <div class="slider-area">
                                      <div class="about-wrapper">
                                         <div class="about">
                                          <div class="carousel-single">
                                               
                                                 <img src="image/anim.jpg" alt="tthumb1" class="rounded-circle">
                                            
                                             <div class="author-info">
                                                  <h4 class="about_slider_para">Istiaque hashem</h4>
                                                  <span>Gandaria,Dhaka</span>
                                                  </div>
                
                                              <p class="author-about">Hi, I’m anim. 
                                               I am student of ahsanullah science and engineering univercity 
                                               department of cse, I've done this project with html,css,
                                               javascript,php etc and also use some plugins.
                                               I'm quietly confident, naturally curious, 
                                               and perpetually working on improving my chops one design 
                                               problem at a time.</p>
                                           </div>
                                         </div>
                                         <div class="about">  <div class="carousel-single">
                                               
                                                 <img src="image/ador.jpg" alt="tthumb1" class="rounded-circle">
                                         
                                             <div class="author-info">
                                                  <h4 class="about_slider_para">Almas Shahriar ador</h4>
                                                  <span>Mohammudpur, Dhaka</span>
                                                  </div>
                
                                              <p class="author-comment">Hi, My name is almas . 
                                                  I am student of ahsanullah science and engineering univercity 
                                                  department of cse, I'also have done this project with html,css,
                                                  javascript,php etc and also use some plugins.
                                                  I'm quietly confident, naturally curious, 
                                                  and perpetually working on improving my chops one design 
                                                  problem at a time.</p>
                                           </div>
                                         </div>
                                     
                                      </div>
                                      </div>
                               
                              </div>       
                           </div>
                      </div>
                  </section>
<!---About us -->

 <!--- subcription section-->

  <section class="subscribe-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="subcrip_header">Subscribe for more update</h1>
                <p>Subscribe to get update and information. Don't worry, we won't send spam!</p>
                <div class="row">
                    <div class="col-lg-8 ">
                        <form action="#" method="get">
                            <div class="form-group">
                               
                                <input type="email" placeholder="Enter your email" size="55" value="" name="EMAIL" class="required_email" id="mce-EMAIL" required="">
                            </div>
                            <button type="submit" class=" btn_property">Subscrip</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
       <!--- shortcutt section-->    

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

     <!--- bottom section-->
     <section>
     <div class="footer-bottom" id="footer_bg_color">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-bottom-content" id="footer_text_color">
                            <a href="" class="footer-text">
                          <h3> CitySight </h3>
                            </a>
                          <p class="footer_para">©2019 citysight. Made  <i class="la la-heart-o"></i> by <a href="#" class="footer-text"><span >anim and ador</span></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>



 <!--- login popup form-->
<div class="modal fade" id="loginform" tabindex="10" role="dialog" aria-labelledby="loginform" aria-hidden="true">
  <div class="modal-dialog" role="dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class=" text-center" id="loginform">Login form</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>
      <div class="modal-body">
        <form action="validetion.php" method="post">

          <div class="form-group">
            <label for="useremail" class="col-form-label">Email</label>
            <input type="text" class="form-control" name="useremail" required>
          </div>
          <div class="form-group">
            <label for="userpassword" class="col-form-label">password:</label>
            <input class="form-control" type="password"name="userpassword" required>
          </div>
          <input type="checkbox" aria-label="Checkbox for following text input"><label>Remember password</label>
       <div class="modal-footer">
         <a href="?pagetype=login">
         <button type="submit" class="btn btn-primary loginformbutton">login</button>
         <?php $_SESSION['pageid']='3'; ?>
       </a>
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>

<!--- registretion form-->
<div class="modal fade" id="Registerform" role="dialog" aria-labelledby="registerform" aria-hidden="true">
    <div class="modal-dialog" role="dialog">
      <div class="modal-content">
         <div class="modal-body">
        <form action="registretion.php" method="post" enctype="multipart/form-data">
            <?php echo $errorname; ?>
          <div class="form-group">
            <label for="username" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="username" required>
          </div>
            <?php echo $erroremail; ?>
          <div class="form-group">
            <label for="useremail" class="col-form-label">email:</label>
            <input class="form-control" name="useremail" required>
          </div>
            <?php echo $errornumber; ?>
           <div class="form-group">
            <label for="usercell" class="col-form-label">cellnumber:</label>
            <input class="form-control" name="usernumber" required>
          </div>
            <?php echo $erroraddress; ?>
           <div class="form-group">
            <label for="useraddress" class="col-form-label">address:</label>
            <textarea class="form-control" name="useraddress" required></textarea>
          </div>
            <?php echo $errorpassword; ?>
           <div class="form-group">
            <label for="userpassword" class="col-form-label">password:</label>
            <input class="form-control" name="userpassword" required>
             <label>uplode image</label>
           <input type="file" name="userimage" class="inputfile">
          </div>
           <div class="modal-footer">

        <button type="submit" class="btn btn-primary loginformbutton" value="submit" name="submit">submit</button>
      </div>
        </form>
      </div>
      </div>
    </div>
</div>
<!---  Script source files-->
<script>
$('#loginform').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
});

$('#Registerform').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
});


}

</script>


<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--- usse for about section-->


<script >
var logid=<?php echo $_SESSION['logoutid']?>;
document.getElementById("demo").innerHTML = logid;
////blog page///////
if(logid==2){
$( "#blogpage_btn" ).click(function() {
  $('#loginform').modal('show');
});
}else{
  var url1="blogs.php";
  $(document).ready(function(){
$( "#blogpage_btn" ).click(function() {
  $(location).attr('href',url1);
});
});
}
if(logid==2){
$( "#blogpage" ).click(function() {
  $('#loginform').modal('show');
});
}else{
  var url10="blogs.php";
  $(document).ready(function(){
$( "#blogpage" ).click(function() {
  $(location).attr('href',url10);
});
});
}
///////profile page///////
if(logid==2){
  $(document).ready(function(){
$( "#profilepage" ).click(function() {
  $('#loginform').modal('show');
});
});
}else{
  var url11="profile.php";
  $(document).ready(function(){
$( "#profilepage" ).click(function() {
  $(location).attr('href',url11);
});
});
}
  //////places page
if(logid==2){
$( "#placepage").click(function() {
  $('#loginform').modal('show');
});
}else{
  var url3="places.php";
$( "#placepage" ).click(function() {
  $(location).attr('href',url3);
});
}
if(logid==2){
$( "#placepage1").click(function() {
  $('#loginform').modal('show');
});
}else{
  var url3="places.php";
$( "#placepage1" ).click(function() {
  $(location).attr('href',url3);
});
}
//////hotel page
if(logid==2){
$( "#hotelpage").click(function() {
  $('#loginform').modal('show');
});
}else{
  var url4="hotel.php";
$( "#hotelpage" ).click(function() {
  $(location).attr('href',url4);
});
}

if(logid==2){
$( "#hotelpage1").click(function() {
  $('#loginform').modal('show');
});
}else{
  var url4="hotel.php";
$( "#hotelpage1" ).click(function() {
  $(location).attr('href',url4);
});
}

//////food page
if(logid==2){
$( "#foodpage" ).click(function() {
  $('#loginform').modal('show');
});
}else{
  var url5="food.php";
$( "#foodpage" ).click(function() {
  $(location).attr('href',url5);
});
}
if(logid==2){
$( "#foodpage1" ).click(function() {
  $('#loginform').modal('show');
});
}else{
  var url="food.php";
$( "#foodpage1" ).click(function() {
  $(location).attr('href',url);
});
}
//////shopping page
if(logid==2){
$( "#shoppingpage" ).click(function() {
  $('#loginform').modal('show');
});
}else{
  var url6="shopping.php";
$( "#shoppingpage" ).click(function() {
  $(location).attr('href',url6);
});
}
if(logid==2){
$( "#shoppingpage1" ).click(function() {
  $('#loginform').modal('show');
});
}else{
  var url6="shopping.php";
$( "#shoppingpage1" ).click(function() {
  $(location).attr('href',url6);
});
}
//////history page
if(logid==2){
$( "#historypage" ).click(function() {
  $('#loginform').modal('show');
});
}else{
  var url7="history.php";
$( "#historypage" ).click(function() {
  $(location).attr('href',url7);
});
}
if(logid==2){
$( "#historypage1" ).click(function() {
  $('#loginform').modal('show');
});
}else{
  var url7="history.php";
$( "#historypage1" ).click(function() {
  $(location).attr('href',url7);
});
}
//////other page
if(logid==2){
$( "#otherpage" ).click(function() {
  $('#loginform').modal('show');
});
}else{
  var url8="others.php";
$( "#otherpage" ).click(function() {
  $(location).attr('href',url8);
});
}
if(logid==2){
$( "#otherpage1" ).click(function() {
  $('#loginform').modal('show');
});
}else{
  var url8="others.php";
$( "#otherpage1" ).click(function() {
  $(location).attr('href',url8);
});
}
//////about page
if(logid==2){
$( "#aboutpage" ).click(function() {
  $('#loginform').modal('show');
});
}else{
  var url9="about.php";
$( "#aboutpage" ).click(function() {
  $(location).attr('href',url9);
});
}
//////contect page
if(logid==2){
$( "#contactpage" ).click(function() {
  $('#loginform').modal('show');
});
}else{
  var url9="contact.php";
$( "#contactpage" ).click(function() {
  $(location).attr('href',url9);
});
}
</script>

<script src="js/slick.js"></script>
<script>
 $(".about-wrapper").slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
      });

 $("").slick({
    slidesToShow: 2,
    slidesToScroll: 2,
     dots: true,
     infinite: true,
     mobileFirst:true,
    responsive: [
        {
            breakpoint: 425,
             settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                    
                }
        }
    ]
});



 </script>
</body>

</html>










