<?php
if(isset($_POST['submit']) && $_POST['submit'] == "submit") {
	
	$nama_file      = $_FILES['struktur']['name'];
	$vdir_upload 	= "../images/";
  	$vfile_upload 	= $vdir_upload . $fupload_name;

  //Simpan gambar dalam ukuran sebenarnya
 // move_uploaded_file($_FILES["struktur"]["tmp_name"], $vfile_upload);	  
 
 move_uploaded_file($_FILES["struktur"]["tmp_name"], "../images/" . $_FILES["struktur"]["name"]);
	  
	  //print_r($_POST);
	  //echo "UPDATE `struktur` SET `struktur_title` = '$_POST[struktur_title]', `struktur` = '$nama_file' WHERE `id` = '1'";
	  //exit();
$qtmbhartk = mysql_query("UPDATE `struktur` SET `struktur_title` = '$_POST[struktur_title]', `struktur` = '$nama_file' WHERE `id` = '1'");

echo "<script>alert('Data berhasil tersimpan'); location.href='?mod=struktur';</script>";

} else { echo "<script>alert('Anda tidak di perkenankan ke halaman ini'); location.href='../index.html';</script>"; }
	  
?>