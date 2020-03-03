<?php
if($_POST['submit']){
	$admin = 'muhammadagungputraaa@gmail.com'; //ganti email dg email admin (email penerima pesan)
	
	$nama	= htmlentities($_POST['nama']);
	$nomor	= htmlentities($_POST['nomor']);
	$tanggal	= htmlentities($_POST['tanggal']);

    $message = "Mohon untuk menyetujui dokumen Form 3D dari $nama dengan Nomor $nomor dan tanggal $tanggal, Terima Kasih. "; 


	
	// create email headers
$headers = 'From: '.$nama."\r\n".
'Reply-To: '.$nama."\r\n" .
'X-Mailer: PHP/' . phpversion();

	
	if(mail($admin, $nama,     $message, $headers)){
		echo 'SUCCESS: Pesan anda berhasil di kirim. <a href="index.html">Kembali</a>';
	}else{
		echo 'ERROR: Pesan anda gagal di kirim silahkan coba lagi. <a href="index.php">Kembali</a>';
	}
}
?>

