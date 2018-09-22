<?php
include("db.php");
$select=mysql_query("select * from turmeric where number='".$_GET['edit']."'");
$view=mysql_num_rows($select);
$time = date("j n   Y, \a\\t g.i a", time());

if($button)
{
$second="img/".$_FILES['image']['name'];
if(move_uploaded_file($_FILES['image']['tmp_name'],$second)){
}
$insert=mysql_query("update turmeric set number='$number',name='$name',price='$price',image='$second',time='$time',place='$place' where number='".$_GET['edit']."'");
}
if($insert)
{
echo"Update Successfully";
}
else
{
echo"error";
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  
<title><?php echo $view['name'];?></title>
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
   
        </div>
        <div id="templatemo_menu">
        <ul>
            <li><a href="cardamon.php"  >Cardamon</a></li>
            <li><a href="pepper.php" >Pepper</a></li>
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
            <li><a href="turmeric.php"class="current">Turmeric</a></li>
            <li><a href="tamarind.php">Tamarind</a></li>
        </ul> 
    </div> 
     <div id="templatemo_main"><span class="main_top"></span> 
     
     
          <p class="welcome_text">&quot; Turmeric Update&quot;</p>
<?php
include("db.php");
$select=mysql_query("select * from turmeric where number='".$_GET['edit']."'");
$view=mysql_num_rows($select);
?>
     	
<table width="77%">
  <tr><form id="form1" name="form1" method="post" action="" enctype="multipart/form-data"><h1></h1>
    <td>Number</td>
    <td>
      <input type="text" name="number" id="number" class="form-control" placeholder="number" value="<?php echo mysql_result($select,0,"number")?> "  required />
   
    </td>
  </tr>
  <tr>
    <td>Name</td>
    <td>
      <input type="text" name="name" id="textfield8" class="form-control" placeholder="name" value="<?php echo mysql_result($select,0,"name")?> "  required/>
    
    </td>
  </tr>
  <tr>
    <td height="40">Price</td>
    <td>
      <input type="text" name="price" id="textfield7" class="form-control" placeholder="" value="<?php echo mysql_result($select,0,"price")?> "  required/>
  
    </td>
  </tr>
  
 
  <tr>
    <td>Photo</td>
    <td>
      <input type="file" name="image" id="image" enctype="multipart/form-data" class="form-control" placeholder="Photo" value="<?php echo mysql_result($select,0,"image")?> "  required/>

    </td>
  </tr>
  <tr>
    <td>time</td>
    <td>
      <input type="hidden" name="time" id="textfield5" class="form-control" placeholder="Email ID" value="<?php echo mysql_result($select,0,"time")?> "  required/>

    </td>
  </tr>
 
 
  <tr>
    <td>Place</td>
    <td>
      <input type="text" name="place" id="textfield3" class="form-control" placeholder="place" value="<?php echo mysql_result($select,0,"place")?> "  required/>
   
    </td>
  </tr>
  
  
  <tr>
    <td>&nbsp;</td>
    <td>
      <input type="submit" name="button" id="button" value="Submit" />
    </form>
    </td>
  </tr>
</table>
</cenetr>
     
    
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