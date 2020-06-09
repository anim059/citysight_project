<?php include 'header_menu.php' ;?>
<div class="top_bgcolor">
<h5>HOME/<span>history</span></h5>
</div>

<section class="page-area">
            <div class="container" style="overflow: visible;">
                <div class="row d-flex justify-content-center" style="overflow: visible;">
                    <div class="col-md-12" style="overflow: visible;">
                        <div class="post-wrapper2">
                           
                           <?php

                                $servername = "localhost";
                               $username = "root";
                               $password = "";
                               $dbname = "citysight";

                                 $conn = new mysqli($servername, $username, $password, $dbname);

                                if ($conn->connect_error) {
                                  die("Connection failed: " . $conn->connect_error);
                                  }
                                    if (isset($_GET['pageno'])) {
                                   $pageno = $_GET['pageno'];
                                           } else {
                                        $pageno = 1;
                                           }
                                     $no_of_records_per_page = 6;
                                     $offset = ($pageno-1) * $no_of_records_per_page;

                                   $fetchdata="select p.postlocation,p.postcategory,p.postdescription,p.postimage,u.userimage
                                    from post as p 
                                     join usertable as u on 
                                     u.userid=p.userid and postcategory='history' ORDER BY postid DESC limit $offset,$no_of_records_per_page";
                                   $foodpagedata=mysqli_query($conn,$fetchdata) or die('error getting data'); 

                                   while(  $row=mysqli_fetch_array($foodpagedata)){

                                     $ptlocation=$row['postlocation'];
                                       $ptcategory=$row['postcategory'];
                                       $ptdescription=$row['postdescription'];
                                       $ptimage=$row['postimage'];
                                        $pimage=$row['userimage'];

                           echo '<article class=" category_inner1 food_post_widget">';
                                echo'<figure >';
                                    echo'<div >';
                                         echo' <a href="">';
                                            echo'<img src=image/'.$ptimage.' class="card-img-top " alt="Kung Food &amp; Drinks">';
                                         echo' </a>';  
                                        
                                         echo'<img alt="" src=image/'.$pimage.' srcset="" class="user_image" height="50" width="50">';
                                         
                                    echo'</div>';
                                  
                                echo '</figure>';
                               echo '<div class="listing_info">';
                                  echo'<div class="content_upper">';
                                      echo'<h4 class="text-heading">';
                                        echo'<a href="">'. $ptlocation.'</a>';                            
                                      echo'</h4>';
                                  echo'</div>';                                
                                 echo'</div>';
                                   echo'<span class="text-heading">'.$ptcategory.'</span>';
                                echo' <p class="card_text">'.$ptdescription.'</p>';
                            echo'</article>'; 
                               
                               }
                            ?>
                        </div>
                    </div>
                        <?php
                           
                         $total_pages_sql = "SELECT COUNT(*) FROM post where postcategory = 'history'";
                         $result = mysqli_query($conn,$total_pages_sql);
                         $total_rows = mysqli_fetch_array($result)[0];
                          $total_pages = ceil($total_rows / $no_of_records_per_page);
                                 
                               echo'<nav class=" pagination d-flex justify-content-center" role="navigation">';
                                  if($pageno>1){
                                    echo"<a href='history.php?pageno=".($pageno-1)."'class=' prev page-numbers'>previous</a>";
                                  }

                               for($i=1;$i<=$total_pages;$i++){
                                echo"<a href='history.php?pageno=".$i."'class=' page-numbers'>$i</a>";
                               }

                                if($i>$pageno){
                                    echo"<a href='history.php?pageno=".($pageno+1)."'class=' next page-numbers'>next</a>";
                                  }
                                  echo'</nav>';

                        ?>
                </div>
            </div>

        </section>

        <div class="container-fluid">
<div class="quick_widget">
<div class="row">


<div class="col-lg-6 ">
<h2 class="footer-heading mb-4">Quick Links</h2>
<ul class="list-unstyled">
  <li><a href="#">Home</a></li>
<li><a href="#">Blogs</a></li>
<li><a href="#">About Us</a></li>
<li><a href="#">Privacy</a></li>
<li><a href="#">Contact Us</a></li>
</ul>
</div>

<div class="col-lg-6">
<h2 class="footer-heading mb-4">Connect</h2>
<div class=" white mb-5">
<a href="#"><span ><i class='fab fa-facebook-square' style='font-size:36px; color:#ffffff;padding:5px;'></i></span></a>
<a href="#"><span ><i class='fab fa-instagram' style='font-size:36px;color:#ffffff;padding:5px;'></i></span></a>
<a href="#"><span ><i class='fab fa-twitter-square' style='font-size:36px;color:#ffffff;padding:5px;'></i></span></a>
</div>
</div>

</div>
</div>

</div>
<?php include 'footer.php';?>