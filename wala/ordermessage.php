<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="bootstrap.css" rel="stylesheet" type="text/css" />
</head>
<link re="stylesheet" href="bootstrap.css" />

<body>
<font face="Arial, Helvetica, sans-serif">

<form method="post" action="messagesent.php">
<input type="hidden" name="ids" value="1" />

 <font color="#CC0000" size="3">Send Us A Message<img src="images/comment.png" /> <br></font>
	You can send us here your feedbacks 
    <br />Note:  Cancellation of Orders will be ignore. If you have concerns with your orders please call us.
<table align="center">
<td width="281"><div align="left">Your Full Name:<br /> <input type="text" name="fname"  class="span5" value=""></div></td>
<font face="century gothic" size="3">
  <br />
  <tr><td></td></tr>
  <tr><td> Email Address </td></tr>     	  
  <tr><td><input type="email" name="email" value=""  class="span5" required="required"/></td></tr>
  <br />
  <tr><td></td></tr>
 <tr><td> Your Message</td></tr>
  	<tr><td><textarea name="msg" size="300"  class=" span6 uneditable-textarea"   required="required"></textarea></td></tr>
  </p>
  <p>
    <tr><td><button type="submit" class="btn btn-primary " value="Send" name="post">Submit</button><button type="reset" class="btn btn-danger " value="Send">Cancel</button></td></tr>
  </p>
    </form>
</table>


</body>
</html>