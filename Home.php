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
 
  
 

</head>
 <?php include ("header.php") ?>
 <?php include ("menu.php") ?>
 
<body>

<div class="body"> 
    <button class="msger-buttonluar buttonluar" ><i>Chat with us</i> <br></button>
    <div id="chat-circle" >
        <div id="chat-overlay"> </div>
		<i class='fas fa-robot' style='font-size:36px; margin-left:12px;margin-top:13px;'>   </i>
	</div>
	
	<main class="chat-box">
		<div class="chat-box-header">
			JSD-Bot
       <span class="chat-box-toggle"><i class='fa fa-close' style='font-size:26px;margin-top:-2px;'> </i></span>     
		</div>
    <div class="chat-box-body">
      <div class="chat-box-overlay">   
    </div> 
	  <!--chat-log-->	
    <div class="chat-logs">
		
		
		 
		
	
		 
		<div id="cm-msg-2" class="chat-msg user">  
			  <span class="msg-avatar">
				  <img style="float:left;" src="images/chatbot.png">  		 
			  </span><br><br>
			  
			  <div id="start" class="cm-msg-text">
				   Hi there! Welcome to the Department of Data Science Virtual Assistance Page. I am JSDMegaBot
			  </div>  
			  
			  <div id="start" class="cm-msg-text">
					Select a topic below if you want to know more about Department of Data Science:
			  </div>  
		</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js"></script>

	<div style="display:block;"  id="level1">
		<button
		onclick="hidebutton('level1','Prospective Student?')"
		type="submit"
		class="msger-buttonleft2 button2" 
		>
		Prospective Student
		</button> 
		
		
		<button
		onclick="hidebuttonX('level1','Current Student?')"
		type="submit"
		class="msger-buttonleft2 button2" 
		>
		Current Student xjd
		</button>
		
		<button
		onclick="hidebuttonXX('level1','More')"
		type="submit"
		class="msger-buttonleft2 button2" 
		>
		More xjd
		</button>
	</div>
	
<script>

	var indexIndicator = 0;
	var INDEXlvl = 0;
	var INDEXlv2 = 0;
	var INDEXlv3 = 0;
	var INDEXlvl4 = 0;
	var INDEXlvl5 = 0;
	
	var INDEXx = 0;
	function hidebutton(HideSection,msgSelf) {
	var INDEX = 0; 
    
	 
	
	 if(INDEXlvl == 0)
	 {
		document.getElementById(HideSection).style.display='none'; 
	 }
	 if(INDEXlvl != 0)
	 {
		document.getElementById('brbr'+INDEXlvl).style.display='none'; 
	 }
	 
    if (HideSection == "level2" && msgSelf == "Main" && INDEXlvl != 1)
	{
		document.getElementById('bobo'+INDEXx).style.display='none'; 
	}
	
	if (HideSection == "level3" && msgSelf == "Main")
	{
		document.getElementById('bubu'+INDEXlv3).style.display='none'; 
	}
	
	if (HideSection == "level4" && msgSelf == "Main")
	{
		document.getElementById('bebe'+INDEXlvl4).style.display='none'; 
	}
	
	if (HideSection == "level5" && msgSelf == "Main")
	{
		document.getElementById('byby'+INDEXlvl5).style.display='none'; 
	}
	
    
	generate_message(msgSelf, 'self'); 
	
	//set time dalam 1 saat display indicator element (panggil funtion)
	setTimeout(function() {   
		indexIndicator++;    
		generate_indicator('user'); 
    }, 1000);
	
	
	 
    setTimeout(function() {      
		generate_message_reply(msgSelf, 'user');  
    }, 4000);
    
	 if( msgSelf == "Main")
	{	
		 
		setTimeout(function() {       
		var row11_updated_html = $('#level1').html();
		$('#brbr'+INDEXlvl).html(row11_updated_html);	  
    }, 4000);
	}
	else{
		setTimeout(function() {       
		var row11_updated_html = $('#level2').html();
		$('#brbr'+INDEXlvl).html(row11_updated_html);	  
    }, 4000);
}	  

  INDEX=0;
	function generate_message(msgSelf, type) {
    INDEX++;
    var str="";
    str += "<div   id='cm-msg-"+INDEX+"' class=\"chat-msg "+type+"\">";
    str += "          <span class=\"msg-avatar\">";
    str += "            <img src=\"images/happy.png\">";
    str += "          </span>";
    str += "          <div class=\"cm-msg-text\">";
    str += msgSelf;
    str += "           </div>";
    str += "        </div>"; 
    $(".chat-logs").append(str);
    $("#cm-msg-"+INDEX).hide().fadeIn(300);
    if(type == 'self'){
     $("#chat-input").val(''); 
    }     
    $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight}, 3000);    
  }  
  
  
  //function untuk indicator element
  function generate_indicator(type) {
    var str="";
    str += "<div id=\"myElemInd"+indexIndicator+"\"  id='cm-msg-2' class=\"chat-msg "+type+"\">";
    str += "          <span class=\"msg-avatar\">";
    str += "            <img src=\"images/chatbot.png\">";
    str += "          </span>";
	str += " 	<div  class='typing-indicator'>  ";
	str += " 		<span></span>";
	str += " 		<span></span>";
	str += " 		<span></span>";
	str += " 		<span></span>";
	str += " 	</div>";
    str += " </div>";
    $(".chat-logs").append(str);
    $("#cm-msg-"+INDEX).hide().fadeIn(300);
    if(type == 'self'){
     $("#chat-input").val(''); 
    }     
    $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight}, 3000);    
  } 
  
  
  
  function generate_message_reply(msgSelf, type) {
    INDEX++;
	INDEXlvl++;
    var str="";
	
	//hide indicator element
	document.getElementById('myElemInd'+indexIndicator).style.display='none';
	
	
	
	
    str += "<div   id='cm-msg-"+INDEX+"' class=\"chat-msg "+type+"\">";
    str += "          <span class=\"msg-avatar\">";
    str += "            <img src=\"images/chatbot.png\">";
    str += "          </span>";
	
   
	/*ini dia looping yng mula2 sekali untuk intro chatbot*/
	if( msgSelf == "Main")
	{
		 
		str += "<br><br><div  class=\"cm-msg-text\" >Hi there! Welcome to the Department of Data Science Virtual Assistance Page. I am JSDMegaBot</div>";
		 
	 
		str += "<div  class=\"cm-msg-text\" >Select a topic below if you want to know more about Department of Data Science:</div>"; 
		 
	}
	else
	{
		str += "          <div class=\"cm-msg-text\">";
		str +="There are several major question here:";/*ini yng akan keluar selepas user tekn prospective student*/
		str += "          </div>";
	}
    
    str += "        </div>";
	
	str += "   <div  id=\"brbr"+INDEXlvl+"\"    >  </div>";
   
	
    $(".chat-logs").append(str);
    $("#cm-msg-"+INDEX).hide().fadeIn(300);
    if(type == 'self'){
     $("#chat-input").val(''); 
    }    
    $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight}, 4000); 
	
	  	
  }  
  
}
</script>
<br>





 <br>
	<div style="display:none;"  id="level2">
	<button
    onclick="hidebutton2('level2','What are the programmes offered?')"
    type="submit"
    class="msger-buttonleft2 button2" 
	>
    Programmes offered  
	</button> 

	<button
    onclick="hidebutton1('level2','Where are the campus?','There are 3 main location of campus:')"
    type="submit"
    class="msger-buttonleft2 button2" 
	>
    Campus 
	</button>  
	
	<button
    onclick="hidebutton1('level2','Staff Directory and Expertise?','More details on about Staff Directory and Expertise ')"
    
	type="submit"
    class="msger-buttonleft2 button2" 
	>
    Staff Directory and Expertise
	</button>  
	
	<button
    onclick="hidebutton1('level2','Virtual Campus?','More details on about Virtual Campus ')"
    type="submit"
    class="msger-buttonleft2 button2" 
	>
    Virtual Campus 
	</button>  
	
	<button
    onclick="hidebutton('level2','Main')"
    type="submit"
    class="msger-buttonleft2 button2" 
	>
    Main 
	</button> 
	
	</div>

	
