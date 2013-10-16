<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KALKULATOR DENGAN PHP</title> <!-- Judul yang ditampilkan pada tab -->
</head>
<style type="text/css">

h1{
	color:#bc0000; 
	margin-left:100px; 
} <!-- Format judul tulisan "KALKULATOR DENGAN PHP" -->

h3{
	color:#eddada;
	margin-top:50px;
	position:fixed; 
	margin-left:22%;
} <!-- Format tulisan "Masukkan Angka" dalam textbox -->

.equal:hover{
	cursor:pointer; 
}

#bil1, #bil2, #hasil{
	height:40px;
	width:175px;
	font-size:18px; 
	color:#fbbbbb; 
} <!-- Format angka dalam textbox -->

#operator,#equal{
	height:40px;
	width:50px;
	font-size:25px;
} <!-- Format operator pada combobox -->

</style>

<body>
	<div id="kotak" align="center">
        <div id="judul" align="center">
    		<h1>KALKULATOR DENGAN PHP</h1>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            	<tr align="center" style="color:#0099FF;"> <!-- Format masukan angka pertama -->
                	<td width="10%" style="background:#666666"><input  id="bil1" type="number" name="bil1" 
                    value="<?php
							echo isset($_POST['bil1'])?$_POST['bil1'] : ''; 
						?>" required placeholder="Masukkan Angka" /></td> <!-- Perintah memasukkan angka pertama (bil1) beserta prefilling nya -->
                        
                    <td width="5%" style="background:#666666"> <!-- Format masukan operator -->
                    <select id="operator" name="operator"> <!-- Masukan operator berupa combobox -->
                    	<option></option>
                    	<option value="+" 
						<?php if (isset($_POST['operator']) && $_POST['operator']=='+')
						{
							echo "selected";
						} ?>>+</option> <!-- Operator tambah dan prefillingnya -->
                        <option value="-"  
						<?php if (isset($_POST['operator']) && $_POST['operator']=='-') 
						{
							echo "selected";
						} ?>>-</option> <!-- Operator kurang dan prefillingnya -->
                        <option value="*"  
						<?php if (isset($_POST['operator']) && $_POST['operator']=='*') 
						{
							echo "selected";
						} ?>>*</option> <!-- Operator kali dan prefillingnya -->
                        <option value="/"  
						<?php if (isset($_POST['operator']) && $_POST['operator']=='/')
						{
							echo "selected";
						} ?>>/</option <!-- Operator bagi dan prefillingnya -->
                    </select>
                    	
                    </td>
					<!-- Format masukan angka yang kedua -->
                    <td width="10%" style="background:#666666"><input id="bil2" type="number" name="bil2" 
					value="<?php
							echo isset($_POST['bil2'])?$_POST['bil2'] : '';
						?>" required placeholder="Masukkan Angka" /></td> <!-- Perintah memasukkan angka kedua (bil2) beserta prefilling nya -->
                    
					 <?php
					 	//kondisi bilangan masukan, jika berupa angka maka diberi penanda angka, jika bukan maka akan diberi nilai 0
                        if(isset($_POST['bil1']) or isset($_POST['bil2']) ){
                        $bil1 = $_POST['bil1']; 
                        $bil2 = $_POST['bil2']; 
                        }else{
                        $bil1 = "0"; 
                        $bil2 = "0";
                        } 
						//kondisi operator, jika salah satu pilihan yang disediakan maka akan diberi penanda, jika tidak maka diberi nilai 0
                        if(isset($_POST['operator'])){
                        $operator =$_POST['operator'];
                        }else{
                        $operator ="0";
                        }
                        switch($operator){
						case "+": //operasi menambah angka
                            $hasil = $_POST["bil1"] + $_POST["bil2"];
                        	break;
                        case "-": //operasi mengurangi angka
                            $hasil = $_POST["bil1"] - $_POST["bil2"];
                        	break;
                        case "*": //operasi mengalikan angka
                            $hasil = $_POST["bil1"] * $_POST["bil2"];
                        	break;
                        case "/": //operasi membagi angka
                            $hasil = $_POST["bil1"] / $_POST["bil2"];
                       		break;
						default : //nilai default jika masukan operator 0 maka hasilnya kosong (tampilan "Hasil")
							break;
                        }
                    ?>
                    
                    <td><input id="equal" type="submit" class="equal" value="=" name="equal" /></td>  <!-- Button submit -->
                    <td><input id="hasil" type="text" name="hasil" value="<?php echo $hasil;?>"placeholder="Hasil" /><!-- Textbox hasil perhitungan dan prefillingnya -->
					</td> 
                </tr>
            </form>
            </table>
    	</div>
    </div>
</body>
</html>
