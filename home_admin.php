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
<link rel="stylesheet" href="./febe/style.css" type="text/css" media="screen" charset="utf-8">
    
    <script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
    <script src="./js/application.js" type="text/javascript" charset="utf-8"></script>
<style type="text/css">
<!--
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
-->
</style>
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
	<center>
	 <div id="content">
<div style="width:300px; margin:0 auto; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:10%;">
  <div style="height:40px; margin-bottom:10px;">
    <div style="float:left; margin-left:10px; margin-top:10px; color:black"><strong>Welcome</strong><?php echo $_SESSION['email'];?></div>
  </div>
  <div align="center"><a href="vieworders.php"><img src="images/84.png" border="0" style="padding:5px;" title="view all orders" /></a><br />
    <a href="addproduct.php"><img src="images/78.png" border="0" style="padding:5px;" title="Add products" /></a></div>
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
</div>