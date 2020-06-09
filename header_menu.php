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

   <div class="bgimg2">
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
                                    <a class="nav-link "href="places.php">PLACES</a>
                               </li>
                               <li class="dropdown-item">
                                    <a class="nav-link "href="hotel.php">HOTEL</a>
                               </li>
                               <li class="dropdown-item">
                                    <a class="nav-link "href="food.php">FOOD</a>
                               </li>
                               <li class="dropdown-item">
                                    <a class="nav-link "href="shopping.php">SHOPPING</a>
                               </li>
                               <li class="dropdown-item">
                                    <a class="nav-link "href="history.php">HISTORY</a>
                               </li>
                               <li class="dropdown-item">
                                    <a class="nav-link "href="others.php">OTHERS</a>
                               </li>
                              </ul>
                            </li>
                              <li class="nav-item">
                              <a class="nav-link "href="blogs.php">BLOGS</a>
                            </li>

                            <li class="nav-item dropdown" >
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PAGES</a>
                               <ul class="dropdown-menu">
                               <li class="dropdown-item">
                                    <a class="nav-link "href="profile.php">PROFILE</a>
                               </li>
                               <li class="dropdown-item">
                                    <a class="nav-link "href="about.php">ABOUT</a>
                               </li>
                               <li class="dropdown-item">
                                      <a class="nav-link "href="contact.php">CONTECT</a>
                               </li>
                             </ul>
                            </li>
                             <button style="color:#660066;text-align:center;font-size:15px;">Book your tour</button>
                        </ul>
                   </div>
                   <!---
                     <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                              <a class="nav-link nav_link_text"data-toggle="modal" data-target="#loginform" data-whatever="@getbootstrap" href="#login">
                                <i class='fas fa-user-tie' style='font-size:24px; color:white;padding-right:2px;'></i>Login</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link nav_link_text"data-toggle="modal" data-target="#Registerform" data-whatever="@getbootstrap" href="#register">
                                <i class='fas fa-registered' style='font-size:24px; color:white;padding-right:2px;'></i>Register</a>
                            </li>
                           
                        </ul>
                   </div>
                 -->
         </div>
       </nav>    
   </div>


</div>
   <!--- login popup form
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
        <button type="submit" class="btn btn-primary loginformbutton">login</button>
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>

 registretion form
<div class="modal fade" id="Registerform" role="dialog" aria-labelledby="registerform" aria-hidden="true">
    <div class="modal-dialog" role="dialog">
      <div class="modal-content">
         <div class="modal-body">
        <form action="registretion.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="username" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="username" required>
          </div>
          <div class="form-group">
            <label for="useremail" class="col-form-label">email:</label>
            <input class="form-control" name="useremail" required>
          </div>
           <div class="form-group">
            <label for="usercell" class="col-form-label">cellnumber:</label>
            <input class="form-control" name="usernumber" required>
          </div>
           <div class="form-group">
            <label for="useraddress" class="col-form-label">address:</label>
            <textarea class="form-control" name="useraddress" required></textarea>
          </div>
           <div class="form-group">
            <label for="userpassword" class="col-form-label">password:</label>
            <input class="form-control" name="userpassword" required>
             <label>give image</label>
           <input type="file" name="userimage" >
          </div>
           <div class="modal-footer">
        <button type="submit" class="btn btn-primary loginformbutton" value="submit" name="submit">submit</button>
      </div>
        </form>
      </div>
      </div>
    </div>
</div>
-->