<style>

body,html {
  background-color:#353b87;
  margin:0;
  font-size: 15px;
}

.picture{
	background-repeat: no-repeat;
	background-size: 1700px 400px;
}


/*---------------------
	Chatbox Section
-----------------------*/
#center-text {          
  display: flex;
  flex: 1;
  flex-direction:column; 
  justify-content: center;
  align-items: center;  
  height:100%;
  color:white; 
}

#chat-circle {
  position: fixed;
  bottom: 30px;
  right: 30px;
  background: #BF2024;
  width: 70px;
  height: 70px;  
  border-radius: 50%;
  color: white;
  cursor: pointer;
  box-shadow: 0px 3px 16px 0px rgba(0, 0, 0, 0.6), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
  z-index: 10;
}

.btn#my-btn {
    background: white;
    padding-top: 13px;
    padding-bottom: 12px;
    border-radius: 45px;
    padding-right: 40px;
    padding-left: 40px;
    color: #5865C3;
}

#chat-overlay {
    background: rgba(255,255,255,0.1);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    display: none;
}


#chat-inputuser {
  
  background: #f4f7f9;
  width:20%; 
  position:fixed;
  right:75px;
  bottom:55px;  
  height:48px;  
  padding-top:10px;
  padding-right:70px;
  padding-bottom:13px;
  padding-left:5px;
  border:none;
  resize:none;
  outline:none;
  border:3px solid #B1072B;
  color:#888;
  /*
  background: #f4f7f9;
  width:100%; 
  position:fixed;
  height:25px;  
  padding-top:10px;
  padding-right:50px;
  padding-bottom:9px;
  padding-left:5px;
  border:none;
  resize:none;
  outline:none;
  border:3px solid #B1072B;
  color:#888;
  */
  border-bottom-right-radius:5px;
  border-bottom-left-radius:5px;
  border-top-right-radius:5px;
  border-top-left-radius:5px;
  overflow:hidden;  
}
#chat-inputuser > form {
    margin-bottom: 0;
}
#chat-inputuser::-webkit-inputuser-placeholder { /* Chrome/Opera/Safari */
  color: #ccc;
}
#chat-inputuser::-moz-placeholder { /* Firefox 19+ */
  color: #ccc;
}
#chat-inputuser:-ms-inputuser-placeholder { /* IE 10+ */
  color: #ccc;
}
#chat-inputuser:-moz-placeholder { /* Firefox 18- */
  color: #ccc;
}
.chat-submituser {  
  position:absolute;
  bottom:10px;
  right:10px;
  background: transparent;
  box-shadow:none;
  border:none;
  border-radius:50%;
  color:#B1072B;
  width:35px;
  height:35px;  
}
 
 
.chat-logs {
  padding:15px; 
  height:600px;
  overflow-y:scroll;
}

.chat-logs::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	background-color: #F5F5F5;
}

.chat-logs::-webkit-scrollbar
{
	width: 5px;  
	background-color: #F5F5F5;
}

.chat-logs::-webkit-scrollbar-thumb
{
	background-color: #0C0103;
}

.chat-msg.user > .msg-avatar img {
  width:45px;
  height:45px;
  border-radius:50%;
  float:left;
  width:15%;
}
.chat-msg.self > .msg-avatar img {
  width:45px;
  height:45px;
  border-radius:50%;
  float:right;
  width:15%;
  /*fa fa-user-circle-o;*/
  
}
.cm-msg-text {
  background:#CEC8C9;
  padding:10px 15px 10px 15px;  
  color:black;
  max-width:75%;
  float:left;
  margin-left:10px; 
  position:relative;
  margin-bottom:20px;
  border-radius:30px;
}

.chat-msg {
  clear:both;    
}
.chat-msg.self > .cm-msg-text {  
  float:right;
  margin-right:10px;
  background: #F7B234;
  color:black;
}
.cm-msg-button>ul>li {
  list-style:none;
  float:left;
  width:50%;
}
.cm-msg-button {
    clear: both;
    margin-bottom: 70px;
}

.msger-buttonluar {
  background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 2px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 12px;
  position: fixed;
  bottom: 40px;
  right: 100px;  
  z-index: 10;  
}

