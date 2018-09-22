<?php
include("db.php");
$select=mysql_query("select * from offer where number='".$_GET['edit']."'");
$view=mysql_num_rows($select);
$time = date("j n   Y, \a\\t g.i a", time());

if($button)
{
$second="img/".$_FILES['image']['name'];
if(move_uploaded_file($_FILES['image']['tmp_name'],$second)){
}
$insert=mysql_query("update offer set number='$number',name='$name',image='$second',price='$price',time='$time',details='$details' where number='".$_GET['edit']."'");
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
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo @$_SESSION['name']; ?></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../style1.css" rel="stylesheet" type="text/css" media="all" />
 <link href="../css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

	
	
  

                  
</a> 
    <div id="header">
	</div>
	<div id="menu">
		<ul>
			<li class="first"></li>
            
          
                    <li><a href="../logout.php"><span style="font-size:20px"><span style="font-style:italic">LOGOUT</span></span></a></li>
                    
                    <li><a href="admin.php"><span style="font-size:20px"><span style="font-style:italic">Home</span></span></a></li>
                    
                   
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
        
	</div>
    <li class="list-group-item" style="background:url(../img/bg_noise.png)"">
                  <b>Photo</b> <a class="pull-right"> <img class="img-circle" src="<?php echo $row['../image'];?>" alt="User profile picture" width="100" height="100">
</a>

 

  
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
    <td>Photo</td>
    <td>
      <input type="file" name="image" id="image" enctype="multipart/form-data" class="form-control" placeholder="Photo" value="<?php echo mysql_result($select,0,"image")?> "  required/>

    </td>
  </tr>
  
   <tr>
    <td height="40">Price</td>
    <td>
      <input type="text" name="price" id="textfield7" class="form-control" placeholder="" value="<?php echo mysql_result($select,0,"price")?> "  required/>
  
    </td>
  </tr>
  
  
  
  <tr>
    <td>time</td>
    <td>
      <input type="text" name="time" id="textfield5" class="form-control" placeholder="Email ID" value="<?php echo mysql_result($select,0,"time")?> "  required/>

    </td>
  </tr>
 
 
  <tr>
    <td>Place</td>
    <td>
      <input type="text" name="details" id="textfield3" class="form-control" placeholder="place" value="<?php echo mysql_result($select,0,"details")?> "  required/>
   
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
     
    
     
     
     
	<div id="page">
    <div style="background-color:#FFF">
		<div id="content">
			<div class="post">
				 <div class="form-group">
  
					<p class="clearfix">&nbsp;</p>
				</div>
			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
        </div>
		<!-- end #content -->
		 <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 2000 //changes the speed
    })
    </script>
</div>
<div align=center>Project@2018</a></div></body>
</html>