<script>

	
  function hidebutton1(HideSection,msgSelf,msgUser) {
   var INDEX = 0;
    
	 //res = "Good Luck!!!!2222";
	 if(INDEXx == 0)
	 {
		document.getElementById('brbr'+INDEXlvl).style.display='none'; 
	 }
	 
	 if(INDEXx != 0)
	 {
		document.getElementById('bobo'+INDEXx).style.display='none'; 
	 }
	 
    generate_message(msgSelf, 'self');  
   
//set time dalam 1 saat display indicator element (panggil funtion)   
	setTimeout(function() {   
		indexIndicator++;    
		generate_indicator('user'); 
    }, 2000);
	
	
    setTimeout(function() {      
		generate_message_reply(msgSelf,msgUser, 'user');  
    }, 3000);
    
	
	setTimeout(function() {       
		var row11_updated_html = $('#level2').html();
		$('#bobo'+INDEXx).html(row11_updated_html);	  
    }, 3000);
	  
  INDEX=0;
  function generate_message(msgSelf, type) {
    INDEX++;
    var str="";
    str += "<div   id='cm-msg-"+INDEX+"' class=\"chat-msg "+type+"\">";
    str += "          <span class=\"msg-avatar\">";
    str += "            <img src=\"images/happy.png\">";
    str += "          </span>";
    str += "          <div class=\"cm-msg-text\">";
    str += msgSelf;
    str += "           </div>";
    str += "        </div>";
    $(".chat-logs").append(str);
    $("#cm-msg-"+INDEX).hide().fadeIn(300);
    if(type == 'self'){
     $("#chat-input").val(''); 
    }    
    $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight}, 3000);    
  }  
  
   //function untuk indicator element
  function generate_indicator(type) {
    var str="";
    str += "<div id=\"myElemInd"+indexIndicator+"\"  id='cm-msg-2' class=\"chat-msg "+type+"\">";
    str += "          <span class=\"msg-avatar\">";
    str += "            <img src=\"images/chatbot.png\">";
    str += "          </span>";
	str += " 	<div  class='typing-indicator'>  ";
	str += " 		<span></span>";
	str += " 		<span></span>";
	str += " 		<span></span>";
	str += " 		<span></span>";
	str += " 	</div>";
    str += " </div>";
    $(".chat-logs").append(str);
    $("#cm-msg-"+INDEX).hide().fadeIn(300);
    if(type == 'self'){
     $("#chat-input").val(''); 
    }     
    $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight}, 4000);    
  } 
  
  
  
  function generate_message_reply(msgSelf,msgUser, type) {
    INDEX++;
	INDEXx++;
    var str="";
	
    //hide indicator element
	document.getElementById('myElemInd'+indexIndicator).style.display='none';
	
	if(msgSelf == "Where are the campus?")
	{
    str += "<div   id='cm-msg-"+INDEX+"' class=\"chat-msg "+type+"\">";
    str += "          <span class=\"msg-avatar\">";
    str += "            <img src=\"images/chatbot.png\">";
    str += "          </span>";
	
    str += "          <br><br><div class=\"cm-msg-text\">";
    str += "<b>Kota Campus : </b><div style='background:red; height:160px;'> <img style='width:100%;'src=\"images/umkKota.jpg\"> </div><ul><li>Faculty of entrepreneurship and business (FKP) </li> <li>Faculty of hospitality. Tourism and wellness (FHPK) </li> <li>Faculty of Veterinary Medicine (FPV) </li></ul>";
    str += "          </div>";
	
	str += "          <div class=\"cm-msg-text\">";
    str += "<b>Bachok Campus : </b><div style='background:yellow; height:160px;'> <img style='width:100%;'src=\"images/umkBachok.jpg\"></div><ul><li>Faculty of creative technology and heritage (FTKW) </li><li>Centre for Language Studies and Generic Development (PBI)</li><li> Faculty of Architecture and Ekistics (FAC)</li></ul>";
    str += "          </div>";
   
    str += "          <div class=\"cm-msg-text\">";
    str += "<b>Jeli Campus :</b> <div style='background:green; height:160px;'><img style='width:100%;'src=\"images/umkjeli1.jpg\"> </div><ul><li>Faculty of Agro Based industry (FIAT)</li><li> Faculty of Earth Sciences (FSB) </li><li>Faculty of Bioengineering and Technology (FBKT)</li></ul>";
    str += "          </div>";
	
	 
    
    str += "        </div>";
	
	}
	else 
	{
		if (msgSelf == "Staff Directory and Expertise?")
		{
			msgUser = msgUser + "<a href = 'http://ds.umk.edu.my/directory-academic.cfm' target='_blank'> Click here</a>";
		}
		else if (msgSelf == "Virtual Campus?")
		{
			msgUser =    msgUser + "<br><a href = 'https://www.umk.edu.my/virtualkampus/index.php' target='_blank'>  <video style='width:100%;' controls> <source src='images/UMK.mp4' type='video/mp4'> </video>     Click here   </a>";
		}
		
    str += "<div   id='cm-msg-"+INDEX+"' class=\"chat-msg "+type+"\">";
    str += "          <span class=\"msg-avatar\">";
    str += "            <img src=\"images/chatbot.png\">";
    str += "          </span>"; 
    str += "          <div class=\"cm-msg-text\">";
    str += msgUser;
    str += "          </div>";
    str += "        </div>";
	}
	str += "   <div   id=\"bobo"+INDEXx+"\" >  </div>";
    $(".chat-logs").append(str);
    $("#cm-msg-"+INDEX).hide().fadeIn(300);
    if(type == 'self'){
     $("#chat-input").val(''); 
    }    
    $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight}, 3000); 
	
	  	
  }  
  
}
</script>
 