.buttonluar 
{
  background-color: white; 
  color: black; 
  border: 3px solid #910D2F;
}

.buttonluar:hover 
{
  background-color: #E12D5A;
  color: white;
}


.chat-box-header {
  background: #B1072B;
  height:45px;
  border-top-left-radius:5px;
  border-top-right-radius:5px; 
  color:white;
  text-align:center;
  font-size:20px;
  padding-top:5px;
}

.chat-box { 
  /*position: relative;*/
  z-index: 10;
  display:none;
  background: #efefef;
  position:fixed;
  right:30px;
  bottom:50px;  
  width:400px;
  height:700px;
  max-width:100vw;
  max-height:100vh;
  border-radius:5px;  
/*   box-shadow: 0px 5px 35px 9px #464a92; */
  box-shadow: 0px 5px 35px 9px #ccc;
}
.chat-box-toggle {
  float:right;
  margin-right:15px;
  cursor:pointer;
}
.chat-box-body {
  position: relative;  
  height:600px;
  
  border:1px solid #ccc;  
  overflow: hidden;
  
}
.chat-box-body:after {
  content: "";
  background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDIwMCAyMDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTAgOCkiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+PGNpcmNsZSBzdHJva2U9IiMwMDAiIHN0cm9rZS13aWR0aD0iMS4yNSIgY3g9IjE3NiIgY3k9IjEyIiByPSI0Ii8+PHBhdGggZD0iTTIwLjUuNWwyMyAxMW0tMjkgODRsLTMuNzkgMTAuMzc3TTI3LjAzNyAxMzEuNGw1Ljg5OCAyLjIwMy0zLjQ2IDUuOTQ3IDYuMDcyIDIuMzkyLTMuOTMzIDUuNzU4bTEyOC43MzMgMzUuMzdsLjY5My05LjMxNiAxMC4yOTIuMDUyLjQxNi05LjIyMiA5LjI3NC4zMzJNLjUgNDguNXM2LjEzMSA2LjQxMyA2Ljg0NyAxNC44MDVjLjcxNSA4LjM5My0yLjUyIDE0LjgwNi0yLjUyIDE0LjgwNk0xMjQuNTU1IDkwcy03LjQ0NCAwLTEzLjY3IDYuMTkyYy02LjIyNyA2LjE5Mi00LjgzOCAxMi4wMTItNC44MzggMTIuMDEybTIuMjQgNjguNjI2cy00LjAyNi05LjAyNS0xOC4xNDUtOS4wMjUtMTguMTQ1IDUuNy0xOC4xNDUgNS43IiBzdHJva2U9IiMwMDAiIHN0cm9rZS13aWR0aD0iMS4yNSIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIi8+PHBhdGggZD0iTTg1LjcxNiAzNi4xNDZsNS4yNDMtOS41MjFoMTEuMDkzbDUuNDE2IDkuNTIxLTUuNDEgOS4xODVIOTAuOTUzbC01LjIzNy05LjE4NXptNjMuOTA5IDE1LjQ3OWgxMC43NXYxMC43NWgtMTAuNzV6IiBzdHJva2U9IiMwMDAiIHN0cm9rZS13aWR0aD0iMS4yNSIvPjxjaXJjbGUgZmlsbD0iIzAwMCIgY3g9IjcxLjUiIGN5PSI3LjUiIHI9IjEuNSIvPjxjaXJjbGUgZmlsbD0iIzAwMCIgY3g9IjE3MC41IiBjeT0iOTUuNSIgcj0iMS41Ii8+PGNpcmNsZSBmaWxsPSIjMDAwIiBjeD0iODEuNSIgY3k9IjEzNC41IiByPSIxLjUiLz48Y2lyY2xlIGZpbGw9IiMwMDAiIGN4PSIxMy41IiBjeT0iMjMuNSIgcj0iMS41Ii8+PHBhdGggZmlsbD0iIzAwMCIgZD0iTTkzIDcxaDN2M2gtM3ptMzMgODRoM3YzaC0zem0tODUgMThoM3YzaC0zeiIvPjxwYXRoIGQ9Ik0zOS4zODQgNTEuMTIybDUuNzU4LTQuNDU0IDYuNDUzIDQuMjA1LTIuMjk0IDcuMzYzaC03Ljc5bC0yLjEyNy03LjExNHpNMTMwLjE5NSA0LjAzbDEzLjgzIDUuMDYyLTEwLjA5IDcuMDQ4LTMuNzQtMTIuMTF6bS04MyA5NWwxNC44MyA1LjQyOS0xMC44MiA3LjU1Ny00LjAxLTEyLjk4N3pNNS4yMTMgMTYxLjQ5NWwxMS4zMjggMjAuODk3TDIuMjY1IDE4MGwyLjk0OC0xOC41MDV6IiBzdHJva2U9IiMwMDAiIHN0cm9rZS13aWR0aD0iMS4yNSIvPjxwYXRoIGQ9Ik0xNDkuMDUgMTI3LjQ2OHMtLjUxIDIuMTgzLjk5NSAzLjM2NmMxLjU2IDEuMjI2IDguNjQyLTEuODk1IDMuOTY3LTcuNzg1LTIuMzY3LTIuNDc3LTYuNS0zLjIyNi05LjMzIDAtNS4yMDggNS45MzYgMCAxNy41MSAxMS42MSAxMy43MyAxMi40NTgtNi4yNTcgNS42MzMtMjEuNjU2LTUuMDczLTIyLjY1NC02LjYwMi0uNjA2LTE0LjA0MyAxLjc1Ni0xNi4xNTcgMTAuMjY4LTEuNzE4IDYuOTIgMS41ODQgMTcuMzg3IDEyLjQ1IDIwLjQ3NiAxMC44NjYgMy4wOSAxOS4zMzEtNC4zMSAxOS4zMzEtNC4zMSIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utd2lkdGg9IjEuMjUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIvPjwvZz48L3N2Zz4=');
  opacity: 0.1;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  height:100%;
  position: absolute;
  z-index: -1;   
}


