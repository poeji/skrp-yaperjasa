<?php
if(isset($_POST['submit']) && $_POST['submit'] == "submit") {

$totalnis = mysql_num_rows(mysql_query("select nis from data_siswa where nis = '".$_POST['nis']."'"));
if($totalnis > 0) {
	echo "<script>alert('NIS sudah ada, silahkan menggunaan NIS yang lainnya'); location.href='?mod=siswatambah';</script";	
} else {

list($buln,$tangl,$tahn)=explode("/",$_POST['tanggal_lahir']);

$Q = mysql_query("INSERT INTO `data_siswa`
            (`nis`,
             `nama_siswa`,
             `tempat_lahir`,
             `tanggal_lahir`,
             `alamat`,
             `agama`,
             `jenis_kelamin`,
             `nama_orangtua`,
             `telepon_orangtua`,
             `password`,
			 kode_kelas,
			 tahun,
             `status_siswa`)
VALUES ('$_POST[nis]',
        '$_POST[nama_siswa]',
        '$_POST[tempat_lahir]',
        '$tahn-$buln-$tangl',
        '$_POST[alamat]',
        '$_POST[agama]',
        '$_POST[jenis_kelamin]',
        '$_POST[nama_orangtua]',
        '$_POST[telepon_orangtua]',
        '".md5($_POST['password'])."',
		'$_POST[kode_kelas]',
		'$_POST[tahun_ajaran]',
        '1')");	

echo "<script>alert('Data berhasil tersimpan'); location.href='?mod=siswa';</script";
}
}
?>