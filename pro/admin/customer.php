<?php
include("db.php");
$username=$_SESSION['name'];
$sql=mysql_query("select * from admin where username='".$username."' ");
$row=mysql_fetch_array($sql);
?>
<?php
if($_GET['del'])
{
$delete=mysql_query("delete from cardamom where number='".$_GET['del']."'");
if($delete>0)
{
header('location:home1.php');
}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Spice Online Store</title>
<link href="../templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="../css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />

</head>
<body>

<div id="templatemo_wrapper">

    <div id="templatemo_header">
        <div id="site_title">
        
            <h1>Welcome To - Admin</h1>
            
        </div> <!-- end of site_title -->
    </div> <!-- end of header -->
    <?php
$select=mysql_query("select * from pay where status=1 ");
   $view=mysql_num_rows($select);
   $view1=$view+$count+1;
   for($i=0;$i<$view;$i++)
   ?>
  	<div id="templatemo_menu">
        <ul>
            <li><a href="admin.php"  >Index</a></li>
            <li><a href="offer.php">Add Offers</a></li>
            <li><a href="msg.php">Messages</a></li>
            <li><a href="customer.php"class="current">Sales&Customers-(<?php echo $view;?>)</a></li>
            <li><a href="../logout.php">Logout</a></li>
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
                                  <img src="<?php echo $row['image']; ?>" alt="Image 01" />
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
                                <a href="http://www.templatemo.com/page/2"> <img src="<?php echo $row['image']; ?>" alt="Image 01" />
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
                                <a href="http://www.templatemo.com/page/3"><img src="<?php echo $row['image']; ?>" alt="Image 01" /></a>
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
                                	<a href="#"><img src="<?php echo $row['image']; ?>" alt="Image 01" /></a>
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
            <li><a href="cardamon.php"  >Cardamon</a></li>
            <li><a href="pepper.php">Pepper</a></li>
            <li><a href="clove.php">Clove</a></li>
            <li><a href="cinnamon.php">Cinnamon</a></li>
            <li><a href="ginger.php">Ginger</a></li>
        </ul> 
    </div> 
    <div id="templatemo_menu">
        <ul>
            <li><a href="garlic.php" >Garlic</a></li>
            <li><a href="vanilla.php">Vanilla</a></li>
            <li><a href="fennel.php">Fennel</a></li>
            <li><a href="turmeric.php">Turmeric</a></li>
            <li><a href="tamarind.html">Tamarind</a></li>
        </ul> 
    </div>  <?php
$select=mysql_query("select * from pay where status=1 ");
   $view=mysql_num_rows($select);
   $view1=$view+$count+1;
   for($i=0;$i<$view;$i++)
   ?>
     <div id="templatemo_main"><span class="main_top"></span> 
     
     
          <p class="welcome_text">&quot; New Order-(<?php echo $view;?>)&quot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <?php
$select=mysql_query("select * from pay where status=0 ");
   $view=mysql_num_rows($select);
   $view1=$view+$count+1;
   for($i=0;$i<$view;$i++)
   ?><a href="totalcustomer.php">Total Customer-(<?php echo $view;?>)</a></p>

     	
<table class="table table-hover" >

<table width="787" background="images/gallery_bg.jpg" height="100" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td width="112" height="45" bgcolor="#CCCCCC" align="center"><span style="font-size:25px">Photo</span></td>
        <td width="164" height="45" bgcolor="#CCCCCC" align="center"><span style="font-size:25px">Name</span></td>

    <td width="240" bgcolor="#CCCCCC" align="center"><span style="font-size:25px">Time</span></td>
        <td width="259" bgcolor="#CCCCCC" align="center"><span style="font-size:25px">Action</span></td>

  </tr></div>
 <?PHP
$select=mysql_query("select * from pay where status=1 ");
$view=mysql_num_rows($select);
 for($i=0;$i<$view;$i++)
 {
 ?>
 <div class="table-responsive">

 <tr>
    <td align="center"><span style="font-size:16px"><img src="<?php echo mysql_result($select,$i,"img");?>" width="100" height="100" /></span></td>
        <td align="center"><span style="font-size:16px"><?php echo mysql_result($select,$i,"name");?></span></td>

    <td align="center"><span style="font-size:16px"><?php echo mysql_result($select,$i,"time");?></span></td>
    <td align="center"><a href="customer1.php?edit=<?php echo mysql_result($select,$i,"no");?>">View</a>
  </tr></center>
  <?PHP
  }
  ?>
  <br/>
</table>


   
</div>

    
        </div>
             
 <!-- Site JavaScript -->
                <script type="text/javascript" src="../js/jquery-1.3.1.min.js"></script>
                <script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
                <script type="text/javascript" src="../js/jquery.ennui.contentslider.js"></script>
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
                
                <script src="../js/jquery.chili-2.2.js" type="text/javascript"></script>
                <script src="../js/chili/recipes.js" type="text/javascript"></script>
    
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