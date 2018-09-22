<?php
include("db.php");
$username=$_SESSION['name'];
$sql=mysql_query("select * from admin where username='".$username."' ");
$row=mysql_fetch_array($sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Spice Online Store</title>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />

</head>
<body>

<div id="templatemo_wrapper">

    <div id="templatemo_header">
        <div id="site_title">
        
            <h1>Spice Online Store</h1>
            
        </div> <!-- end of site_title -->
    </div> <!-- end of header -->
    
  	<div id="templatemo_menu">
        <ul>
            <li><a href="index.php" class="current">Index</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="reg.php">Register</a></li>
            <li><a href="message.php">Message</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul> 
    </div> <!-- end of templatemo_menu -->
    
    <div id="templatemo_banner">
    
    			<span class="nav_bg"></span>
            
                <div id="one" class="contentslider">
                    <div class="cs_wrapper">
                        <div class="cs_slider">
                        
                            <div class="cs_article">
                            
                            	<div class="slider_content_wrapper">
                            	 <?PHP
 
$select=mysql_query("select * from offer where number=1 ");
$row=mysql_fetch_array($select);
 
 ?>
                      				<div class="right">
                                        <h2><?php echo $row['name'];?> </h2><br/>
                                        <p><big>Rs</big> <span style="font-size:50px"><?php echo $row['price'];?></span> <big> / Kg</big></p><br/>
                                        
                                        <div class="button"><a href="#">Buy</a></div>
                                    </div>
                                  <div class="left">
                                  <img src="admin/<?php echo $row['image']; ?>" alt="Image 01" />
                                    </div>
                                
                                </div>
                                                                
                            </div><!-- End cs_article -->
                            
                            <div class="cs_article">
                            
                            <div class="slider_content_wrapper">
                  				<div class="right">
                                 <?PHP
 
$select=mysql_query("select * from offer where number=4 ");
$row=mysql_fetch_array($select);
 
 ?>
                                    <h2><?php echo $row['name'];?></h2>
                                    <br/>
                                    <p><big>Rs</big> <span style="font-size:50px"><?php echo $row['price'];?></span> <big> / Kg</big></p>
                                    <p></p>
                                    
                                    <div class="button"><a href="#">Buy</a></div>
                               	</div>
                              <div class="left">
                                <a href="http://www.templatemo.com/page/2"> <img src="admin/<?php echo $row['image']; ?>" alt="Image 01" />
</a>
                                </div>
                                </div>
                            </div><!-- End cs_article -->
                            
                            <div class="cs_article">
                            
                            <div class="slider_content_wrapper">
                  				<div class="right">
                                 <?PHP
 
$select=mysql_query("select * from offer where number=3 ");
$row=mysql_fetch_array($select);
 
 ?>
                                    <h2><?php echo $row['name'];?></h2>
                                     <p><big>Rs</big> <span style="font-size:50px"><?php echo $row['price'];?></span> <big> / Kg</big></p><br/><br/>
                                    
                                    <div class="button"><a href="#">Buy</a></div>
                               	</div>
                              <div class="left">
                                <a href="http://www.templatemo.com/page/3"><img src="admin/<?php echo $row['image']; ?>" alt="Image 01" /></a>
                                </div>
                                
                                </div>
                            </div><!-- End cs_article -->
                            
                            <div class="cs_article">
                            
                            <div class="slider_content_wrapper">
                                
                         		 <div class="right">
                                 <?PHP
 
$select=mysql_query("select * from offer where number=2 ");
$row=mysql_fetch_array($select);
 
 ?>
                                    <h2><?php echo $row['name'];?></h2>
                                     <p><big>Rs</big> <span style="font-size:50px"><?php echo $row['price'];?></span> <big> / Kg</big></p>
                                    <br/><br/>
                                    <div class="button"><a href="#">Buy</a></div>
                               	</div>
                                <div class="left">
                                	<a href="#"><img src="admin/<?php echo $row['image']; ?>" alt="Image 01" /></a>
                                </div>
                                </div>
                                
                            </div><!-- End cs_article -->
                      
                        </div><!-- End cs_slider -->
                    </div><!-- End cs_wrapper -->
                </div><!-- End contentslider -->
                
                <!-- Site JavaScript -->
                <script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>
                <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
                <script type="text/javascript" src="js/jquery.ennui.contentslider.js"></script>
                <script type="text/javascript">
                    $(function() {
                    $('#one').ContentSlider({
                    width : '970px',
                    height : '240px',
                    speed : 400,
                    easing : 'easeOutSine'
                    });
                    });
                </script>
                
                <script src="js/jquery.chili-2.2.js" type="text/javascript"></script>
                <script src="js/chili/recipes.js" type="text/javascript"></script>
                <div class="cleaner"></div>
   
        </div>
     <div id="templatemo_main"><span class="main_top"></span> 
     
     
          <p class="welcome_text">&quot;Today Offers.&quot;</p>

     	<div class="col_w420 float_l">
     
     <?PHP
 
$select=mysql_query("select * from offer where number=1 ");
$row=mysql_fetch_array($select);
 
 ?>
                  <h2><?php echo $row['name'];?></h2>
                  
                  
                    
                  <div class="fl_img"><img src="admin/<?php echo $row['image']; ?>" width="150" alt="Our services" /></div>
                  <p><em>Today Offers For <?php echo $row['name'];?><br/>	
                  Price : <big>Rs <?php echo $row['price'];?></big>/ Kg<br/>
                  <?php echo $row['time'];?></em>
                  </p>
                  <br/>
                                    <div class="button float_r"><a href="login.php">Buy</a></div>
<br/><br/><br/><br/>
                    
                     <?PHP
 
$select=mysql_query("select * from offer where number=2 ");
$row=mysql_fetch_array($select);
 
 ?>
                  <h2><?php echo $row['name'];?></h2>
                  
                  
                    
                  <div class="fl_img"><img src="admin/<?php echo $row['image']; ?>" width="150" alt="Our services" /></div>
                  <p><em>Today Offers For <?php echo $row['name'];?><br/>	
                  Price : <big>Rs <?php echo $row['price'];?></big>/ Kg<br/>
                  <?php echo $row['time'];?></em>
                  </p>
                  <br/>
                                    <div class="button float_r"><a href="login.php">Buy</a></div>

                    <br/><br/><br/><br/>
                    
                     <?PHP
 
$select=mysql_query("select * from offer where number=3 ");
$row=mysql_fetch_array($select);
 
 ?>
                  <h2><?php echo $row['name'];?></h2>
                  
                  
                    
                  <div class="fl_img"><img src="admin/<?php echo $row['image']; ?>" width="150" alt="Our services" /></div>
                  <p><em>Today Offers For <?php echo $row['name'];?><br/>	
                  Price : <big>Rs <?php echo $row['price'];?></big>/ Kg<br/>
                  <?php echo $row['time'];?></em>
                  </p>
                  <br/>
                                    <div class="button float_r"><a href="login.php">Buy</a></div>

                  
                    
        
       </div>
               <div class="col_w420 float_r">
               <?PHP
 
$select=mysql_query("select * from offer where number=4 ");
$row=mysql_fetch_array($select);
 
 ?>
                  <h2><?php echo $row['name'];?></h2>
                 <div class="image_wrapper fl_img"><img src="admin/<?php echo $row['image']; ?>" width="150" alt="Our news" /></div>
                <p><em>Today Offers For <?php echo $row['name'];?><br/>	
                  Price : <big>Rs <?php echo $row['price'];?></big>/ Kg<br/>
                  <?php echo $row['time'];?></em>
                  </p>
                  <br/>
                                    <div class="button float_r"><a href="login.php">Buy</a></div>
                                   <br/><br/><br/><br/><br/>
                                     <?PHP
 
$select=mysql_query("select * from offer where number=5 ");
$row=mysql_fetch_array($select);
 
 ?>
                  <h2><?php echo $row['name'];?></h2>
                 <div class="image_wrapper fl_img"><img src="admin/<?php echo $row['image']; ?>" width="150" alt="Our news" /></div>
                <p><em>Today Offers For <?php echo $row['name'];?><br/>	
                  Price : <big>Rs <?php echo $row['price'];?></big>/ Kg<br/>
                  <?php echo $row['time'];?></em>
                  </p>
                  <br/>
                                    <div class="button float_r"><a href="login.php">Buy</a></div>
                                    
                                    <br/><br/><br/><br/><br/>
                                     <?PHP
 
$select=mysql_query("select * from offer where number=6 ");
$row=mysql_fetch_array($select);
 
 ?>
                  <h2><?php echo $row['name'];?></h2>
                 <div class="image_wrapper fl_img"><img src="admin/<?php echo $row['image']; ?>" width="150" alt="Our news" /></div>
                <p><em>Today Offers For <?php echo $row['name'];?><br/>	
                  Price : <big>Rs <?php echo $row['price'];?></big>/ Kg<br/>
                  <?php echo $row['time'];?></em>
                  </p>
                  <br/>
                                    <div class="button float_r"><a href="login.php">Buy</a></div>
                     
                   <div class="cleaner_h30"></div>
                   <h2></h2>
                      <blockquote>
                            
                      </blockquote>
              </div>
                
              <div class="cleaner"></div>
    </div> <!-- end of main -->
    <div id="templatemo_main_bottom"></div> <!-- end of main -->
    
    <div id="templatemo_footer">
    

    </div> <!-- end of templatemo_footer -->
</div> <!-- end of wrapper -->

</body>
</html>
