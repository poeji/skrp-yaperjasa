<?php
if(isset($_POST['submit']) && $_POST['submit'] == "submit") {

//hapus data lama
$del = mysql_query("DELETE FROM `nilai_sikap` WHERE nip = '".$_POST['nip']."' AND kode_pelajaran = '".$_POST['kode_pelajaran']."' 
  AND kode_kelas = '".$_POST['kode_kelas']."' AND tahun_ajaran = '".$_POST['tahun_ajaran']."' AND semester = '".$_POST['semester']."'");

foreach($_POST['nis'] as $i => $nis) 
{ 
  // Get values from post.
  $kode_pelajaran = $_POST['kode_pelajaran'];
  $kode_kelas = $_POST['kode_kelas'];
  $tahun_ajaran = $_POST['tahun_ajaran'];
  $nip = $_POST['nip'];
  $semester = $_POST['semester'];
  $nis = mysql_real_escape_string($nis);
  $ob = mysql_real_escape_string($_POST['ob'][$i]);
  $ant = mysql_real_escape_string($_POST['ant'][$i]);
  $ds = mysql_real_escape_string($_POST['ds'][$i]);
  $jg = mysql_real_escape_string($_POST['jg'][$i]);

  // Add to database
  $sql = "INSERT INTO `nilai_sikap`
            (`tgl_input`,
             `tahun_ajaran`,
             `nip`,
             `nis`,
             `kode_pelajaran`,
             `kode_kelas`,
             `observasi`,
             `antarteman`,
             `dirisendiri`,
             `jurnalguru`,
			 semester)
VALUES (NOW(),
        '$tahun_ajaran',
        '$nip',
        '$nis',
        '$kode_pelajaran',
        '$kode_kelas',
        '$ob',
        '$ant',
        '$ds',
        '$jg',
		'$semester')";
  
  //echo $sql."<hr>";
  $result = mysql_query($sql);
} 

echo "<script>alert('Data berhasil tersimpan'); location.href='?mod=nilaisikap';</script";

}
?>