.msger-buttonleft2 {
  background-color: #F7B234 ;/*button after user insert*/
  border: none;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 12px;
}

.button2 
{
  background-color: white; 
  color: black; 
  border: 3px solid #B1072B;
}

.button2:hover 
{
  background-color:#F9E79F;
  color: black;
} 
/*phone*/
@media only screen and (max-width: 767px) {
	.chat-box-body{
		padding-left:20px;
		
	}
	.chat-box-header {
		padding-left:48px;
	}
	.chat-box {
	  position:fixed;
	  right:30px;
	  bottom:50px;  
	  width:350px;
	  height:700px;
	}
	#chat-inputuser {
	  width:62%; 
	  position:fixed;
	  right:75px;
	  bottom:55px;  
	  height:50px;  
	}
}


 


/*---------------------
	Typing Section
-----------------------*/
.typing-indicator {
    background-color: #CEC8C9;
    width: 120px;
	
    border-radius: 20%;
    padding: 1rem 1.5rem 2rem;
    margin: 0 auto;
    position: relative;
    animation: 3s pulse infinite ease-out;
	
}
/*bahagian butang yang mcm typing tu*/
.typing-indicator::before,
.typing-indicator::after {
     content: '';
     position: absolute;
     bottom: 2px;
     left: -15px;
     height: 15px;
     width: 15px;
     border-radius: 50%;
     background-color: #CEC8C9;
 }
 
.typing-indicator::after {
     height: 10px;
     width: 10px;
     left: -26px;
     bottom: 2px;
 }

/*bahagian butang yang mcm typing tu*/

.typing-indicator span {
	
    height: 15px;
    width: 15px;
    float: left;
    margin: 0 1px;
    background-color: #B1072B;
    display: block;
    border-radius: 50%;
    opacity: 0.4;
}

.typing-indicator span:nth-child(1)
{
    animation: 1s blink infinite .3333s;
}

.typing-indicator span:nth-child(2)
{
    animation: 1s blink infinite .6666s;
}

.typing-indicator span:nth-child(3)
{
    animation: 1s blink infinite .9999s;
}

@keyframes blink
{
    50%
    {
        opacity: 1;
    }
}

@keyframes pulse
{
    50% {
        transform: scale(1.05);
    }
}

/*END---icon yng bentuk typing sebelum keluar massege*/








</style>