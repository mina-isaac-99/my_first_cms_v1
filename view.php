<?php
include("admin/db/db.php");
$id=$_GET['id'];
?>
<html>
<head>
  <title>اخبار المنشية | نتيجة البحث</title>

<link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/style.css">
<link rel="stylesheet" type="text/css" href="assets/footer.css">
<link rel="stylesheet" type="text/css" href="assets/card.css">
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
	

	<div class=main_post>
	<DIV CLASS=container-fluid>
		<div class=row>

					<?php
					IF($id)
					{
				$select_news="select * from news where id='$id'";
				$run_news=mysqli_query($con,$select_news);
	{

		while($row_news=mysqli_fetch_array($run_news))
	{	

		 $id=$row_news['id'];
		   $name=$row_news['Name'];
		   $date=$row_news['Date'];
		    $text=$row_news['Text'];
		     $image=$row_news['Image'];
	}}}
	else
		echo "<script>window.open('index.php','_self')</script>";
	?>
			
			<div class=col-md-12>
			

						<h1 style="padding: 10px;font-weight: bold;font-family:Cairo"><?php echo $name?></h1>

		<a href="admin/image/<?php echo $image ?>""><img src="admin/image/<?php echo $image ?>" class="img img-thumbnail" style="width:100%;height:300px"></a>
	



	</div>
	<div class="col-md-12">
		
			<span style="font-size: 12px;float:right; font-family:Cairo">التاريخ: <?php echo $date ?></span><br>
		<p style="padding: 8px;text-align: justify;line-height: 17px ; font-family:Cairo"> <?php echo $text ?></p>
	</div>


		<br><br>
		
	
		


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