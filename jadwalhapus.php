<?php
if(isset($_GET['id']) && $_GET['id'] != "") {

	$del = mysql_query("DELETE FROM `data_jadwal` WHERE `id_jadwal` = '".$_GET['id']."'");

	echo "<script>alert('Data berhasil terhapus'); location.href='?mod=jadwal';</script";
}
?>