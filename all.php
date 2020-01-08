		<?php
		include("admin/db/db.php");
		@ $get=$_GET['id'];
		?>
		<html>
		<head>
		  <title>Mansheya News | جميع الاخبار </title>

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
								<?php 
								If($get)
								{
				echo "<span>&nbsp; &nbsp; &nbsp;  الاخبـار</span>";
								}
							else
							
			{ echo "<span> جـميع الاخبـار</span>";

	}
							?>
						</div>



							</div>
			<br><br><br>
			<div class=main_post>
			<DIV CLASS=container-fluid>
			

				<?php 
				if($get)
				{

			 @$select_news="select * from news where Categorie='$get'";
				}
				else
				{
			@$select_news="select * from news Order by id DESC";

		}
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
				
					<h5 style="padding: 10px;font-weight: bold; font-family:Cairo"><?php echo $name ?></h5></a>
					<span style="font-size: 12px;float:right;font-family:Cairo"><i class="fa fa-clock-o"></i> التاريخ: <?php echo $date ?></span><br>
				<p style="padding: 8px;text-align: justify;line-height: 17px; font-family:Cairo"><?php echo $text ?>.... </p>
			<form action="view.php?id=<?php echo $id ?>" method=post><button name=submit class="btn btn-purple" style="float: right;font-family:Cairo"> اكمل القراءة</button></form>
			</div>


				<br>

				<br>
			


			</div>



		<?php }}
			else
				{
		echo "<h3><center style=\"font-family:Cairo\"> لا توجد اخبار جديدة في هذا القسم</center></h3>";
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