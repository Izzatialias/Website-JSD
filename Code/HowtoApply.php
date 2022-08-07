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
		height:700px;
	}
	.container {
	width: 100%;
	}
	
	@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
</style> 

</head>
 <?php include ("header.php") ?>
 <?php include ("menu.php") ?><br><br>
 
<body>

<div class="section">
		<div class="container">
			<!-- course item -->
			<h1>How to Apply?</h1><br>
			<h2><b>Undergraduate Programmes</h2><hr>
			<h3 style="color:grey"><b>For Local Students (Malaysia Citizens)</h3><br>
			<h5>You can apply through UPU Online.-upuuu</h5><br>
			<h3 style="color:grey"><b>For International Students</h3><br>
			<h5>Please contact UMK International Office, Universiti Malaysia Kelantan. Locked Bag 36, City Campus, 16100 Kota Bharu Kelantan.
			<br>Email: international@umk.edu.my
			<br>Tel: +609-7717285
			<br>Fax: +609-7727232</h5>
			<h5>Just in case you can't contact this number, 
			Please leave us a message and we will help you as soon as possible. </h5><br>
			
			<h2><b>Postgraduate Programmes</h2><hr><br>
			<h5>Please visit Centre for Postgraduate Studies Universiti Malaysia Kelantan here-
			<a href= "http://cps.umk.edu.my/index.php/en/">http://cps.umk.edu.my/index.php/en/</a></h5><br>
		</div>
</div>
</body>
<!---footer section--->
<?php include ("footer.php") ?>

<!---CHATBOT section--->
<?php include ("UMK-Chatbot.php")?>

</html>