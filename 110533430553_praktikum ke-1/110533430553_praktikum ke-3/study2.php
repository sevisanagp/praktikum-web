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
		<input type="checkbox" name="kartun[]" value="Sponge Bob"
			<?php
				if ($_POST['kartun'] == 'Sponge Bob'){
				echo 'checked="checked"';
				}
			?>/>Sponge Bob 
			
			<input type="checkbox" name="kartun[]" value="Sinchan"
			<?php
				if ($_POST['kartun'] == 'Sinchan'){
				echo 'checked="checked"';
				}
			?>/>Sinchan
			
			<input type="checkbox" name="kartun[]" value="Conan"
			<?php
				if ($_POST['kartun'] == 'Conan'){
				echo 'checked="checked"';
				}
			?>/>Conan
			
			<input type="checkbox" name="kartun[]" value="Doraemon"
			<?php
				if ($_POST['kartun'] == 'Doraemon'){
				echo 'chekced="chekced"';
				}
			?>/>Doraemon
			
			<input type="checkbox" name="kartun[]" value="Dragon Ball"
			<?php
				if ($_POST['kartun'] == 'Dragon Ball'){
				echo 'chekced="chekced"';
				}
			?>/>Dragon Ball
			
			<input type="checkbox" name="kartun[]" value="Naruto"
			<?php
				if ($_POST['kartun'] == 'Naruto'){
				echo 'chekced="chekced"';
				}
			?>/>Naruto
		
		<br />
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