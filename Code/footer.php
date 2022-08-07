<!-- Footer section -->
<footer class="footer-section" style="background-color:#353b87;">
	<div class="container footer-top">
		<div class="row">
			<!-- widget -->
			<div class="col-sm-12 col-lg-4 footer-widget">
				<div class="about-widget" style="width:200px">
					<img src="img/umk-logo.png" alt="">
					<img src="img/logoAIBIG1.png" alt="">
						<p style="font-size: 9pt">Last updated: <span class="two"></span></p>
							<script>
								// alert(document.lastModified);
								var myDate = new Date(document.lastModified);
								console.log('toISOString', myDate.toISOString());
								myNewDate = new Intl.DateTimeFormat(
								            "de-AT",
								            {year: "numeric", month: "numeric", day: "numeric"}
								).format(myDate).replace(/\./g, '-');

								console.log('Intl.DateTimeFormat', myNewDate);
								document.querySelector('.two').innerHTML = myNewDate;
							</script>
							<!-- <script>
								var d = new Date();
								document.getElementById("demo").innerHTML = d.toDateString();
							</script> -->
				</div>
			</div>
			<!-- widget -->
			<ul class="col-sm-12 col-lg-5 footer-widget" style="padding-top:20px">
			<h4 style="color: white">Contact</h4><br>
				<li style="padding-left: 10px;"><p><i class="fa fa-map-marker"></i> <strong>Address :</strong> Department of Data Science , <br>Universiti Malaysia Kelantan, City Campus, Pengkalan Chepa,<br> 16100 Kota Bharu, Kelantan</p></li>
				<li style="padding-left: 10px;"><p><i class="fa fa-phone"></i> <strong>Phone :</strong> +609-771 7179</p></li>
				<li style="padding-left: 10px;"><p><i class="fa fa-envelope"></i> <strong>Email :</strong> jsd@umk.edu.my</p></li>
			</ul>
			<!-- widget -->
			<div class="col-sm-12 col-lg-3 footer-widget">
				<div class="about-widget" style="padding-top:20px">
				<h4 style="color: white">Follow us</h4><br>
					<div class="social pt-1" style="padding-left: 10px;">
						<a href="https://www.facebook.com/umk.aibig/" target="_blank"><i class="fa fa-facebook-square" title="Facebook"></i></a>
						<a href="https://www.instagram.com/aibigumk/" target="_blank"><i class="fa fa-instagram" title="Instagram"></i></a>
						<a href="https://www.linkedin.com/company/aibig-umk" target="_blank"><i class="fa fa-linkedin-square" title="Linkedin"></i></a>
						<a href="https://www.youtube.com/channel/UCfUM2rZNUIn7yfyvKKycHcg" target="_blank"><i class="fa fa-youtube-square" title="YouTube Channel"></i></a>
					</div>
				</div>
			<!-- Visitor Counter -->
			<div style="padding-top:20px; color: #020031">
				<script type="text/javascript" src="https://freehitcounters.org/count/6630"></script><br>
				 <a href="https://www.free-counters.org/>www.free-counters.org"></a><!--  <script type="text/javascript" src="https://www.whomania.com/ctr?id=ada539c2b2a87828701e7b2d77be6821139647ac"></script> -->
			</div>
			<!-- Visitor Counter -->
			</div>
			<!-- widget -->
		</div>
	</div>
	
	<div style="background-color:#262652; padding-left:100px; padding-right:50px;" >
				<span class="sp-copyright" style="color:#A7A7A7"> © 2021 Department of Data Science. All Rights Reserved.</span>
				<span class="field-content highlight-front" style="padding-left:230px;" ><a href="disclaimer.php" title="Disclaimer" style="color:#A7A7A7">Disclaimer &nbsp; | &nbsp;</a></span>				
				<span><a href="privacy.php" title="Privacy &amp; Security Policy" style="color:
				#A7A7A7">Privacy &amp; Security Policy</a></span>
	</div>
	
</footer>
<!-- Footer section end-->

<!-- Go to top button 
<button onclick="topFunction()" id="myBtn" title="Go to top">^</button>
	<script>
		mybutton = document.getElementById("myBtn");
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {scrollFunction()};
		function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				mybutton.style.display = "block";
			} else {
				mybutton.style.display = "none";
			}
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
			document.body.scrollTop = 0; // For Safari
			document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
		}
    </script> -->