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
	.section{
		height:500px;
	}
	.container {
	width: 80%;
	display:flex;
	}
	.side {
	width: 50%;
	}
</style> 

</head>
 <?php include ("header.php") ?>
 <?php include ("menu.php") ?><br><br>
 
<body>

<div class="section">
		<div class="container">
			<div class="side">
			<center><h1>Vision</h1><hr></center>
				<p>To become a national model of educational excellence, student success, cutting edge-research and 
				industrial partnership, agile and relevant to meet the dynamics of global transformation.</p>
				<p>
			</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<div class="side" >
			<center><h1>Mission</h1><hr></center>
				<p>To facilitate high quality education, research and industrial collaboration in Data Science and 
				related fields.</p>
				<p>
			</div>	
		</div>
		
</div>
</body>
<!---footer section--->
<?php include ("footer.php") ?>

</html>