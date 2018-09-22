<?php
include("db.php");			
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
            <li><a href="index.php" >Index</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="reg.php"class="current">Register</a></li>
            <li><a href="message.php">Message</a></li>
            <li><a href="contact.html">Contact</a></li>
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
     
     
          <p class="welcome_text">&quot;Register.&quot;</p>

     	<div class="col_w420 float_l">
   <h2 class="title"><a href="#"></a></h2>
                <form id="form1" name="form1" method="post" action="" enctype="multipart/form-data" onSubmit="return validateemail());">
     <div class="col-sm-6">
      <div style="position:absolute;left:40.2%; top:30%;"><span style="font-size:18px">User name :</span></div>
      <div style="position:absolute;left:50.2%; top:30%;"><input type="text" name="username" id="name" class="form-control" placeholder="User ID" required /></div></div>
   </div>
    
  <br/>
  <br/>
  
     <div class="col-sm-6">
      <div style="position:absolute;left:40.2%; top:40%;"><span style="font-size:18px"> Name :</span></div>
      <div style="position:absolute;left:50.2%; top:40%;"><input type="text" name="name" id="textfield2" class="form-control" placeholder="Name" required/></div>
    </div>
    <br/>
  <br/>
  
  <div class="col-sm-6">
      <div style="position:absolute;left:40.2%; top:50%;"><span style="font-size:18px"> E-Mail :</span></div>
      <div style="position:absolute;left:50.2%; top:50%;"><input type="text" name="email" id="textfield2" class="form-control" placeholder="E-Mail" required/></div>
    </div>
    <br/>
  <br/>
  
     <div class="col-sm-6">
     <div style="position:absolute;left:40.2%; top:60%;"><span style="font-size:18px">Password :</span></div>
     <div style="position:absolute;left:50.2%; top:60%;"> <input type="password" name="password" id="textfield3" class="form-control" placeholder="Password" required/></div>
   </div>
<br/>
  <br/>
   
   <div class="col-sm-6"><div style="position:absolute;left:40.2%; top:70%;"><span style="font-size:18px">Phone Number :</span></div>
    <div style="position:absolute;left:50.2%; top:70%;">  <input type="text" name="phone" id="textfield4" class="form-control" placeholder="Phone No" required/></div>
   </div><br/>
 
  <br/>
     
    <div class="col-sm-4"><div style="position:absolute;left:40.2%; top:80%;"><span style="font-size:18px">Photos</span></div>
    <div style="position:absolute;left:50.2%; top:80%;">  <input type="file" name="image" id="image" tabindex="3" class="form-control" placeholder="Upload Photo" required/></div>
   </div><br/>
  <br/>
    <div style="position:absolute;left:40.2%; top:90%;">  <textarea  name="address" id="image" tabindex="3" class="form-control" placeholder="Enter Your Address" required/></textarea></div>
    <td>&nbsp;</td>
    <td> <div class="col-sm-6">
       <div style="position:absolute;left:60.2%; top:95%; color:#0F3">   <input class="btn btn-primary" type="submit" name="button" id="button" value="Signup" / onclick="showAlert();"></div></div>
    </form></div>
				 <div class="form-group">
    
					<p class="clearfix">&nbsp;</p>
				</div>
			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
        </div>
        <?php
if($button)
{
$second="img/".$_FILES['image']['name'];
if(move_uploaded_file($_FILES['image']['tmp_name'],$second)){
}
$insert=mysql_query("insert into signup(username,name,email,password,phone,image,address)values('$username','$name','$email','$password','$phone','$second','$address')");
}
if($insert)
{
?>
   <script>
  function showAlert(){
	  var myText="Register successfully Please Login ";
	  alert(myText);
  }
  </script>
<?php
}
else
{
?>
	     <div class="alert alert-success" ><a href="#" class="close" data-dismiss="alert" aria-label="close">x</a> <p>Error.....</p></div>

<?php
}
?>

    <script type="text/javascript">
<!--
// Form validation code will come here.
function validateemail()
{
   var x=document.form1.email.value;
   var dotposition=x.indexOf("@");
   var dotposition=x.lastIndexOf(".");
   if(atposition<1||dotposition<atposition+2||dotposition+2>=x.length){
	   alert("please enter a vaild e-mail address \n atposition:"+atposition+\n dotposition:"+dotposition);
	   return false;
   }
}
//-->
</script>


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