<?php
if(isset($_POST['submit']) && $_POST['submit'] == "submit") {

$Q = mysql_query("INSERT INTO `data_guru`
            (`nip`,
             `nama_guru`,
             `tempat_lahir`,
             `tgl_lahir`,
             `jenis_kelamin`,
             `alamat`,
             `id_agama`,
             `st_menikah`,
             `tlp_rmh`,
             `hp`,
             `password`,
             `status_guru`)
VALUES ('$_POST[nip]',
        '$_POST[nama_guru]',
        '$_POST[tempat_lahir]',
        '$_POST[tanggal_lahir]',
        '$_POST[jenis_kelamin]',
        '$_POST[alamat]',
        '$_POST[agama]',
        '$_POST[st_menikah]',
        '$_POST[tlp_rmh]',
        '$_POST[hp]',
        '".md5($_POST['password'])."',
        '1')");	

echo "<script>alert('Data berhasil tersimpan'); location.href='?mod=guru';</script";

}
?>