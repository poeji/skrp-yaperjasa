<?php
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
<script>
function cetakjadwal(id) {
    window.open("cetakjadwalsiswa.php?id="+id, "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=500, left=500, width=700, height=800");
}
</script>
<h3>Data Jadwal</h3>
<a href="#" onClick="cetakjadwal(<?php echo $_SESSION['userid']; ?>)">Cetak Jadwal</a>
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
						  		$q = mysql_query("SELECT j.*, g.`nama_guru`, k.`nama_kelas`, p.`nama_pelajaran` 
						  			FROM `data_jadwal` j
LEFT JOIN `data_guru` g ON g.`nip` = j.`nip`
LEFT JOIN `data_kelas` k ON k.`kode_kelas` = j.`kode_kelas`
LEFT JOIN `data_pelajaran` p ON p.`kode_pelajaran` = j.`kode_pelajaran`
WHERE j.kode_kelas = '".$_SESSION['kode_kelas']."'
ORDER BY j.`hari`, j.`jam` ASC");
						  		while($d = mysql_fetch_array($q)) {
								$c = mysql_fetch_array(mysql_query("select * from data_belajar 
									where kode_pelajaran = '".$d['kode_pelajaran']."' 
									and kode_kelas = '".$d['kode_kelas']."' and thn_ajaran = '".$d['thn_ajaran']."'"));
								if(isset($c['id_belajar'])) {
								
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
							<?php $no++; } 
							 } ?>
					  </table>        