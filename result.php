<?php
include("admin/db/db.php");
 $get=$_GET['name'];
?>
<html>
<head>
  <title>Mansheya News | نتيجة البحث</title>

<link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/style.css">
<link rel="stylesheet" type="text/css" href="assets/footer.css">
<link rel="stylesheet" type="text/css" href="assets/animation/style.css">
<link href=Assets/font/4.5.0/css/font-awesome.min.css rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">

</head>
<body>

 
  <div class="container ">
<?php
 include("include/header.php");
?>
		<div class="row">
			<div class="container-fluid">

			<div class="col-md-8 main">
				

	<div class=slider>
	</div>
	<br>
	<div class=line_post>
				<br>
					<div class=" post_main">
						<span> نتيجـة البحـث</span>
					
				</div>



					</div>
	<br>
	<div class=main_post>
	<DIV CLASS=container-fluid>

		<div class=row>
			<?php 
			$select_news="select * from news where name like '%$get%'";
			$run_news=mysqli_query($con,$select_news);
			$co1=mysqli_num_rows($run_news);

		?>
			<br><br><span style="font-size: 12px;float:right;font-family:Cairo"><span class="badge" style="background-color:rgb(78, 172, 226)"><?php echo "$co1"; ?></span> نتيجـة البحـث </span><br>
			<?php
if($co=mysqli_num_rows($run_news)==0)
{
	echo "<script>window.open('Search.php?msg=Result Not Found','_self')</script>";
}
?>
<?php

while($row_news=mysqli_fetch_array($run_news))
	{	

		 $id=$row_news['id'];
		  $name=$row_news['Name'];
		   $date=$row_news['Date'];
		    $text=$row_news['Text'];
		     $image=$row_news['Image']

		     ?>
			<div class=col-md-5>
			

			<br>
		<a href="#"><img src="admin/image/<?php echo "$image"; ?>" class="img img-thumbnail" style="width:250px;height:170px"></a>

	



	</div>
	
	<div class="col-md-7">
			<h5 style="padding: 10px;font-weight: bold; font-family:Cairo"><?php echo "$name"; ?></h5></a>
			<span style="font-size: 12px;float:right; font-family:Cairo"><i class="fa fa-clock-o"></i> التاريخ: <?php echo "$date"; ?></span><br>
		<p style="padding: 8px;text-align: justify;line-height: 17px ; font-family:Cairo"><?php echo "$text"; ?>.... </p>
	<form action=view.php?id=<?php echo $id; ?> method=post><button name=submit class="btn btn-purple" style="float: right; font-family:Cairo">اكمل القراءة</button></form>
	<br><br><br><br>
	</div>



		<br><br>

<?php 	}
		?>
			
	</div>
	<div claass=row>
		<div class="col-md-3">
		</div>
	</div>
	</DIV>

	</div>	
		</div>
	<?php
				include("include/side.php");
			 ?>

				</div>	

		</div>
</div>
<br><br>
</div>

</body>
</html>
<?php require_once "include/footer.php"; ?>