<script>

	
  function hidebutton2(HideSection,msgSelf) {
  var INDEX = 0; 
    
	 //res = "Good Luck!!!!2222";
	 
	  
	 
	 if(INDEXlv2 == 0 && INDEXx != 0)
	 {
		document.getElementById('bobo'+INDEXx).style.display='none'; 
	 }
	 else
	 {
		 document.getElementById('brbr'+INDEXlvl).style.display='none'; 
	 }
	 if(INDEXlv2 != 0 )
	 {
		document.getElementById('bibi'+INDEXlv2).style.display='none'; 
	 }
	 
	 
	generate_message(msgSelf, 'self');  
    
	
	//set time dalam 1 saat display indicator element (panggil funtion)   
	setTimeout(function() {   
		indexIndicator++;    
		generate_indicator('user'); 
    }, 1000);
	
    setTimeout(function() {      
		generate_message_reply('user');  
    }, 3000);
    
	
	setTimeout(function() {       
		var row11_updated_html = $('#level3').html();
		$('#bibi'+INDEXlv2).html(row11_updated_html);	  
    }, 3000);
	  
  INDEX=0;
  function generate_message(msgSelf, type) {
    INDEX++;
	
    var str="";
	
    str += "<div   id='cm-msg-"+INDEX+"' class=\"chat-msg "+type+"\">";
    str += "          <span class=\"msg-avatar\">";
    str += "            <img src=\"images/happy.png\">";
    str += "          </span>";
    str += "          <div class=\"cm-msg-text\">";
    str += msgSelf;
    str += "           </div>";
    str += "        </div>";
    $(".chat-logs").append(str);
    $("#cm-msg-"+INDEX).hide().fadeIn(300);
    if(type == 'self'){
     $("#chat-input").val(''); 
    }    
    $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight}, 3000);    
  }  
  
   //function untuk indicator element
  function generate_indicator(type) {
    var str="";
    str += "<div id=\"myElemInd"+indexIndicator+"\"  id='cm-msg-2' class=\"chat-msg "+type+"\">";
    str += "          <span class=\"msg-avatar\">";
    str += "            <img src=\"images/chatbot.png\">";
    str += "          </span>";
	str += " 	<div  class='typing-indicator'>  ";
	str += " 		<span></span>";
	str += " 		<span></span>";
	str += " 		<span></span>";
	str += " 		<span></span>";
	str += " 	</div>";
    str += " </div>";
    $(".chat-logs").append(str);
    $("#cm-msg-"+INDEX).hide().fadeIn(300);
    if(type == 'self'){
     $("#chat-input").val(''); 
    }     
    $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight}, 4000);    
  } 
  
  
  function generate_message_reply(type) {
    INDEX++;
	INDEXlv2++;
    var str="";
	
	 //hide indicator element
	document.getElementById('myElemInd'+indexIndicator).style.display='none';
	
    str += "<div   id='cm-msg-"+INDEX+"' class=\"chat-msg "+type+"\">";
    str += "          <span class=\"msg-avatar\">";
    str += "            <img src=\"images/chatbot.png\">";
    str += "          </span>";
    //str += "          
	
	str += "          <div class=\"cm-msg-text\">";
    str += "There are two main programmes offered in Jabatan Sains Data :";
    str += "          </div>";
	
	str += "          <div class=\"cm-msg-text\">";
    str += "Doctor of Philosophy :<ul><li>The research -based Doctor of Philosophy in Computer Philosophy academic program offered focuses on the specialization of IR4.0, namely Artificial Intelligence (AI), Data Science (DS) and Internet of Things (IoT).However, it is not limited to such specialization, in fact it will evolve according to technological developments over time and preparation for the current IR5.0</li></ul>";
    str += "          </div>";
	
	str += "          <div class=\"cm-msg-text\">";
    str += "Master of Computing :<ul><li>Master of Computing academic program by research which takes a minimum period of 1 year (full time) is offered to focus on the specialization of IR4.0 field, namely Artificial Intelligence (AI), Data Science (DS) and Internet of Things (IoT).However, it is not limited to such specialization, in fact it will evolve according to technological developments over time and preparation for the current IR5.0</li></li></ul>";
    str += "          </div>";
   
	
    //str += "          <\/div>";
    str += "        </div>";
	str += "   <div   id=\"bibi"+INDEXlv2+"\" >  </div>";
   
	
    $(".chat-logs").append(str);
    $("#cm-msg-"+INDEX).hide().fadeIn(300);
    if(type == 'self'){
     $("#chat-input").val(''); 
    }    
    $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight}, 3000); 
	
	  	
  }  
  
}
</script>
 
	<div style="display:none;"  id="level3">
	<button
    onclick="hidebutton3('level3','Doctor of Philosophy','Main question in Doctor of Philosophy:')"
    type="submit"
    class="msger-buttonleft2 button2">
    Doctor of Philosophy
	</button> 

	<button
    onclick="hidebutton3('level3','Master of Computing','Main question in Master of Computing:')"
    type="submit"
    class="msger-buttonleft2 button2">
    Master of Computing 
	</button>  
	
	<button
    onclick="hidebutton('level3','Main')"
    type="submit"
    class="msger-buttonleft2 button2">
    Main 
	</button>  
	
	</div>

