<style>
/*---------------------
	Menu Section
-----------------------*/
.nav-section {
	background: #353b87;
	margin-bottom: -16px;
	padding:20px;
}
.dropbtn {
  background-color:#353b87;
  color: white;
  padding: 12px;
  font-size: 17px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;

}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1; /*white*/
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 10;
  
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;} /*gray*/

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #df0024;color:#ffffff;}

.dropbtn.active {background-color: #df0024;color:#ffffff;}

/*---------------------
	Header Section
-----------------------*/

.header-section {
	/*padding: 20px 0;*/
	overflow: hidden;
	background-color:white;
}

.site-logo {
	width: 500px;
	height: 150px;
	display: inline-block;
	margin-right: 50px;
	/*padding-top: 20px;*/
}

.header-info {
	display: inline-block;
	/*float: right;*/
}

.header-info .hf-item {
	display: inline-block;
	margin-left: 35px;
}

.header-info .hf-item i {
	width: 45px;
	height: 45px;
	display: inline-block;
	position: relative;
	text-align: center;
	color: #f6783a;
	font-size: 17px;
	padding-top: 13px;
	margin-right: 20px;
	margin-top: 10px;
	margin-bottom: 10px;
}

.header-info .hf-item i:after {
	position: absolute;
	content: '';
	width: 100%;
	height: 100%;
	left: 0;
	top: 0;
	border: 1px solid #d2d2db;
	-webkit-transform: rotate(45deg);
	    -ms-transform: rotate(45deg);
	        transform: rotate(45deg);
	border-radius: 2px;
}

.header-info .hf-item p {
	display: inline-block;
	position: relative;
	top: 10px;
	margin-bottom: 0;
}

.header-info .hf-item p span {
	display: block;
	font-size: 12px;
	text-transform: uppercase;
	color: #020031;  /*blue*/
	font-weight: 500;
}

.nav-switch {
	display: none;
}

.nav-section {
	background: #353b87;

}

.nav-section .nav-right {
	float: right;
	padding-top: 23px;
}

.nav-section .nav-right a {
	color: #fff;  /*white*/
	margin-left: 30px;
	font-size: 16px;
}

/*---------------------
	First Section
-----------------------*/

.first {
	background-color: #fff;  /*white*/
}

.service-icon {
	width: 45px;
	float: left;
}

.service-icon img {
	max-width: 100%;
}

.service-content {
	padding-left: 75px;
}

.service-content h4 {
	margin-bottom: 15px;
	font-weight: 400;
	font-size: 20px;
}

/*---------------------
	Second Section
-----------------------*/

.enrollment {
	position: relative;
	left: 0;
	right:0;
	background-color:black;
	height:700px;
	z-index: 1;
}

.enrollment:after {
	position: absolute;
	content: '';
	width: 100%;
	height: 100%;
	left: 0;
	top: 0;
	background: #000;
	opacity: 0.8;
}

.enrollment .container {
	position: relative;
	z-index: 1;
	padding-top:150px;
}

.enrollment .section-title {
	margin-bottom: 40px;
}

.enroll-list-item {
	padding-left: 70px;
	position: relative;
	padding-bottom: 15px;
	margin-bottom: 10px;
}

.enroll-list-item span {
	position: absolute;
	width: 40px;
	height: 40px;
	left: 0;
	top: 0;
	text-align: center;
	border-radius: 50px;
	background: #f6783a;
	font-size: 16px;
	font-weight: 500;
	padding-top: 10px;
}

.enroll-list-item h5 {
	font-weight: 400;
	margin-bottom: 10px;
}

.enroll-list-item:after {
	position: absolute;
	content: '';
	height: calc(100% - 45px);
	left: 20px;
	top: 48px;
	border-left: 1px dashed #6c6e70;
}

.enroll-list-item:last-child {
	margin-bottom: 0;
	padding-bottom: 0;
}

.enroll-list-item:last-child:after {
	display: none;
}
.pic{
	position: absolute;
	width:100%;
	height: 20px;
	top:0;
	padding-top:200px;
	
}
/*--------------------
	Third Section
--------------------

.course{
	background-color:yellow;
}
.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

.gallery:hover {
  border: 1px solid #777;
}

.gallery img {
  width: 100%;
  height: auto;
}

.desc {
  padding: 15px;
  text-align: center;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Create four equal columns that sits next to each other
.column {
  -ms-flex: 25%; /* IE10
  flex: 50%;
  max-width: 25%;
  padding: 0 4px;
  flex-wrap: wrap;
  display: -ms-flexbox;
  -ms-flex-wrap: wrap;
  
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
  min-width: 100%;

}--*/

/*---------------------
	Gallery Section
-----------------*/



/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .photo {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}
/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .photo {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
}




/*---------------------
	Forth Section
---------------------
#full_3{
	width:100%;
	height: 500px;
	background-color: white;
}

#picture2{
	width:50%;
	height: 200px;
	background-color: white;
	display: flex;
	justify-content: center;
}
#picture3{
	width:100%;
	height: 400px;
	background-color: white;
	display: flex;
	justify-content: center;
}
/*---------------------
	Gallery Section
-----------------------*/



/*---------------------
	Fifth Section
-----------------------*/

.courses-section .container {
	margin-bottom: -50px;
}

.course-item {
	margin-bottom: 50px;
}

.course-item .course-thumb {
	margin-bottom: 45px;
	position: relative;
}

.course-item .course-thumb img {
	min-width: 100%;
}

.course-item .course-thumb .course-cat {
	position: absolute;
	text-align: center;
	width: 100%;
	left: 0;
	bottom: -19px;
}

.course-item .course-thumb .course-cat span {
	min-width: 150px;
	bottom: 0;
	background: #f6783a;
	padding: 10px 15px;
	text-align: center;
	font-size: 13px;
	text-transform: uppercase;
	font-weight: bold;
	color: #fff;
	display: inline-block;
	border-radius: 50px;
	letter-spacing: 2px;
}

.course-item .course-info {
	text-align: center;
	margin: 0 -15px;
}

.course-item .course-info .date {
	color: #f6783a;
	font-size: 14px;
	margin-bottom: 10px;
}

.course-item .course-info h4 {
	font-weight: 400;
	line-height: 1.3;
}

.course-item .course-info .cource-price {
	padding-top: 15px;
	color: #f6783a;
}

.course-item .course-info .cource-price span {
	font-size: 14px;
	font-weight: 500;
	color: #b7b7b7;
}


/*---------------------
	Footer Section
-----------------------*/









</style>
