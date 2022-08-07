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
 
<style>
	.section{
		height:600px;
	}
</style> 

</head>
 <?php include ("header.php") ?>
 <?php include ("menu.php") ?><br><br>
 
<body>
<!--Our Courses-->

<div class="section">
		<div class="container">
			<center><h1>ABOUT DEPARTMENT OF DATA SCIENCE</h1><hr></center>
			<div class="">
				<p>The establishment of the Department of Data Science is an important initiative towards developing a 
				Faculty of Data Science to ensure that UMK is always relevant in the current development of technology 
				that emphasizes DATA as a competitive asset and very valuable in the analytical process. 
				Data Science is capable of producing new and innovative services and solutions, benefiting businesses, 
				customers and the general public in various domains.</p>
				<img src="images/BigData.jpg" style="max-height: 300px;" alt="" >
				<img src="images/BigData.jpg" style="max-height: 300px;" alt="" >

				
			</div>
		</div>
</div>
</body>
<!---footer section--->
<?php include ("footer.php") ?>

</html>