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
			<!-- course item -->
			<h1>Academic Staff</h1><hr>
			<div class="row">
				<div class="column">

			<table>
			  
			  <tr>
				<td style="width:20%"><center><img src="images/staff/dr.nooraini.jpg" style="width:50%;"></td>
				<td>
					<p>Nama: PROF.MADYA DR.NOORAINI BINTI YUSOFF
					<br>Jawatan: Profesor Madya
					<br>Emel: nooraini.y@umk.edu.my
					<br>Staff Expertise: <a href="">Click Here<a>			
					</p>
				</td>
			  </tr>
			  <tr>
				<td><center><img src="images/staff/dr.qilla.jpg"  style="width:50%;" ></td>
				<td>
					<p>Nama: DR.NURULAQILLA BINTI KHAMIS
					<br>Jawatan: Pensyarah kanan
					<br>Emel: nurulaqilla.k@umk.edu.my
					<br>Staff Expertise: <a href="">Click Here<a>			
					</p>
				</td>			  
			  </tr>
			  <tr>
				<td><center><img src="images/staff/dr.hadrami.jpg"  style="width:50%;"></td>
				<td>
					<p>Nama: TS.DR.HADHRAMI BIN AB GHANI
					<br>Jawatan: Pensyarah Kanan
					<br>Emel: hadhrami.ag@umk.edu.my
					<br>Staff Expertise: <a href="">Click Here<a>			
					</p>
				</td>
			  </tr>
			  <tr>
				<td><center><img src="images/staff/dr.hasyiya.jpg"  style="width:50%;"></td>
				<td>
					<p>Nama: DR.HASYIYA KARIMAH BINTI ADLI
					<br>Jawatan: Pensyarah Kanan
					<br>Emel: hasyiya@umk.edu.my
					<br>Staff Expertise: <a href="">Click Here<a>			
					</p>
				</td>
			  </tr>
			  <tr>
				<td><center><img src="images/staff/dr.izrin.jpg"  style="width:50%;"></td>
				<td>
					<p>Nama: DR.NURUL IZRIN BINTI MD SALLEH
					<br>Jawatan: Pensyarah Kanan
					<br>Emel: nurulizrin.ms@umk.edu.my
					<br>Staff Expertise: <a href="">Click Here<a>			
					</p>
				</td>
			  </tr>
			  <tr>
				<td><center><img src="images/staff/dr.akmal.jpg"  style="width:50%;"></td>
				<td>
					<p>Nama: DR.MUHAMMAD AKMAL BIN REMLI
					<br>Jawatan: Pensyarah Kanan
					<br>Emel: akmal@umk.edu.my
					<br>Staff Expertise: <a href="">Click Here<a>			
					</p>
				</td>
			  </tr>
			  <tr>
				<td><center><img src="images/staff/dr.gan.jpg"  style="width:50%;"></td>
				<td>
					<p>Nama: DR.GAN HONG SENG
					<br>Jawatan: Pensyarah Kanan
					<br>Emel: hongseng.g@umk.edu.my
					<br>Staff Expertise: <a href="">Click Here<a>			
					</p>
				</td>
			  </tr>
			  <tr>
				<td><center><img src="images/staff/en.syazwan.jpg"  style="width:50%;"></td>
				<td>
					<p>Nama: ENCIK KHAIRUL NIZAR SYAZWAN BIN WAN SALIHIN WONG
					<br>Jawatan: Pensyarah
					<br>Emel: nizar.w@umk.edu.my
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