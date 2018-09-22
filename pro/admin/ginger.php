<?php
include("db.php");
$username=$_SESSION['name'];
$sql=mysql_query("select * from admin where username='".$username."' ");
$row=mysql_fetch_array($sql);
$time = date("j n   Y, \a\\t g.i a", time());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo @$_SESSION['name']; ?></title>
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
            <li><a href="admin.php" >Index</a></li>
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
         <?php
$select=mysql_query("select * from ginger");
   $view=mysql_num_rows($select);
   $view1=$view+$count+1;
   for($i=0;$i<$view;$i++)
   ?>
        <div id="templatemo_menu">
        <ul>
            <li><a href="cardamon.php">Cardamon</a></li>
            <li><a href="pepper.php" >Pepper</a></li>
            <li><a href="clove.php">Clove</a></li>
            <li><a href="cinnamon.php">Cinnamon</a></li>
            <li><a href="ginger.php"class="current">Ginger-(<?php echo $view;?>)</a></li>
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
    </div> 
     <div id="templatemo_main"><span class="main_top"></span> 
     
     
          <p class="welcome_text">&quot;Ginger details.&quot;</p>

     	
<div class="form-group">
    <form id="form1" name="form1" method="post" action="" enctype="multipart/form-data" onSubmit="return(validate());">
     <div class="col-sm-2"> 
            <input type="hidden" name="number" id="textfield3"  placeholder="" required  class="form-control" />

     <input type="text" name="name" id="name" class="form-control" placeholder="Name" required />
     </br>
     <input type="text" name="price" id="price" class="form-control" placeholder="Price" required />
     </br>
      <input type="file" name="image" id="image" tabindex="3" class="form-control" placeholder="Upload Photo" required/>
      
       <input type="hidden" name="time" id="textfield3"  placeholder="" required  class="form-control" onClick="date()">

     </br>
     <input type="text" name="place" id="place" class="form-control" placeholder="Place" required />
  
     
		 <input type="submit" name="button" value="submit" id="button" / onClick="time_get()"> </div>
		</form>
     </div>
     <?php
if($button)
{
$second="img/".$_FILES['image']['name'];
if(move_uploaded_file($_FILES['image']['tmp_name'],$second)){
}
$insert=mysql_query("insert into ginger(number,name,price,image,time,place)values('$number','$name','$price
','$second','$time','$place')");
}
if($insert)
{
?>
  <div style="position:absolute; left:70%;  top:70.2%;"> 

	     <div class="alert alert-success" ><a href="#" class="close" data-dismiss="alert" aria-label="close">x</a> <p>Update Sucessfull.........</p></div></div>
<?php
}
else
{
?>

<?php
}
?>
   
   <table class="table">
   <thead>
      <tr>
         <th>Number</th>
         <th>Image</th>
         <th>Name</th>
                  <th>Price</th>
         <th>Time</th>
         <th>Place</th>

      </tr>
   </thead>
   <tbody>
      <tr class="danger">
 <?PHP
$select=mysql_query("select * from ginger ");
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

        <td align="center"><a href="gingerupdate.php?edit=<?php echo mysql_result($select,$i,"number");?>">Edit</a>

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