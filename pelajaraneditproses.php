<?php
if(isset($_POST['submit']) && $_POST['submit'] == "submit") {

$kelas = implode(',', $_POST['kelas_pelajaran']);

$q = mysql_query("UPDATE `data_pelajaran`
SET 
  `kode_pelajaran` = '$_POST[kode_pelajaran]',
  `nama_pelajaran` = '$_POST[nama_pelajaran]',
  `singk_pelajaran` = '$_POST[singk_pelajaran]',
  `kelas_pelajaran` = '$kelas',
  `id_jurusan` = '$_POST[id_jurusan]'
WHERE `kode_pelajaran` = '$_POST[kode_pelajaran]'");


echo "<script>alert('Data berhasil tersimpan'); location.href='?mod=pelajaran';</script";

}
?>