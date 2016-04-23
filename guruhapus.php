<?php
if(isset($_GET['id']) && $_GET['id'] != "") {

	$del = mysql_query("DELETE FROM `data_guru` WHERE `nip` = '".$_GET['id']."'");

	echo "<script>alert('Data berhasil terhapus'); location.href='?mod=guru';</script";
}
?>