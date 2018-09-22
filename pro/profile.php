<?php
include("db.php");
$username=$_SESSION['uname'];
$sql=mysql_query("select * from signup where username='".$username."' ");
$row=mysql_fetch_array($sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo @$_SESSION['uname']; ?></title>

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
            <li><a href="home.php"class="current">Home</a></li>
            <li><a href="profile.php">My Profile</a></li>
            <li><a href="reg.php">Register</a></li>
            <li><a href="partners.html">About</a></li>
            <li><a href="logout.php">Logout</a></li>
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
        <div id="templatemo_menu">
        <ul>
            <li><a href="home.php">Cardamom</a></li>
            <li><a href="ginger.php">Ginner</a></li>
            <li><a href="clove.php">Clove</a></li>
            <li><a href="garlic.php">Garlic</a></li>
            <li><a href="cinnamon.php">Cinnamon</a></li>
            </ul> 
    </div>
     <div id="templatemo_main"><span class="main_top"></span> 
     <?php
     $sql=mysql_query("select * from signup where username='".$username."' ");
$row=mysql_fetch_array($sql);
?>
          <p class="welcome_text">&quot;WeLcome <?php echo $row['name'];?>&quot;</p>
          <div style="position:absolute; left:88%;  top:1.2%;"> 
<img class="img-rounded" src="<?php 

echo $row['image']; ?>" alt="User profile picture" width="100" height="100" style="inline-box-align:initial"></div>
   	    <table width="756" height="291" border="1">
     	    <tr>
     	      <th width="165" scope="row">Name</th>
     	      <td width="563"><center><?php echo $row['name'];?></center></td>
   	      </tr>
     	    <tr>
     	      <th scope="row">Image</th>
     	      <td><center><img class="img-rounded" src="<?php 

echo $row['image']; ?>" alt="User profile picture" width="100" height="100" style="inline-box-align:initial"></center></td>
   	      </tr>
     	    <tr>
     	      <th scope="row">Username</th>
     	      <td><center><?php echo $row['username'];?></center></td>
   	      </tr>
     	    <tr>
     	      <th scope="row">Email</th>
     	      <td><center><?php echo $row['email'];?></center></td>
   	      </tr>
     	    <tr>
     	      <th scope="row">Password</th>
     	      <td><center><?php echo $row['password'];?></center></td>
   	      </tr>
     	    <tr>
     	      <th scope="row">Phone Number</th>
     	      <td><center><?php echo $row['phone'];?></center></td>
   	      </tr>
     	    <tr>
     	      <th scope="row">Address</th>
     	      <td><center><?php echo $row['address'];?></center></td>
   	      </tr>
          <th scope="row"></th>
     	      <td><center><a href="profileupdate.php"><span style="font-size:30px">Edit</span></center></td>
   	      </tr>
   	    </table>
   	    <div class="col_w420 float_l">
                                                                 
    
          <h2></h2>
                      <blockquote>

          <div style="position: absolute; left: 887px; top: 125px;"> 

<div class="button"><a href="fennel.php">Fennel</a></div>
                                                                <div class="button"><a href="vanilla.php">Vanilla</a></div>
                                                                <div class="button"><a href="turmeric.php">Turmeric</a></div>
                                                                <div class="button"><a href="tamarind.php">Tamarind</a></div>
                                                                <div class="button"><a href="pepper.php">Pepper</a></div></div>

                  <br/>
                     
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