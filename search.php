	<?php
	@$msg=$_GET['msg'];
	?>
	<html>
	<head>
	  <title>Mansheya News |  البحث عن خبر </title>

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
						<div class=" post_main">
							<br>
							<span> ابحث عن خبر</span>
						
					</div>



						</div>
		<br><br><br>
		<div class=main_post>
		<DIV CLASS=container-fluid>
		<div class=form><br>
	<?php 
	echo "<center><h3>$msg</h3></center>";
	?>
	<form  action="result.php" method="get">
		<div class=form-grou><label for=name></label><input required="" id=name type="text" name="name" class=form-control placeholder="ابحث عن خبر معين بكلمة او بجملة من الخبر" style="font-family:Cairo"></div><br>


		<button name="submit" class="btn btn-purple" style="float: right; font-family:Cairo"><i class="fa fa-Search"></i> &nbsp; الـبـحـث</button>
	</form>

		
		</div>
		<br>
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