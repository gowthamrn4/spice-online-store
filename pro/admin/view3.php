<?php
include("db.php");
$username=$_SESSION['name'];
$sql=mysql_query("select * from admin where username='".$username."' ");
$row=mysql_fetch_array($sql);
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
            
          
                    <li><a href="../logout.php"><span>LOGOUT</span></a></li>
                    
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
    
	<div id="page">
    <div style="background-color:#FFF">
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">Welcome to Cardamon Online Store </a></h2>
				 <div class="form-group">
   <a href="cardamon.php"><span>Offers </span></a>
   
					<p class="clearfix">&nbsp;</p>
				</div>
			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
        </div>
      
    <?php
   $select=mysql_query("select * from offer where number='".$_GET['edit']."'");
   $view=mysql_fetch_array($select);
?>
  <table class="table">
   <caption></caption>
   <thead>
      <tr>
         <th>Number</th>
         <th>Name</th>
         <th>Image</th>
                  <th>Price</th>
         <th>Time</th>

      </tr>
   </thead>
   <tbody>
      <tr class="danger">
         <td><?php echo $view['number'];?></td>
         <td><?php echo $view['name'];?></td>
         <td><img src="<?php echo $view['image'];?>" width="100" height="100"/></td>
         <td><?php echo $view['price'];?></td>
         <td><?php echo $view['time'];?></td>
         <td><?php echo $view['place'];?></td>
      </tr>
      
   </tbody>
</table>
 
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
