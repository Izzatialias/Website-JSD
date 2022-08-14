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
		height:1500px;
	}
	.container {
	width: 100%;
	}
	.row {
	  display: flex;
	  margin-left:-5px;
	  margin-right:-5px;
	}
	.column {
	  flex: 50%;
	  padding: 5px;
	}
	table {
	  font-family: arial, sans-serif;
	  border-collapse: collapse;
	  width: 100%;
	}

	td, th {
	  border: 1px solid #000;
	  text-align: left;
	  padding: 8px;
	}

	tr:nth-child(odd) {
		background-color: #ddd;
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
			<h1>Images Gallery</h1><hr>
			
			<!-- Images item -->
			<center><img style="width:30%" src="images/PosterSeminarIR40-Small1.png"></center>
			<h5 style="color:white; background-color:maroon; width:13%;" >|| 23 MAY 2021</h5>
			<h5>Tittle: <b>Seminar for Industrial Revolution 4.0</h5>
			<h5>Location: <b>Microsoft Teams</h5>
			<h5>Start Date: <b>23-May-2021</h5>
			<h5>End Date: <b>23-May-2021</h5>
			<h5>Time: <b>1-2 pm</h5><hr>
			
			<!-- Images item -->
			<center><img style="width:30%" src="images/INDUSTRIALTALK_JSD_DESIGNING_USER_INTERFACE.png"></center>
			<h5 style="color:white; background-color:maroon; width:13%;" >|| 27 APRIL 2021</h5>
			<h5>Tittle: <b>Industrial Engagement Series:- Designing User Interface[HD]</h5>
			<h5>Location: <b>FB Live and UMK TV</h5>
			<h5>Start Date: <b>27-Apr-2021</h5>
			<h5>End Date: <b>27-Apr-2021</h5>
			<h5>Time: <b>1-2 pm</h5><hr>

			
			
	</div>
</div>
</div>
</body>
<!---footer section--->
<?php include ("footer.php") ?>

<!---CHATBOT section--->
<?php include ("UMK-Chatbot.php")?>

</html>