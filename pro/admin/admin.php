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
header('location:admin.php');
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
   
  	<div id="templatemo_menu">
        <ul>
            <li><a href="admin.php" class="current" >Index</a></li>
            <li><a href="offer.php">Add Offers</a></li>
             <?php
$select=mysql_query("select * from message where status=1 ");
   $view=mysql_num_rows($select);
   $view1=$view+$count+1;
   for($i=0;$i<$view;$i++)
   ?>
            <li><a href="msg.php">Messages-(<?php echo $view;?>)</a></li>
             <?php
$select=mysql_query("select * from pay where status=1 ");
   $view=mysql_num_rows($select);
   $view1=$view+$count+1;
   for($i=0;$i<$view;$i++)
   ?>
            <li><a href="customer.php">Sales&Customers-(<?php echo $view;?>)</a></li>
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
   
        </div> <?php
$select=mysql_query("select * from cardamom");
   $view=mysql_num_rows($select);
   $view1=$view+$count+1;
   for($i=0;$i<$view;$i++)
   ?>
        <div id="templatemo_menu">
        <ul>
            <li><a href="cardamon.php"  >Cardamon - (<?php echo $view;?>)</a></li>
            <?php
$select=mysql_query("select * from pepper");
   $view=mysql_num_rows($select);
   $view1=$view+$count+1;
   for($i=0;$i<$view;$i++)
   ?>
            <li><a href="pepper.php">Pepper- (<?php echo $view;?>)</a></li>
             <?php
$select=mysql_query("select * from clove");
   $view=mysql_num_rows($select);
   $view1=$view+$count+1;
   for($i=0;$i<$view;$i++)
   ?>
            <li><a href="clove.php">Clove- (<?php echo $view;?>)</a></li>
             <?php
$select=mysql_query("select * from cinnamon");
   $view=mysql_num_rows($select);
   $view1=$view+$count+1;
   for($i=0;$i<$view;$i++)
   ?>
            <li><a href="cinnamon.php">Cinnamon- (<?php echo $view;?>)</a></li>
             <?php
$select=mysql_query("select * from ginger");
   $view=mysql_num_rows($select);
   $view1=$view+$count+1;
   for($i=0;$i<$view;$i++)
   ?>
            <li><a href="ginger.php">Ginger- (<?php echo $view;?>)</a></li>
        </ul> 
    </div> 
    <div id="templatemo_menu">
        <ul><?php
$select=mysql_query("select * from garlic");
   $view=mysql_num_rows($select);
   $view1=$view+$count+1;
   for($i=0;$i<$view;$i++)
   ?>
            <li><a href="garlic.php" >Garlic- (<?php echo $view;?>)</a></li>
            <?php
$select=mysql_query("select * from vanilla");
   $view=mysql_num_rows($select);
   $view1=$view+$count+1;
   for($i=0;$i<$view;$i++)
   ?>
            <li><a href="vanilla.php">Vanilla- (<?php echo $view;?>)</a></li>
            <?php
$select=mysql_query("select * from fennel");
   $view=mysql_num_rows($select);
   $view1=$view+$count+1;
   for($i=0;$i<$view;$i++)
   ?>
            <li><a href="fennel.php">Fennel- (<?php echo $view;?>)</a></li>
            <?php
$select=mysql_query("select * from turmeric");
   $view=mysql_num_rows($select);
   $view1=$view+$count+1;
   for($i=0;$i<$view;$i++)
   ?>
            <li><a href="turmeric.php">Turmeric- (<?php echo $view;?>)</a></li>
            <?php
$select=mysql_query("select * from tamarind");
   $view=mysql_num_rows($select);
   $view1=$view+$count+1;
   for($i=0;$i<$view;$i++)
   ?>
            <li><a href="tamarind.php">Tamarind- (<?php echo $view;?>)</a></li>
        </ul> 
    </div> 
     <div id="templatemo_main"><span class="main_top"></span> 
     
     
          <p class="welcome_text">&quot;Cardamon details.&quot;</p>

     	
<div class="panel panel-success">
   <div class="panel-heading">
      Cardamon
   </div>
   <div class="panel-body">
   
   <table class="table" background="images/gallery_bg.jpg"
   <thead>
      <tr>
         <th>Number</th>
         <th>Name</th>
         <th>Image</th>
                  <th>Price</th>
         <th>Place</th>
         <th>Time</th>

      </tr>
   </thead>
   <tbody>
      <tr class="danger">
 <?PHP
$select=mysql_query("select * from cardamom ");
$view=mysql_num_rows($select);
 for($i=0;$i<$view;$i++)
 {
 ?><div class="table-responsive">

 <tr>
     <td align="center"><?php echo mysql_result($select,$i,"number");?></td>

        <td align="center">
        <img src="<?php echo mysql_result($select,$i,"image");?>" width="70" height="70" /></td>

    <td align="center"><?php echo mysql_result($select,$i,"name");?></td>
    <td align="center"><?php echo mysql_result($select,$i,"price");?></td>
    <td align="center"><?php echo mysql_result($select,$i,"time");?></td>
    <td align="center"><?php echo mysql_result($select,$i,"place");?></td>

    <td align="center"><a href="view2.php?edit=<?php echo mysql_result($select,$i,"number");?>">View</a>
        <td align="center"><a href="cardamonupdate.php?edit=<?php echo mysql_result($select,$i,"number");?>">Edit</a>

    <td align="right"><a href="<?php $_SERVER['DOCUMENT_ROOT'];?>?del=<?php echo mysql_result($select,$i,"number");?>"><img src="../images/Close.ico" width="30" height="30"/></a>

    </td>
  </tr></center>
  <?PHP
  }
  ?>
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