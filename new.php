<?php
	//Start session
	session_start();
	
	
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
function validateForm()
{

var j=document.forms["abc"]["studentnum"].value;
var a=document.forms["abc"]["name"].value;
var b=document.forms["abc"]["surname"].value;
var d=document.forms["abc"]["email"].value;
var e=document.forms["abc"]["password"].value;
var f=document.forms["abc"]["ambot"].value;
var g=document.forms["abc"]["contacts"].value;

if ((j==null || j==""))
  {
  alert("you must enter your student #");
  return false;
  }
if ((a==null || a==""))
  {
  alert("you must enter your username");
  return false;
  }
if ((b==null || b==""))
  {
  alert("you must enter your password");
  return false;
  }
if ((d==null || d==""))
  {
  alert("you must enter your email address");
  return false;
  }
if ((e==null || e==""))
  {
  alert("you must enter your password");
  return false;
}
if ((f==null || f==""))
  {
  alert("Retype password");
  return false;
  }
if ((g==null || g==""))
  {
  alert("you must enter your contact number");
  return false;
}

if( e != f ) {
alert("Password does not match");
  return false;
}
var atpos=d.indexOf("@");
var dotpos=d.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=d.length)
  {
  alert("Not a valid e-mail address");
  return false;
  } 

}

$(document).ready(function(){
    
    //called when key is pressed in textbox
	$("#contact").keypress(function (e)  
	{ 
	  //if the letter is not digit then display error and don't type anything
	  if( e.which!=8 && e.which!=0 && (e.which<48 || e.which>57))
	  {
		//display error message
		$("#errmsg").html("Number Only").show().fadeOut("slow"); 
	    return false;
      }	
	});
	

  });
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
  <form id="form1" name="login" method="post" action="home.php" onsubmit="return validateForm()">
  <div style=" font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;"> 
 
 <div style="float:left;"><strong>Members Registration of Donut Bites </strong></div>

 
 
 </div>
  <table width="368" align="center">
  <tr>
    <td colspan="2"><div style="font-family:Arial, Helvetica, sans-serif; color:#FF0000; font-size:12px;"><?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?></div></td>
  </tr>
  	  <tr>
  <td width="120" valign="top"><div align="right">Student Num:</div></td>
        <td width="236"><input type="text" name="studentnum">
              <span class="style2"></span></td>
      </tr>
	  <tr>
  <td width="120" valign="top"><div align="right">Firstname:</div></td>
        <td width="236"><input type="text" name="name">
              <span class="style2"></span></td>
      </tr>
              <tr>
                <td valign="top"><div align="right">Lastname:</div></td>
                <td><input type="text" name="surname">
                  <span class="style2"></span></td>
              </tr>
			 
              <tr>
                <td valign="top"><div align="right">Email:</div></td>
                <td><input type="text" name="email">
                  <span class="style2"></span></td>
              </tr>
			  <tr>
                <td valign="top"><div align="right">Password:</div></td>
                <td><input type="password" name="password">
                  <span class="style2"></span></td>
              </tr>
              <tr>
                <td valign="top"><div align="right">Retype Password:</div></td>
                <td><input type="password" name="password2">
                  <span class="style2"></span></td>
              </tr>
              <tr>
                <td valign="top"><div align="right">Contact Number:</div></td>
                <td><input name="contacts" type="text" id="contacts" size="18">
                      <span style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FF0000; font-weight:bold;" id="errmsg"></span><span class="style2"></span></td>
        </tr>
              
 <tr>
                <td valign="top">&nbsp;</td>
        <td><input type="submit" value="Save"> <label>
                  <input type="reset" name="Reset" value="Clear" />
                </label></td>
      </tr>
</table>
</form>
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