<script>

	
  function hidebutton3(HideSection,msgSelf,msgUser) {
  var INDEX = 0; 
    
	 //res = "Good Luck!!!!2222";
	 
	 if(INDEXlv3 == 0)
	 {
		document.getElementById('bibi'+INDEXlv2).style.display='none'; 
	 }
	 
	 if(INDEXlv3 != 0)
	 {
		document.getElementById('bubu'+INDEXlv3).style.display='none'; 
	 }

    generate_message(msgSelf, 'self');  
    
	//set time dalam 1 saat display indicator element (panggil funtion)   
	setTimeout(function() {   
		indexIndicator++;    
		generate_indicator('user'); 
    }, 1000);
	
	
    setTimeout(function() {      
		generate_message_reply(msgUser, 'user');  
    }, 2000);
    
	if(msgSelf == "Doctor of Philosophy")
	{
		
	setTimeout(function() {       
		var row11_updated_html = $('#level4').html();
		$('#bubu'+INDEXlv3).html(row11_updated_html);	  
    }, 3000);
	
	}
	else if(msgSelf == "Master of Computing")
	{
		
	setTimeout(function() {       
		var row11_updated_html = $('#level5').html();
		$('#bubu'+INDEXlv3).html(row11_updated_html);	  
    }, 3000);
	
	}
	  
  INDEX=0;
  function generate_message(msgSelf, type) {
    INDEX++;
    var str="";
    str += "<div   id='cm-msg-"+INDEX+"' class=\"chat-msg "+type+"\">";
    str += "          <span class=\"msg-avatar\">";
    str += "            <img src=\"images/happy.png\">";
    str += "          </span>";
    str += "          <div class=\"cm-msg-text\">";
    str += msgSelf;
    str += "           </div>";
    str += "        </div>";
    $(".chat-logs").append(str);
    $("#cm-msg-"+INDEX).hide().fadeIn(300);
    if(type == 'self'){
     $("#chat-input").val(''); 
    }    
    $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight}, 3000);    
  }  
  
  //function untuk indicator element
  function generate_indicator(type) {
    var str="";
    str += "<div id=\"myElemInd"+indexIndicator+"\"  id='cm-msg-2' class=\"chat-msg "+type+"\">";
    str += "          <span class=\"msg-avatar\">";
    str += "            <img src=\"images/chatbot.png\">";
    str += "          </span>";
	str += " 	<div  class='typing-indicator'>  ";
	str += " 		<span></span>";
	str += " 		<span></span>";
	str += " 		<span></span>";
	str += " 		<span></span>";
	str += " 	</div>";
    str += " </div>";
    $(".chat-logs").append(str);
    $("#cm-msg-"+INDEX).hide().fadeIn(300);
    if(type == 'self'){
     $("#chat-input").val(''); 
    }     
    $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight}, 3000);    
  } 
  
  
  function generate_message_reply(msgUser, type) {
    INDEX++;
	INDEXlv3++;
	
	 //hide indicator element
	document.getElementById('myElemInd'+indexIndicator).style.display='none';
	
    var str="";
    str += "<div   id='cm-msg-"+INDEX+"' class=\"chat-msg "+type+"\">";
    str += "          <span class=\"msg-avatar\">";
    str += "            <img src=\"images/chatbot.png\">";
    str += "          </span>";
    str += "          <div class=\"cm-msg-text\">";
    str += msgUser;
    str += "          </div>";
    str += "        </div>";
	str += "   <div  id=\"bubu"+INDEXlv3+"\"    >  </div>";
   
	
    $(".chat-logs").append(str);
    $("#cm-msg-"+INDEX).hide().fadeIn(300);
    if(type == 'self'){
     $("#chat-input").val(''); 
    }    
    $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight}, 3000); 
	
	  	
  }  
  
}
</script>
 	
	<div style="display:none;"  id="level4">
	 
	
	<button
    onclick="hidebutton4('level4','Entry Requirement for Doctor of Philosophy Programmes?','Master degree from recognized institutions of higher learning or equivalent qualification as endorsed by the Senate')"
    type="submit"
    class="msger-buttonleft2 button2" 
	>
    Entry Requirement  
	</button> 
	
	<button
    onclick="hidebutton4('level4','Fields of Study for Doctor of Philosophy Programmes?','')"
    type="submit"
    class="msger-buttonleft2 button2" 
	>
    Fields of Study
	</button> 

	<button
    onclick="hidebutton4('level4','How to Apply for Doctor of Philosophy Programmes?','')"
    type="submit"
    class="msger-buttonleft2 button2" 
	>
    How to Apply 
	</button>  

	<button
    onclick="hidebutton4('level4','Tuition Fees for Doctor of Philosophy Programmes?','')"
    type="submit"
    class="msger-buttonleft2 button2" 
	>
    Tuition Fees 
	</button> 
	
	<button
    onclick="hidebutton5('level4','Master of Computing','Main question in Master of Computing:')"
    type="submit"
    class="msger-buttonleft2 button2" 
	>
    Master of Computing 
	</button> 
	
	<button
    onclick="hidebutton('level4','Main')"
    type="submit"
    class="msger-buttonleft2 button2" 
	>
    Main 
	</button>  
	
	</div>

			
