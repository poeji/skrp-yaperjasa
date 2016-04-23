<?php
if(isset($_GET['id']) && $_GET['id'] != "") {

	$del = mysql_query("DELETE FROM `data_belajar` WHERE `id_belajar` = '".$_GET['id']."'");

	echo "<script>alert('Data berhasil terhapus'); location.href='?mod=kurikulum';</script>";
}
?>