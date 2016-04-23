<?php
if(isset($_POST['submit']) && $_POST['submit'] == "submit") {

$d = mysql_fetch_array(mysql_query("select * from data_belajar where id_belajar = '".$_POST['idbelajar']."'"));

$Q = mysql_query("INSERT INTO `data_jadwal`
            (`nip`,
             `kode_kelas`,
             `kode_pelajaran`,
             `jam`,
             `hari`,
             `thn_ajaran`)
VALUES ('$d[nip]',
        '$d[kode_kelas]',
        '$d[kode_pelajaran]',
        '$_POST[jam]',
        '$_POST[hari]',
        '$d[thn_ajaran]')");	

echo "<script>alert('Data berhasil tersimpan'); location.href='?mod=jadwal';</script";

}
?>