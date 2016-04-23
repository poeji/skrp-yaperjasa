<?php
session_start();
include "config/koneksi.php";
function hari($n) {
	if($n==1) {
		return "Senin";
	} elseif($n==2) {
		return "Selasa";
	} elseif($n==3) {
		return "Rabu";
	} elseif($n==4) {
		return "Kamis";
	} elseif($n==5) {
		return "Jumat";
	} elseif($n==6) {
		return "Sabtu";
	}

}

function jam($n) {
	if($n==1) {
		return "06:30 - 07:15";
	} elseif($n==2) {
		return "07:15 - 08:00";
	} elseif($n==3) {
		return "08:00 - 08:45";
	} elseif($n==4) {
		return "08:45 - 09:30";
	} elseif($n==5) {
		return "10:00 - 10:45";
	} elseif($n==6) {
		return "10:45 - 11:30";
	} elseif($n==7) {
		return "11:30 - 12:45";
	} elseif($n==8) {
		return "12:15 - 13:00";
	}

}
?>
<style type="text/css">
<!--
a:link {
	color: #0000FF;
	text-decoration: none;
}
a:visited {
	color: #0000FF;
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
	color: #FF0000;
}
.menu a:link {
	color: #0000FF;
	text-decoration: none;
}
.menu a:visited {
	color: #0000FF;
	text-decoration: none;
}
.menu a:hover {
	text-decoration: underline;
	color: #FF0000;
}
.menu a:active {
	text-decoration: none;
}
-->
</style>
<link href="css/tabel.css"  rel="stylesheet" />
<title>Data Jadwal <?php echo $_SESSION['nama']; ?></title>
<body  onLoad="window.print();">
<td align="center"><img src="images/atas.jpg" width="691"></td>
<hr style="color:#000000">
<h3>Data Jadwal Mengajar <?php echo $_SESSION['nama']; ?></h3>

						<table class="tabel">							  <tr>
								  <td>No</td>
                                  <td>Hari</td>
								  <td>Jam</td>
								  <td>Kelas</td>
								  <td>Pelajaran</td>
								  <td>Guru</td>
								  <td>Angkatan</td>
							  </tr>
						  <?php
						  		$no = 1;
						  		$q = mysql_query("SELECT j.*, g.`nama_guru`, k.`nama_kelas`, p.`nama_pelajaran` FROM `data_jadwal` j
LEFT JOIN `data_guru` g ON g.`nip` = j.`nip`
LEFT JOIN `data_kelas` k ON k.`kode_kelas` = j.`kode_kelas`
LEFT JOIN `data_pelajaran` p ON p.`kode_pelajaran` = j.`kode_pelajaran`
where g.nip = '".$_SESSION['userid']."'
ORDER BY j.`hari`, j.`jam` ASC");
						  		while($d = mysql_fetch_array($q)) {
						  ?>
							<tr>
								<td class="center"><?php echo $no; ?></td>
                                <td class="center"><?php echo hari($d['hari']); ?></td>
								<td class="center"><?php echo jam($d['jam']); ?></td>
								<td class="center"><?php echo $d['nama_kelas']; ?></td>
								<td class="center"><?php echo $d['nama_pelajaran']; ?></td>
								<td class="center"><?php echo $d['nama_guru']; ?></td>
                                <td class="center"><?php echo $d['thn_ajaran']; ?></td>
							</tr>
							<?php $no++; } ?>
					  </table>        