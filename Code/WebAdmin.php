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
		height:700px;
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
			<!-- course item -->
			<h1>Web Admin</h1><hr>
			<div class="row">
				<div class="column">

			<table>
			  
			  <tr>
				<td style="width:20%;"><center><img src="images/staff/tmn.jpg" style="width:50%;"></td>
				<td>
					<p>Nama: TUAN MOHD NIZAM BIN TUAN MUSTAPA
					<br>Jawatan: PENOLONG PENDAFTAR
					<br>Emel: nizam.tm@umk.edu.my
					<br>Staff Expertise: <a href="">Click Here<a>			
					</p>
				</td>
			  </tr>
			 
			</table><br>
			
		</div>
	</div>
</div>
</div>
</body>
<!---footer section--->
<?php include ("footer.php") ?>

<!---CHATBOT section--->
<?php include ("UMK-Chatbot.php")?>

</html>