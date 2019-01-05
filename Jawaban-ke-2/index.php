
<?php
	$pass = "";
	$pass_komfrim = "";
	$passErr = "";
	$valid_panjang_pass = true;
    $valid_pass_konfirm = true;
    $valid_ch = true;
	$valid_panjang_pass_msg = "";
	$valid_pass_konfirm_msg = "";
	$valid_ch_msg = "";
	// Cek form sudah di klik submit/belum
	if(isset($_POST['submit'])){
		$pass = trim($_POST['pass']);
		$pass_komfrim = trim($_POST['passKonfrim']);
		
		// Cek input kosong
		
		if(empty($pass)){
			$passErr = "Password masih kosong.<br>";
		}
		
		// Kode cek username hanya boleh huruf a-z dan A-Z
		
		
		// Kode validasi nama hanya boleh huruf a-z, A-Z, dan spasi
	
		// Cek minimal karakter password (minimal 8 digit)
		if(strlen($pass) <= 8){
			$valid_panjang_pass = false;
			$valid_panjang_pass_msg = "Password minimal 8 digit.<br>";
        }
        
        if(!preg_match("/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/",$pass)){
			$valid_ch = false;
			$valid_ch_msg = "Harus Terdapat Huruf Besar, Kecil, Karakter, & Angka.<br>";
		}
		
		// cek konfirmasi password sama atau tidak
		if($pass != $pass_komfrim){
			$valid_pass_konfirm = false;
			$valid_pass_konfirm_msg = "Password konfirmasi tidak sama.<br>";
		}
		
		// Cek semua input sudah diisi apa belum
		if( !empty($pass) and $valid_panjang_pass and $valid_pass_konfirm){
			// Disini tempat menulis kode (semua syarat sudah input terpenuhi).
			// Misalnya menulis kode query ke database
			echo "Password Yang Di Masukkan Benar.<br>";
		}
		
	}
?>

<h3>Validasi Password</h3>

<form action="index.php" method="post">
	Password : <input type="password" name="pass" value="<?php echo $pass; ?>"><br>
		<?php echo $passErr.$valid_panjang_pass_msg.$valid_ch_msg; ?>
	Konfirm Pass : <input type="password" name="passKonfrim" value="<?php echo $pass_komfrim; ?>"><br>
		<?php echo $valid_pass_konfirm_msg; ?>
	<input type="submit" name="submit" value="Register">
</form>
