<?php
include("admin/db/db.php");
?>
<html>
<head>
  <title>Mansheya News | اخبار المنشية</title>
<link rel="stylesheet" type="text/css" href="assets/bootstrap-theme.min.css">
<!--<script type="text/javascript" src="assets/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="assets/bootstrap.min.js"></script>-->
<link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/style.css">
<link rel="stylesheet" type="text/css" href="assets/animation/style.css">
<link rel="stylesheet" type="text/css" href="assets/footer.css">
<link href=assets/font/4.5.0/css/font-awesome.min.css rel="stylesheet">
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
				
	<br>
	<div class=slider>
		<img class="img thumbnail" src="admin/image/st.jpg" width="100%" height="180px">
	</div>
	<br>
	<!--<div class=line_post>-->
					<div class=" post_main">
						
						<span style="padding-right:45px;">اخر الاخبار</span>
       					<div class="heart-divider">
						<span class="grey-line"></span>
						<i class="fa fa-heart pink" style="font-size:20px; color:red"></i>
						<i class="fa fa-heart grey" style="font-size:20px;"></i>
						<span class="grey-line"></span>
		<!--</div>-->
		
					
				</div>
				<br><br><br>



					</div>
	<br><br><br>
	<div class=main_post border:1px solid>
	<DIV CLASS=container-fluid>

		<?php 
$select_news="select * from news Order by id DESC limit 0,3";
$run_news=mysqli_query($con,$select_news);
if(mysqli_num_rows($run_news)>0)
{

while($row_news=mysqli_fetch_array($run_news))
	{	

		 $id=$row_news['id'];
		  $name=$row_news['Name'];
		   $date=$row_news['Date'];
		    $text=$row_news['Text'];
		     $image=$row_news['Image'];
	
		?>
		<div class=row>
			<br><br>
			<div class=col-md-5>
			

			
		<img src="admin/image/<?php echo $image ?>" class="img img-thumbnail" style="width:250px;height:170px">
	



	</div>
	<div class="col-md-7">
		
			<h5 style="padding: 10px;font-weight: bold;font-family:Cairo"><?php echo $name ?></h5></a>
			<span style="font-size: 13px;float:right; font-family:Cairo"> <i class="fa fa-clock-o"></i> التاريخ:  <?php echo $date ?></span><br>
		<p style="padding: 8px;text-align: justify;line-height: 17px ; font-family:Cairo" ><?php echo $text ?>.... </p>
	<form action="view.php?id=<?php echo $id ?>" method=post><button name=submit class="btn btn-purple" style="float: right; font-family:cairo ">اكمل القراءة</button></form>
	</div>


		<br>

		<br>
	


	</div>



<?php }}
	else
		{
echo "<h3><center>Sorry No Post Available</center></h3>";
		}

		?>
		

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