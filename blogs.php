
<?php
session_start();
?>
<?php include 'header_menu.php' ;?>
<div class="top_bgcolor">
<h5>HOME/<span>blogs</span></h5>
</div>


  
     <section class="blog-area section-padding-strict ">
        <div class="container">
      
          <div class="row">           
                    <div class="col-lg-8">
                        <div class="blog-posts">
                        
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

                                     $no_of_records_per_page = 3;
                                     $offset = ($pageno-1) * $no_of_records_per_page;

                                   $fetchdata="select * from post ORDER BY postid DESC limit $offset,$no_of_records_per_page";
                                   $blogdata=mysqli_query($conn,$fetchdata) or die('error getting data'); 
                                    
                                    while(  $row=mysqli_fetch_array($blogdata)){

                                       $ptlocation=$row['postlocation'];
                                       $ptcategory=$row['postcategory'];
                                       $ptdescription=$row['postdescription'];
                                       $ptcity=$row['postcity'];
                                        
                                         $text1 = substr($ptdescription, 0, 200);

                                       $ptimage=$row['postimage'];
                                       $ptid=$row['postid'];

                                       

                               echo '<div id="" class="main-div">';
                               echo '<div class="card ">';
                               echo '<figure>';
                                echo '<img  src=image/'.$ptimage.' class=" size-direo_blog post-image" alt="">';          
                                  echo '</figure>';
        
                               echo'<div class="card-body">';
                                 echo'<h3 class="attachment_category">'.$ptcity.'</h3> '; 
                                       
                                  echo' <div class="post-meta">';                          
                                  echo '<h5 class="attachment_location">'.$ptlocation.'</h5>'; 
                                  echo'<h6>'.$ptcategory.'</h6>'  ;                   
                                  echo '</div>';
                                    echo '<p class="attachment_description">'.$text1.'</p>';
                                echo'</div>';
                              echo'<button class="btn btn-sm btn_color" type="submit" > <a href="single.php?postid='.$ptid.'" style="text-decoration:none;color:#ffffff;">Continous</a></button>';
                             
                               echo'</div>';
                              echo'</div>';
                              
                                }
                                ?>

                        </div>
                     
                        <?php
                           
                         $total_pages_sql = "SELECT COUNT(*) FROM post";
                         $result = mysqli_query($conn,$total_pages_sql);
                         $total_rows = mysqli_fetch_array($result)[0];
                          $total_pages = ceil($total_rows / $no_of_records_per_page);
                                 
                               echo'<nav class=" pagination d-flex justify-content-center" role="navigation">';
                                  if($pageno>1){
                                    echo"<a href='blogs.php?pageno=".($pageno-1)."'class=' prev page-numbers'>previous</a>";
                                  }

                               for($i=1;$i<=$total_pages;$i++){
                                echo"<a href='blogs.php?pageno=".$i."'class=' page-numbers'>$i</a>";
                               }

                                if($i>$pageno){
                                    echo"<a href='blogs.php?pageno=".($pageno+1)."'class=' next page-numbers'>next</a>";
                                  }
                                  echo'</nav>';

                        ?>

                        
               

                 </div>



            <div class="col-lg-4 mt-5 mt-md-0">
                <div class="widget ">
                   
                    <div class="widget-wrapper">
                        <h6 class="text-heading">Stay Updated</h6>
                       <div class="subscribe-widget">
                          <form action="#" method="get">
                            <input type="email" class="form-control m-bottom-20" placeholder="Enter email">
                            <button class="btn btn-sm btn_color shadow-none" type="submit">Subscribe</button>
                        </form>
                      </div>
                   </div>


                  <div class="widget-wrapper">
                        <h6 class="widget-title">Connect &amp; Follow</h6>              
                    <div class="">
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


                    <div class="widget-default">
                       
                        <h6 class="widget-title">Categories</h6> 
                   		
                    <ul class="ul_">
				          
	                      <li class="cat-item "><a href="">PLace</a> </li>
	                     <li class="cat-item "><a href="">FOod</a> </li>
	                     <li class="cat-item "><a href="">HOtel</a> </li>
	                      <li class="cat-item "><a href="">HIstory</a> </li>
	                      <li class="cat-item "><a href="">SHopping</a> </li>
                        <li class="cat-item "><a href="">OThers</a> </li>

		            </ul>
			      </div>
               
        
                   <div class="widget-wrapper ">   
                     <div class="widget-content">
                        <h6 class="widget-title ">Recent Post</h6>
                       
                         <div class="post-single">
                          <div class="align-items-center">

                             <?php
                               
                               $servername = "localhost";
                               $username = "root";
                               $password = "";
                               $dbname = "citysight";

                                $conn = new mysqli($servername, $username, $password, $dbname);

                                if ($conn->connect_error) {
                                  die("Connection failed: " . $conn->connect_error);
                                  }
                                    $fetchdata1="select * from post ORDER BY postid DESC";
                                   $blogdata1=mysqli_query($conn,$fetchdata1) or die('error getting data'); 
                                        $x=0;
                                     while($x<4 && $row=mysqli_fetch_array($blogdata1)){

                                       $ptdescription=$row['postdescription'];
                                       $text = substr($ptdescription, 0, 55);
                                       $ptimage=$row['postimage'];
                                   echo'<div class="post-single">';
                                    echo'<div class="d-flex ">';
                                       echo' <img width="50" height="50" src=image/'.$ptimage.' class="rounded " alt="" srcset="" sizes="(max-width: 60px) 100vw, 60px">';                                    
                                            echo'<p class="post-title">
                                           '.$text.' </p>';
                                    echo'</div>';
                                echo'</div>';
                                $x++;
                                 }
                              ?>
                              </div>
                             </div>  
                       
                        </div>
                    </div>

       


              
             </div>
           </div>



          </div>
        </div>
      </div>
    </section>

  <?php include 'footer.php' ;?>
