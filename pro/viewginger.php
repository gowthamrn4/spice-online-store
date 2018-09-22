<?php
include("db.php");
$username=$_SESSION['uname'];
$sql=mysql_query("select * from signup where username='".$username."' ");
$row=mysql_fetch_array($sql);
$time = date("j n   Y, \a\\t g.i a", time());
$status=1;
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
            <li><a href="ginger.php"class="current">Ginner</a></li>
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
     	<div class="col_w420 float_l">
                                                                 
    
                   <h2></h2>
                      <blockquote>
 

 <?php
   $select=mysql_query("select * from ginger where number='".$_GET['edit']."'");
   $view=mysql_fetch_array($select);
?>
  <table class="table">
   <caption></caption>
   <thead>
      <tr>
 

      </tr>
   </thead>
   <tbody>
      <tr class="danger">
         
      </tr>
      
   </tbody>
</table>
<img src="admin/<?php echo $view['image'];?>" width="150" height="150"/>
<div style="position: absolute; left:250px; top: 105px;"> 
<?php echo $view['time'];?></div>
<div style="position: absolute; left:250px; top: 150px;"> 
<span style="font-size:24px"><?php echo $view['name'];?></span></div>
<div style="position: absolute; left:250px; top:200px;"> 
<big>RS</big><span style="font-size:40px"><?php echo $view['price'];?></span>/ Kg </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br/>
  <img src="images/0004.png" width="120" height="30"/>
 <?php
   $select=mysql_query("select * from cardamom where number='".$_GET['edit']."'");
   $view=mysql_fetch_array($select);
?>
<div class="button"><a href="buy.php?edit=<?php echo mysql_result($select,$i,"number");?>">Buy</a></div>
    <div style="position: absolute; left: 50px; top: 500px;">
                                        <?PHP
$select=mysql_query("select * from reviewginger ");
$view=mysql_num_rows($select);
 for($i=0;$i<$view;$i++)
 {
 ?>
      <br/>      <br/>
   <?php echo mysql_result($select,$i,"name");?>
     <big> ((<?php echo mysql_result($select,$i,"review");?> ))</big> <br/>
      <img src="<?php echo mysql_result($select,$i,"image");?>" height="30" width="30"/>   <?php echo mysql_result($select,$i,"time");?>
      <br/>  Rate : <?php echo mysql_result($select,$i,"mark");?>  /5
  <?PHP
  }
  ?></div>  <div style="position: absolute; left: 20px; top: 430px;">
  <p class="welcome_text">&quot;Customer Review&quot;</p>  </div>
    <div style="position: absolute; left: 887px; top: 125px;">
 <div class="button"><a href="fennel.php">Fennel</a></div>
                                                                <div class="button"><a href="vanilla.php">Vanilla</a></div>
                                                                <div class="button"><a href="turmeric.php">Turmeric</a></div>
                                                                <div class="button"><a href="tamarind.php">Tamarind</a></div>
                                                                <div class="button"><a href="pepper.php">Pepper</a></div></div>
                  <br/>
                     
                      </blockquote>
       </div>
       <?php
       $sql=mysql_query("select * from signup where username='".$username."' ");
$row=mysql_fetch_array($sql);
?>
                <form id="form1" name="form1" method="post" action="" enctype="multipart/form-data" onSubmit="return(validate());">
            
           <label>
<caption>E-Mail</caption>  </label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="email" id="email" class="form-control" value="<?php echo $row['email'];?>" placeholder="User ID" required />
<br/><br/>

<label>
<caption>Name</caption>  </label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="name" id="name" class="form-control" value="<?php echo $row['name'];?>" placeholder="User ID" required />
<br/><br/>   
           <label>
<caption>Mobile-Number</caption>  </label>   <input type="text" name="phone" id="phone" class="form-control" value="<?php echo $row['phone'];?>" placeholder="User ID" required /><br/><br/>
                <input type="hidden" name="image" id="image" tabindex="3" class="form-control" enctype="multipart/form-data" value="<?php echo $row['image'];?>" required/>
               <label>
<caption>Address</caption>  </label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <textarea name="address" id="address" class="form-control"  placeholder="Enter your Address" required /></textarea>
               
<?php
   $select=mysql_query("select * from ginger where number='".$_GET['edit']."'");
   $view=mysql_fetch_array($select);
?><br/>
<br/>
<label>
<caption>Product Name</caption>  </label>  <input type="text" name="proname" id="proname" class="form-control" value="<?php echo $view['name'];?>" placeholder="User ID" required /></label>

<input type="hidden" name="img" id="img" tabindex="3" class="form-control" enctype="multipart/form-data" value="<?php echo $view['image'];?>" required/>
<br/>
<br/>
<label>
<caption>Price &nbsp; Rs /</caption>  </label>&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="price" id="price" class="form-control" value="<?php echo $view['price'];?>" placeholder="User ID" required />
                 
       <input type="hidden" name="time" id="textfield3"  placeholder="" required  class="form-control" onClick="date()">

<center><big>Add Card</big></center>
<div style="position:absolute;left:47.2%; top:90%;"> <label>
<span>Card Number</span>
</label>
<input type="text" name="cno" id="cno" size="20" autocomplete="off" required/>
<br/>
<label>
<span>Expiration Date(MM/YYYY)</span>
</label>
<input type="text" name="month" id="month" size="2"  required/>
<span> / </span>
<input type="text" name="year" id="year" size="2"  required/>
<label>
<span>CVC</span>
</label>
<input type="text" name="cvc" id="cvc" size="4"  required/>
<br/>
<br/>

<input type="submit" value="Submit" name="button"  / onClick="time_get()" onclick="myFunction">
</form></div>
<script>
function myFunction() {
	alert("hiii");
}
</script>
 <?php
if($button)
{
$insert=mysql_query("insert into pay(email,name,phone,image,address,proname,img,price,time,cno,month,year,cvc,status)values('$email','$name','$phone','$img','$address','$proname','$image','$price','$time','$cno','$month','$year','$cvc','$status')");
}
if($insert)
{
?>
  <div style="position:absolute; left:70%;  top:70.2%;"> 

	     <div class="alert alert-success" ><a href="#" class="close" data-dismiss="alert" aria-label="close">x</a> <p><span style="background-color:#0F9"><big> Sucessfull.</big></span></p></div></div>
<?php
}
else
{
?>
	     <div class="alert alert-success" ><a href="#" class="close" data-dismiss="alert" aria-label="close">x</a> <p>Error.....</p></div>

<?php
}
?>

</body>
</html>
