<?php
include("admin/db/db.php");
?>
<html>
<head>
  <title>Mansheya News|اخبار المنشية</title>

<link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
<link rel="styl esheet" type="text/css" href="assets/style.css">
<link rel="stylesheet" type="text/css" href="assets/animation/style.css">
<link rel="stylesheet" type="text/css" href="assets/footer.css">
<link rel="stylesheet" type="text/css" href="assets/card.css">
<link href=Assets/font/4.5.0/css/font-awesome.min.css rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">

</head>
<body>

 
 <!-- <div class="container ">-->
<!--------------------------------------------------------->


<div class="card-container">
<div class="card middle">
                    <div class="front">
                        <img src="assets/Card-1.png" width="280" height="400">
                    </div>
                    <div class="back">
                        <div class="back-content middle">
                            <div class="sm">
                                <img src="assets/Card-2 - Copy.png" width="280" height="400">
                            </div>
                        </div>
                    </div>
                </div>
</div>
<br><br><br><br><br>


<!----------------------------------------------------------->



<?php
 include("include/header.php");
?>
	<!--	<div class="row">
			<div class="container-fluid">

			<div class="col-md-8 main">
-->		
<!--
	<div class=slider>
	</div>
	<br>
	<div class=line_post>-->
		<!--
					<div class=" post_main">
						<span style="font-family:Cairo">  عن المطور</span>
					
				</div>



		<!-</div>-->
		<!--
	<br>
	<br>
	<div class=main_post>
	<DIV CLASS=container-fluid>
		<div class=row>
			<br><br>
				<div class=col-md-12>
			<div class=about style="border: 0px solid">

					<?php 
$select_news="select * from about";
$run_news=mysqli_query($con,$select_news);


while($row_news=mysqli_fetch_array($run_news))
	{	

		 $img=$row_news['img'];
		  $text=$row_news['text'];
		  $name=$row_news['name'];
		 }
	
		?>

		<img src="admin/image/<?php echo $img; ?>" class="img img-circle" width="150px" height="150px" style="border: 1px solid #888; padding: 4px;margin-left:130px;"><br>
		<center><h4><?php echo $name; ?></h4></center>
<p><?php echo $text; ?></p>
			</div>

		
	</div>
	


	</div>
	<div claass=row>
		<div class="col-md-3">
		</div>
	</div>
	</DIV>

	</div>	
		</div>
		-->
			
<!--
	<?php
				include("include/side.php");
			 ?>
			 -->

	<!--		
				</div>	

		</div>
</div>
<br><br>
</div>
		-->
</body>
</html>
<?php require_once "include/footer.php"; ?>