<?php
$q = mysql_fetch_array(mysql_query("SELECT * FROM `data_siswa` WHERE nis = '".$_SESSION['userid']."'"));

						$kodekelas = $q['kode_kelas'];
			if ($kodekelas == "AK01" || $kodekelas == "AP11" || $kodekelas == "AP12" || $kodekelas == "AP13" || $kodekelas == "AP14"){
			
			$tekstsemester = "<a class='btn btn-info' href='?mod=datanilaisiswa&semester=1' title='Lihat Detail Nilai sikap'>Semester 1</a> | <a class='btn btn-info' href='?mod=datanilaisiswa&semester=2' title='Lihat Detail Nilai sikap'>Semester 2</a>";
		}
		else if ($kodekelas == "AK02" || $kodekelas == "AP21" || $kodekelas == "AP22" || $kodekelas == "AP23" || $kodekelas == "AP24"){
			$tekstsemester = "<a class='btn btn-info' href='?mod=datanilaisiswa&semester=3' title='Lihat Detail Nilai sikap'>Semester 3</a> | <a class='btn btn-info' href='?mod=datanilaisiswa&semester=4' title='Lihat Detail Nilai sikap'>Semester 4</a>";
		}
		else if ($kodekelas == "AK03" || $kodekelas == "AP31" || $kodekelas == "AP32" || $kodekelas == "AP33" || $kodekelas == "AP34"){
			$tekstsemester = "<a class='btn btn-info' href='?mod=datanilaisiswa&semester=5' title='Lihat Detail Nilai sikap'>Semester 5</a> | <a class='btn btn-info' href='?mod=datanilaisiswa&semester=6' title='Lihat Detail Nilai sikap'>Semester 6</a>";
		}
?>
<p>&nbsp;</p>
<table width="100%" border="0">
  <tr>
    <td width="11%"><strong>Pilih Semester</strong></td>
    <td width="1%"><strong>:</strong></td>
    <td width="88%"><?php echo $tekstsemester; ?></td>
  </tr>
</table>