<script>

	
  function hidebutton4(HideSection,msgSelf,msgUser) {
   var INDEX = 0;
    
	 //res = "Good Luck!!!!2222";
	 if(INDEXlvl4 == 0)
	 {
		document.getElementById('bubu'+INDEXlv3).style.display='none'; 
	
	 }
	 if(INDEXlvl4 != 0)
	 {
		document.getElementById('bebe'+INDEXlvl4).style.display='none'; 
	
	 }
	 if(INDEXlvl5 != 0)
	 {
		document.getElementById('byby'+INDEXlvl5).style.display='none'; 
	
	 }
	 
    generate_message(msgSelf, 'self');  
    
	//set time dalam 1 saat display indicator element (panggil funtion)   
	setTimeout(function() {   
		indexIndicator++;    
		generate_indicator('user'); 
    }, 1000);
	
    setTimeout(function() {      
		generate_message_reply(msgSelf,msgUser, 'user');  
    }, 2000);
    
	
	setTimeout(function() {       
		var row11_updated_html = $('#level4').html();
		$('#bebe'+INDEXlvl4).html(row11_updated_html);	  
    }, 3000);
	  
  INDEX=0;
  function generate_message(msgSelf, type) {
    INDEX++;
    var str="";
    str += "<div   id='cm-msg-"+INDEX+"' class=\"chat-msg "+type+"\">";
    str += "          <span class=\"msg-avatar\">";
    str += "            <img src=\"images/happy.png\">";
    str += "          </span>";
    str += "          <div class=\"cm-msg-text\">";
    str += msgSelf;
    str += "           </div>";
    str += "        </div>";
    $(".chat-logs").append(str);
    $("#cm-msg-"+INDEX).hide().fadeIn(300);
    if(type == 'self'){
     $("#chat-input").val(''); 
    }    
    $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight}, 3000);    
  } 
  
   //function untuk indicator element
  function generate_indicator(type) {
    var str="";
    str += "<div id=\"myElemInd"+indexIndicator+"\"  id='cm-msg-2' class=\"chat-msg "+type+"\">";
    str += "          <span class=\"msg-avatar\">";
    str += "            <img src=\"images/chatbot.png\">";
    str += "          </span>";
	str += " 	<div  class='typing-indicator'>  ";
	str += " 		<span></span>";
	str += " 		<span></span>";
	str += " 		<span></span>";
	str += " 		<span></span>";
	str += " 	</div>";
    str += " </div>";
    $(".chat-logs").append(str);
    $("#cm-msg-"+INDEX).hide().fadeIn(300);
    if(type == 'self'){
     $("#chat-input").val(''); 
    }     
    $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight}, 3000);    
  } 
  
  function generate_message_reply(msgSelf,msgUser, type) {
    INDEX++;
	INDEXlvl4++;
	
	 //hide indicator element
	document.getElementById('myElemInd'+indexIndicator).style.display='none';
	
    var str="";
	 
	if(msgSelf == "How to Apply for Doctor of Philosophy Programmes?")
	{
		msgUser = msgUser + "Application of Postgraduate Studies <ul><li> The online application can be done through: <a href = 'http://pams.umk.edu.my:8082/#/' target='_blank'> click here</a></li><li>However, due to the maintenance in our application website, allapplication must be done thought application form which can be downloaded from : <a href = 'http://cps.umk.edu.my/index.php/en/downloads/forms-and-guidelines.html' target='_blank'> Click here </a></li><li>Submit the application form and document required to email siswazah@umk.edu.my</li><li>For any enquiries please do contact</li><li>Email:siswazah@umk.edu.my</li><li>Telephone Number: +609-7717145 /7049</li></ul>  ";
	}
	else if(msgSelf == "Tuition Fees for Doctor of Philosophy Programmes?")
	{
		msgUser = msgUser + "You like to know more about the tuition fees? <a href = 'https://cps.umk.edu.my/index.php/en/prospective/fees.html' target='_blank'> Click here </a> for more details ";
	}
	
	if(msgSelf == "Fields of Study for Doctor of Philosophy Programmes?")
	{
    str += "<div   id='cm-msg-"+INDEX+"' class=\"chat-msg "+type+"\">";
    str += "          <span class=\"msg-avatar\">";
    str += "            <img src=\"images/chatbot.png\">";
    str += "          </span>";
	
    str += "         <br><br> <div class=\"cm-msg-text\">";
    str += "Data Science :<ul><li>Data science continues to evolve as one of the most promising and in-demand career paths for skilled professionals. </li><li>Today, successful data professionals understand that they must advance past the traditional skills of analyzing large amounts of data, data mining, and programming skills.</li></ul>";
    str += "          </div>";
	
	str += "          <div class=\"cm-msg-text\">";
    str += "Artificial Intelligence : <ul><li>Artificial intelligence (AI) refers to the simulation of human intelligence in machines that are programmed to think like humans and mimic their actions. </li></ul>";
    str += "          </div>";
   
    str += "          <div class=\"cm-msg-text\">";
    str += "Internet of Things : <ul><li>The Internet of things (IoT) describes physical objects (or groups of such objects) with sensors, processing ability, software, and other technologies that connect and exchange data with other devices and systems over the Internet or other communications networks.</li></ul>";
    str += "          </div>";
    
    str += "        </div>";
	
	}
	else 
	{
    str += "<div   id='cm-msg-"+INDEX+"' class=\"chat-msg "+type+"\">";
    str += "          <span class=\"msg-avatar\">";
    str += "            <img src=\"images/chatbot.png\">";
    str += "          </span>";
    str += "          <div class=\"cm-msg-text\">";
    str += msgUser;
    str += "          </div>";
    str += "        </div>";
	}
	str += "   <div   id=\"bebe"+INDEXlvl4+"\" >  </div>";
    $(".chat-logs").append(str);
    $("#cm-msg-"+INDEX).hide().fadeIn(300);
    if(type == 'self'){
     $("#chat-input").val(''); 
    }    
    $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight}, 3000); 
	
	  	
  }  
  
}
</script>
 
	<div style="display:none;"  id="level5">
	
		<button
		onclick="hidebutton5('level5','Entry Requirement for Master of Computing Programmes','Bachelors Degree with Honours (CGPA>2.75) from recognized institutions of higher learning or equivalent qualification as endorsed by the Senate</li><li>Application with other qualification may also be considered for admission provided he/she has appropiate research experience and able to demonstrate the capacity to undertaje Postgraduate Studies.')"
		type="submit"
		class="msger-buttonleft2 button2">
		Entry Requirement  
		</button> 
		
		<button
		onclick="hidebutton5('level5','Fields of Study for Master of Computing Programmes?','')"
		type="submit"
		class="msger-buttonleft2 button2">
		Fields of Study
		</button> 

		<button
		onclick="hidebutton5('level5','How to Apply for Master of Computing Programmes?','')"
		type="submit"
		class="msger-buttonleft2 button2">
		How to Apply 
		</button>  

		<button
		onclick="hidebutton5('level5','Tuition Fees for Master of Computing Programmes?','')"
		type="submit"
		class="msger-buttonleft2 button2">
		Tuition Fees 
		</button> 
		
		<button
		onclick="hidebutton4('level5','Doctor of Philosophy','Main question in Doctor of Philosophy:')"
		type="submit"
		class="msger-buttonleft2 button2">
		Doctor of Philosophy 
		</button> 
		
		<button
		onclick="hidebutton('level5','Main')"
		type="submit"
		class="msger-buttonleft2 button2">
		Main 
		</button> <br> 
	</div>
					
