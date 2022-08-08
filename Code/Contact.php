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
		height:1200px;
	}
	.container {
		width: 100%;
	}
	
</style> 

</head>
 <?php include ("header.php") ?>
 <?php include ("menu.php") ?><br><br>
 
<body>

<div class="section">
		<div class="container">
			<h1>CONTACT US</h1><hr>
			<center><p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.751626820174!2d102.28248551476884!3d6.1640080955372865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31b6b193c309ae71%3A0xbc7fd1a4ce46718a!2sUMK%20Kampus%20Kota!5e0!3m2!1sen!2smy!4v1655282650233!5m2!1sen!2smy"
			width="600" height="450" style="border:0;" allowfullscreen="" 
			loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p><br><br>
			<center><h2>GET IN TOUCH</h2><h5>Contact us for more enquiries</h5></center><br>
			<form action="contact.php" method="get">
			 <input type="text" onfocus="this.value=''" id="fname" name="fname" value="Your Name" style="width:40%; height:60px;">
			 <input type="text" onfocus="this.value=''" id="femail" name="femail" value="Your Email" style="width:35%; height:60px;">
			 <input type="text" onfocus="this.value=''" id="sub" name="sub" value="Subject" style="width:20%; height:60px;"><br><br><br>
			 <textarea rows="5" cols="145" name="messg" onfocus="this.value=''" value="Message"></textarea><br>
			
			<center><input type="submit" value="Submit"<button class="enter" style="width: 20%;border-radius: 12px; background-color: orange;
			border: none;color: white;padding: 25px;text-align: center;text-decoration: none;display: inline-block;font-size: 20px;margin: 8px 6px; cursor: pointer;"></button></center>
			</form> 
		</div></center>	
</div>
		
</body>
<!---footer section--->
<?php include ("footer.php") ?>

<!---CHATBOT section--->
<?php include ("UMK-Chatbot.php")?>

</html>



<!---Address: Department of Data Science Universiti Malaysia Kelantan, UMK City Campus Pengkalan Chepa
			<br>Phone: +609-7717179 <br>Email: jsd@umk.edu.my <br>Working Time: sun-thu (08 AM- 05 PM)--->