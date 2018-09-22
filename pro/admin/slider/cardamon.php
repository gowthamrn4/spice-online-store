<?php
include("db.php");
$username=$_SESSION['name'];
$sql=mysql_query("select * from admin where username='".$username."' ");
$row=mysql_fetch_array($sql);
$time = date("j n   Y, \a\\t g.i a", time());
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
    <div class="panel panel-success">
   <div class="panel-heading">
      Upload Cardamon
   </div>
   <div class="panel-body">
                  <a class="pull-right"> <img class="img-circle" src="<?php echo $row['../image'];?>" alt="User profile picture" width="100" height="100">
</a>
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
  
     
		 <input type="submit" name="button" value="Sign Up" id="button" / onClick="time_get()"> </div>
		</form>
     </div></div>
     <?php
if($button)
{
$second="img/".$_FILES['image']['name'];
if(move_uploaded_file($_FILES['image']['tmp_name'],$second)){
}
$insert=mysql_query("insert into cardamom(number,name,price,image,time,place)values('$number','$name','$price
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
     
     
     
	<div id="page">
    <div style="background-color:#0F3">
		<div id="content">
			<div class="post">
				 <div class="form-group">
  
					<p class="clearfix">&nbsp;&nbsp;&nbsp;&nbsp;</p>
				</div>
			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
        </div>
        <br/>
        
       
      
   <div style="position:absolute; left:20%; top:20%;">     
        <div class="panel panel-success">
   <div class="panel-heading">
      Cardamon
   </div>
   <div class="panel-body">
   
   <table class="table">
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