<script>

	
  function hidebutton5(HideSection,msgSelf,msgUser) {
   var INDEX = 0;
    
	 //res = "Good Luck!!!!2222";
	 if(INDEXlvl5 == 0)
	 {
		document.getElementById('bubu'+INDEXlv3).style.display='none'; 
	
	 }
	 if(INDEXlvl4 != 0)
	 {
		document.getElementById('bebe'+INDEXlvl4).style.display='none'; 
	
	 }
	 if(INDEXlvl5 != 0)
	 {
		document.getElementById('byby'+INDEXlvl5).style.display='none'; 
	
	 }
	 
    generate_message(msgSelf, 'self'); 

//set time dalam 1 saat display indicator element (panggil funtion)   
	setTimeout(function() {   
		indexIndicator++;    
		generate_indicator('user'); 
    }, 1000);	
    
    setTimeout(function() {      
		generate_message_reply(msgSelf,msgUser, 'user');  
    }, 2000);
    
	
	setTimeout(function() {       
		var row11_updated_html = $('#level5').html();
		$('#byby'+INDEXlvl5).html(row11_updated_html);	  
    }, 3000);
	  
  INDEX=0;
  function generate_message(msgSelf, type) {
    INDEX++;
    var str="";
    str += "<div   id='cm-msg-"+INDEX+"' class=\"chat-msg "+type+"\">";
    str += "          <span class=\"msg-avatar\">";
    str += "            <img src=\"images/happy.png\">";
    str += "          </span>";
    str += "          <div class=\"cm-msg-text\">";
    str += msgSelf;
    str += "           </div>";
    str += "        </div>";
    $(".chat-logs").append(str);
    $("#cm-msg-"+INDEX).hide().fadeIn(300);
    if(type == 'self'){
     $("#chat-input").val(''); 
    }    
    $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight}, 3000);    
  }  
  
  //function untuk indicator element
  function generate_indicator(type) {
    var str="";
    str += "<div id=\"myElemInd"+indexIndicator+"\"  id='cm-msg-2' class=\"chat-msg "+type+"\">";
    str += "          <span class=\"msg-avatar\">";
    str += "            <img src=\"images/chatbot.png\">";
    str += "          </span>";
	str += " 	<div  class='typing-indicator'>  ";
	str += " 		<span></span>";
	str += " 		<span></span>";
	str += " 		<span></span>";
	str += " 		<span></span>";
	str += " 	</div>";
    str += " </div>";
    $(".chat-logs").append(str);
    $("#cm-msg-"+INDEX).hide().fadeIn(300);
    if(type == 'self'){
     $("#chat-input").val(''); 
    }     
    $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight}, 3000);    
  } 
  
  
  
  function generate_message_reply(msgSelf,msgUser, type) {
    INDEX++;
	INDEXlvl5++;
	
	 //hide indicator element
	document.getElementById('myElemInd'+indexIndicator).style.display='none';
	
    var str="";
	
		if (msgSelf == "How to Apply for Master of Computing Programmes?")
		{
			msgUser = msgUser + "Application of Postgraduate Studies <ul><li> The online application can be done through: <a href = 'http://pams.umk.edu.my:8082/#/' target='_blank'> click here</a></li><li>However, due to the maintenance in our application website, allapplication must be done thought application form which can be downloaded from : <a href = 'http://cps.umk.edu.my/index.php/en/downloads/forms-and-guidelines.html' target='_blank'> Click here </a></li><li>Submit the application form and document required to email siswazah@umk.edu.my</li><li>For any enquiries please do contact</li><li>Email:siswazah@umk.edu.my</li><li>Telephone Number: +609-7717145 /7049</li></ul>  ";
		}
		else if (msgSelf == "Tuition Fees for Master of Computing Programmes?")
		{
			msgUser = msgUser + " You like to know more about the tuition fees? <a href = 'https://cps.umk.edu.my/index.php/en/prospective/fees.html' target='_blank'> Click here </a> for more details";
		}
		
	if(msgSelf == "Fields of Study for Master of Computing Programmes?")
	{
    str += "<div   id='cm-msg-"+INDEX+"' class=\"chat-msg "+type+"\">";
    str += "          <span class=\"msg-avatar\">";
    str += "            <img src=\"images/chatbot.png\">";
    str += "          </span>";
	
    str += "          <div class=\"cm-msg-text\">";
    str += "Data Science :<ul><li>Data science continues to evolve as one of the most promising and in-demand career paths for skilled professionals. </li><li>Today, successful data professionals understand that they must advance past the traditional skills of analyzing large amounts of data, data mining, and programming skills.</li></ul>";
    str += "          </div>";
	
	str += "          <div class=\"cm-msg-text\">";
    str += "Artificial Intelligence : <ul><li>Artificial intelligence (AI) refers to the simulation of human intelligence in machines that are programmed to think like humans and mimic their actions. </li></ul>";
    str += "          </div>";
   
    str += "          <div class=\"cm-msg-text\">";
    str += "Internet of Things : <ul><li>The Internet of things (IoT) describes physical objects (or groups of such objects) with sensors, processing ability, software, and other technologies that connect and exchange data with other devices and systems over the Internet or other communications networks.</li></ul>";
    str += "          </div>";
    
    str += "        </div>";
	
	}
	else 
	{
    str += "<div   id='cm-msg-"+INDEX+"' class=\"chat-msg "+type+"\">";
    str += "          <span class=\"msg-avatar\">";
    str += "            <img src=\"images/chatbot.png\">";
    str += "          </span>";
    str += "          <div class=\"cm-msg-text\">";
    str += msgUser;
    str += "          </div>";
    str += "        </div>";
	}
	str += "   <div   id=\"byby"+INDEXlvl5+"\" >  </div>";
    $(".chat-logs").append(str);
    $("#cm-msg-"+INDEX).hide().fadeIn(300);
    if(type == 'self'){
     $("#chat-input").val(''); 
    }    
    $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight}, 3000); 
	
	  	
  }  
  
}
</script>
 
 
 
 
	
	
	




















	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
  

    </div>
    </div>
    	
		
		
		
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <div  class="chat-inputuser">      
      <form>
        <input   type="text" id="chat-inputuser" placeholder="Send a message..."/>
	
      <button type="submit" class="chat-submituser" id="chat-submituserb"><i class='fa fa-send' style='font-size:24px;'> </i></button>
      </form>      
     </div>
	 
  </div>
  </div>
