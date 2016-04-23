<?php
if(isset($_POST['submit']) && $_POST['submit'] == "submit") {

$kelas = implode(',', $_POST['kelas_pelajaran']);

$q = mysql_query("INSERT INTO `data_pelajaran`
            (`kode_pelajaran`,
             `nama_pelajaran`,
             `singk_pelajaran`,
             `kelas_pelajaran`,
             `id_jurusan`)
VALUES ('$_POST[kode_pelajaran]',
        '$_POST[nama_pelajaran]',
        '$_POST[singk_pelajaran]',
        '$kelas',
        '$_POST[id_jurusan]')");


echo "<script>alert('Data berhasil tersimpan'); location.href='?mod=pelajaran';</script";

}
?>