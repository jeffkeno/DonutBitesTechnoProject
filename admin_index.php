<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Donut Bites</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />

<link rel="stylesheet" href="css/jquery.jcarousel.css" type="text/css" media="all" />

<!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
<!--<link rel="shortcut icon" href="img/icon.png" />-->

 <style>
#pageshare {position:fixed; bottom:20%; right:50px; float:center; border: 3px solid red; border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;background-color:#eff3fa; background-image:url( url(css/images/body-bg.gif)); background-repeat:repeat;padding:0 0 20px
0;z-index:10;}
#pageshare .sbutton {float:center;clear:both;margin:10px 10px 0 8px;}
.FBConnectButton_Small .FBConnectButton_Text {padding:5px 5px 5px !important;-moz-border-radius:3px;-webkit-border-radius:3px;font-size:10px;}
  </style>
 <script type="text/javascript">
window.onkeydown=function(e) {
               if (e.keyCode === 116 ) {
                       e.keyCode = 0;
                       e.returnValue = false;                  
                       return false;
                   }

               }
</script>
<script>
 var isNS = (navigator.appName == "Netscape") ? 1 : 0;
  if(navigator.appName == "Netscape") 
     document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
  function mischandler(){
   return false;
 }
  function mousehandler(e){
 	var myevent = (isNS) ? e : event;
 	var eventbutton = (isNS) ? myevent.which : myevent.button;
    if((eventbutton==2)||(eventbutton==3)) return false;
 }
 document.oncontextmenu = mischandler;
 document.onmousedown = mousehandler;
 document.onmouseup = mousehandler;
  </script> 
<script type="text/javascript" src="b.js"></script>
<head>
  <script src="jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>

<script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
<script type="text/javascript">
function validateForm()
{

var y=document.forms["login"]["email"].value;
var a=document.forms["login"]["password"].value;
if ((y==null || y==""))
  {
  alert("you must enter your username");
  return false;
  }
  if ((a==null || a==""))
  {
  alert("you must enter your password");
  return false;
  }
 

}
</script>
<script type="text/javascript" src="css/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="css/js/jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="css/js/func.js"></script>
</head>
<body>
<div class="shell">
  <div class="border">
<div id="header">
      <div class="socials right">
        <ul>
   
        </ul>
      </div>
      <div class="cl">&nbsp;</div>
    </div>
    <div id="navigation">
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="contactus.php">Contact Info</a></li>
		
        <!-- <li><a rel="facebox" href=sendusmessage.php?>Send Us Message</a></li> -->
      </ul>
      <div class="cl">&nbsp;</div>
    </div>
	<br/><br/><br/><br/><br/><center>
	 <div id="content">
<div style="width:300px; margin:0 auto; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px;">
  <form id="form1" name="login" method="post" action="admin.php" onsubmit="return validateForm()">
  <div style=" font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;"> 
 
 
 <div style="float:left;"><strong>Administrator Login!</strong></div>
 
 
 </div>
  <table width="286" align="center" style ="color:black;">
  <tr>
    <td colspan="2">
	<div style="font-family:Arial, Helvetica, sans-serif; color:#FF0000; font-size:12px;"></div>
	</td>
  </tr>
  <tr>
    <td width="92"><div align="right">UserName</div></td>
    <td width="178"><input type="text" name="email" /></td>
  </tr>
  <tr>
    <td><div align="right">Password:</div></td>
    <td>
      <input type="password" name="password" />
    </td>
  </tr>

  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="login" /></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
   </div> 
   </center>
     
 <!--end main -->
 <div id="main">
      <div id="content" class="left">
        <div class="highlight">
         
      <div class="cl">&nbsp;</div>
    </div>
    <div class="shadow-l"></div>
    <div class="shadow-r"></div>
    <div class="shadow-b"></div>
  </div>
  <div id="footer">
   <p align="center">Donut Bites © 2015</p>
  </div>
</div>
</body>
</html>