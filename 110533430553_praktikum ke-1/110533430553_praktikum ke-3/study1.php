<!DOCTYPE html 
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
 
<head> 
	<title>Data Seleksi Prefilling</title> 
</head> 
 
<body>

	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 
		Film Kartun Favorit
		<select name="kartun"> 
			<option value="Sponge Bob"
			<?php
				if ($_POST['kartun'] == 'Sponge Bob'){
				echo 'selected="selected"';
				}
			?>/>Sponge Bob 
			
			<option value="Sinchan"
			<?php
				if ($_POST['kartun'] == 'Sinchan'){
				echo 'selected="selected"';
				}
			?>/>Sinchan
			
			<option value="Conan"
			<?php
				if ($_POST['kartun'] == 'Conan'){
				echo 'selected="selected"';
				}
			?>/>Conan
			
			<option value="Doraemon"
			<?php
				if ($_POST['kartun'] == 'Doraemon'){
				echo 'selected="selected"';
				}
			?>/>Doraemon
			
			<option value="Dragon Ball"
			<?php
				if ($_POST['kartun'] == 'Dragon Ball'){
				echo 'selected="selected"';
				}
			?>/>Dragon Ball
			
			<option value="Naruto"
			<?php
				if ($_POST['kartun'] == 'Naruto'){
				echo 'selected="selected"';
				}
			?>/>Naruto
		</select>
		
		<input type="submit" name="Pilih" value="Pilih" /> 
	</form> 
 
	<?php 
		if (isset($_POST['Pilih'])) {
			$film = $_POST['kartun'];
			echo "Film Kartun Favorit Anda adalah: 
				<font color = blue><b>$film</b></font>"; 
	} 
	?> 
 
</body>
</html>