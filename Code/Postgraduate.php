<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" href="https://jsd-chatbot-app.herokuapp.com/UMK-Chatbot.php/iconUMK.png"type="iconUMK.png" sizes ="16x16">
  <title>JSD CHATBOT</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="HandheldFriendly" content="true"> 
  <meta charset="UTF-8">
  <link rel="stylesheet" href="{{ url_for('static', filename='styles/style.css') }}">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"  ></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="CSS/CSS-body2.css">
  <link rel="stylesheet" type="text/css" href="CSS/CSSmainpage.css">
  <link rel="stylesheet" href="CSS/bootstrap.min.css"/>
 <?php include ("CSS/CSS-body2.php") ?>
 <?php include ("CSS/CSSmainpage.php") ?>
 <?php include ("CSS/bootstrap.min.php") ?>
<style>
	.courses-section{
		height:600px;
	}
	.container {
	width: 100%;
	}
	
</style> 

</head>
 <?php include ("header.php") ?>
 <?php include ("menu.php") ?><br><br>

<body>

<section class="courses-section spad">
		<div class="container">
 			<center><h1>UNDERGRADUATE PROGRAM</h1><hr></center>
			<div class="row">
				<!-- course item -->
				<div class="col-sm-3 col-md-6 col-lg-4 course-item">
					<div class="course-thumb">
						<img src="images/3.png" style="max-height: 300px;" alt="" >
						<div class="course-cat">
							<span>MASTER</span>
						</div>
					</div>
					<div class="course-info">
					<h4><a href="blog-2022-mac-23.php" style="color:black">Master By Research (Computing)</h4></a>
					</div>
				</div>
				<!-- course item -->
				<div class="col-sm-3 col-md-6 col-lg-4 course-item">
					<div class="course-thumb">
						<img src="images/1.png" style="max-height: 300px;" alt="" >
						<div class="course-cat">
							<span>PHD</span>
						</div>
					</div>
					<div class="course-info">
					<h4><a href="blog-2022-mac-23.php" style="color:black">Doctor of Philosophy</h4></a>
					</div>
				</div>
		</div>
		</div>
</section><br>
</body>
<!---footer section--->
<?php include ("footer.php") ?>

</html>