<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-trransitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<html>
<head>
   <title>Form LOG IN</title>
</head>

<body onLoad="document.form1.user.focus();">
	
<style type="text/css">
#apDiv1 {
    position:absolute;
    width:373px;
    height:330px;
    z-index:1;
    left: 441px;
    top: 62px;
    background-color: #9896b1;
    border: 2px solid Black;
}
#apDiv3 {
    position:absolute;
    width:80px;
    height:25px;
    z-index:2;
    left: 150px;
    top: 250px;
	background-color: #dbe3e7e
}
.style3 {
    font-size: 10px;
    font-weight: bold;
}
#apDiv2 {
    position:absolute;
    width:412px;
    height:115px;
    z-index:2;
    top: 0px;
    left: 2px;
}
#header{
    width:373px;
    height:98px;  
}
#footer{
    width:373px;
    height:40px;
}
body {
    background-color: #6eb7e1;
}
#apDiv4 {
    position:absolute;
    width:409px;
    height:221px;
    z-index:2;
    left: 426px;
    top: 411px;
}
</style>
	
	<script type="text/javascript">
		function check()
		{
			if(form1.user.value == "")
			{
				alert('Masukkan Username');
				document.form1.user.focus();
				return false;
			}
			else if(form1.pass.value=="")
			{    
				alert('Masukkan Password');
				document.form1.pass.focus();
				return false;
			}    
		return true;
		}

		function Huruf(evt) 
		{
			evt = (evt) ? evt : window.event	
			var charCode = (evt.which) ? evt.which : evt.keyCode
			if ((charCode > 31 && charCode < 65) || (charCode > 90 && charCode < 97) || charCode > 122) {
				alert('Masukkan User Name dan Password Harus Berupa Huruf ');
				return false;
			}
			return true;
		}
	</script>

<form name="form1" action="<?php $_SERVER['PHP_SELF'];?>"  method="post" onsubmit="return check(this)">
<div id="apDiv1">
  <div id="header">
    <br>
  </div>
  <div>
    <div align="center"><strong><br>User Name :</strong>    
    <br>
    <input type="text" name="user" size="35" value="" title="Input berupa harus huruf" autocomplete="off" onKeyPress="return Huruf(event)">
    <br>
    <br>
    <strong><i>Password : </i></strong>  
    <br>
    <input type="password" name="pass" size="35" title="Input berupa harus huruf" autocomplete="off" onKeyPress="return Huruf(event)">
    <br>
    <br>
    </div>
  </div>
  <br>
    <div id="apDiv3">
     <input type="submit" name="submit" value="LOG IN" >
    </div>
     <br>
  </div>
</form>

<div id="apDiv4">
<?php

if(is_string($_POST['user']) AND ($_POST['pass'])) 
{    
    if (($_POST['user']=='username')AND($_POST['pass']=='password'))
    {
        echo 'LOG IN BERHASIL, Anda Masuk Ke Halaman Administrator';
        echo '<br><br>Selamat Datang Admin';
    }
    else 
    {
        echo "<script>alert ('Terjadi Kesalahan Saat Memasukkan Username dan Password');</script>";
    }
}

?>
</div>
</body>
</html>