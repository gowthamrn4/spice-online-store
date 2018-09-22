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
    <center>Welcome To Admin </center>
	</div>
	<div id="menu">
		<ul>
			<li class="first"></li>
            
          
                    <li><a href="../logout.php"><span>LOGOUT</span></a></li>
                                        <li><a href="offer.php"><span>Add Offers</span></a></li>
                    <li><a href="message.php"><span>Messages</span></a></li>
                    <li><a href="customer.php"><span>Customer</span></a></li>
                    <li><a href="stock.php"><span>Stock Details</span></a></li>

                    <li><a href="reg.php"><span style="font-size:20px"><span style="font-style:italic"></span></span></a></li>
                    
                   
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
    <li class="list-group-item" style="background:url(../img/bg_noise.png)"">
                  <b></b> <a class="pull-right"> <img class="img-circle" src="<?php echo $row['../image'];?>" alt="User profile picture" width="100" height="100">
</a>
    
	<div id="page">
    <div style="background-color:#FFF">
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">Welcome to Spice Online Store </a></h2>
				 <div class="form-group">
  <a href="cardamon.php"><button type="button" class="btn btn-success">Cardamon</button></a>
    <a href="pepper.php"><button type="button" class="btn btn-success">Pepper</button></a>
    <a href="clove.php"><button type="button" class="btn btn-success">Clove</button></a>
    <a href="cinnamon.php"><button type="button" class="btn btn-success">Cinnamon</button></a>
    <a href="ginger.php"><button type="button" class="btn btn-success">Ginger</button></a>
    <a href="garlic.php"><button type="button" class="btn btn-success">Garlic</button></a>
    <a href="vanilla.php"><button type="button" class="btn btn-success">Vanilla</button></a>
    
   

  
  
  
					<p class="clearfix">&nbsp;</p>
				</div>
			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
        </div>
        <br>
        <br>
         <a href="fennel.php"><button type="button" class="btn btn-success">Fennel</button></a>
    <a href="turmeric.php"><button type="button" class="btn btn-success">Turmeric</button></a>
    <a href="tamarind.php"><button type="button" class="btn btn-success">Tamarind</button></a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <br/>
    <br/>
     <br/>
    <br/>
     <br/>
    <br/>
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
