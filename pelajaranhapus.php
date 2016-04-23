<?php
if(isset($_GET['id']) && $_GET['id'] != "") {

	$del = mysql_query("DELETE FROM `data_pelajaran` WHERE `kode_pelajaran` = '".$_GET['id']."'");

	echo "<script>alert('Data berhasil terhapus'); location.href='?mod=pelajaran';</script";
}
?>