</main>





<script>
$(function() {
  var INDEX = 0; 
  $("#chat-submituserb").click(function(e) {
    e.preventDefault();
    var msg = $("#chat-inputuser").val(); //amik value daripd user input
    if(msg.trim() == ''){ //kalau input null return false
      return false;
    }
    generate_message(msg, 'self'); // panggil function generate_message kat bawah tu (self-kanan)
    var buttons = [
        {
          name: 'Existing User',
          value: 'existing'
        },
        {
          name: 'New User',
          value: 'new'
        }
      ];
    setTimeout(function() {      
      generate_message_reply(msg, 'user');  // panggil function generate_message kat bawah tu (user-kiri)
    }, 1000)
    
  })
  
  function generate_message(msg, type) {
    INDEX++;
    var str="";
    str += "<div id='cm-msg-"+INDEX+"' class=\"chat-msg "+type+"\">";
    str += "          <span class=\"msg-avatar\">";
    str += "            <img src=\"images/happy.png\">";
    str += "          <\/span>";
    str += "          <div class=\"cm-msg-text\">";
    str += msg;
    str += "          <\/div>";
    str += "        <\/div>";
    $(".chat-logs").append(str);
    $("#cm-msg-"+INDEX).hide().fadeIn(300);
    if(type == 'self'){
     $("#chat-inputuser").val(''); 
    }    
    $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight}, 1000);    
  }  
  
  
  function generate_message_reply(msg, type) {
    INDEX++;
    var str="";
    str += "<div id='cm-msg-"+INDEX+"' class=\"chat-msg "+type+"\">";
    str += "          <span class=\"msg-avatar\">";
    str += "            <img src=\"images/chatbot.png\">";
    str += "          <\/span>";
    str += "          <div class=\"cm-msg-text\">";
    str += msg;
    str += "          <\/div>";
    str += "        <\/div>";
    $(".chat-logs").append(str);
    $("#cm-msg-"+INDEX).hide().fadeIn(300);
    if(type == 'self'){
     $("#chat-inputuser").val(''); 
    }    
    $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight}, 1000);    
  }  
  
  
  
  
  
  
  $(document).delegate(".chat-btn", "click", function() {
    var value = $(this).attr("chat-value");
    var name = $(this).html();
    $("#chat-inputuser").attr("disabled", false);
    generate_message(name, 'self');
  })
  
  $("#chat-circle").click(function() {    
    $("#chat-circle").toggle('scale');
    $(".chat-box").toggle('scale');
  })
  
  $(".chat-box-toggle").click(function() {
    $("#chat-circle").toggle('scale');
    $(".chat-box").toggle('scale');
  })
  
})
</script>

<!---section first--->
<?php include ("slideshow.php") ?>

<!---section first--->
<?php include ("section.php") ?>

<!---next section--->
<?php include ("next.php") ?>

<!---footer section--->
<?php include ("footer.php") ?>


</body>
</html>
