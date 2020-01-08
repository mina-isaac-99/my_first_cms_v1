	<?php
		include("admin/db/db.php");
		?>
		<html>
		<head>
		  <title>Mansheya News | تواصل معنا</title>
		
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
							<div class=" post_main"style="left:1px ;" >
								<br>
								<span > تواصل معنا</span>
							
						</div>



							</div>
			<br><br><br><br><br>
			<div class=main_post>
			<DIV CLASS=container-fluid>
			<div class=form><br>
		<form method=post action="contact.php">
			<div class=form-grou><label for=name style="font-family:Cairo"> اسمك بالكامل</label><input required="" id=name type="text" name="name" class=form-control></div><br>

			<div class=form-grou><label for=email style="font-family:Cairo">البريد الاليكتروني</label><input required="" id=email type="email" name="email" class=form-control></div><br>

			<div class=form-grou><label for=text style="font-family:Cairo">رسالتك او استفسارك</label><textarea required="" name=text id=text class=form-control rows="10"></textarea></div><br>
			<button name="submit" class="btn btn-purple" style="float:right; font-size:14px; font-family:Cairo"><span class="fa fa-send" ></span>&nbsp; &nbsp;ارسال</button>
		</form>
		<?php
		IF(isset($_POST['submit']))
		{
			$name=$_POST['name'];
			$email=$_POST['email'];	
			$text=$_POST['text'];	
				
			$insert="insert into contact (name,email,msg) values ('$name','$email','$text')";
			$run=mysqli_query($con,$insert);
			if($run)
			{
				echo "<center><h5 style=\"font-family:Cairo\">تم ارسال الرسالة بنجاح , سيتم الرد في اسرع وقت </h5></center>";
			}
			else
				{
				echo "<center><h3 style=\"font-family:Cairo\">ناسف. لم يتم ارسال الرسالة .حاول مرة اخري </h3></center>";
			}

		}

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