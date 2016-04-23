<h3>Data Nilai Sikap</h3>

						<table class="tabel">
							  <tr>
								  <th>Kelas</th>
                                  <th>Mata Pelajaran</th>
                                  <th>Tahun Ajaran</th>
								  <th>Actions</th>
							  </tr>
						  <?php
$mintahun = (date("Y")-1)."-".date("Y");
$plustahun = (date("Y"))."-".(date("Y")+1);

						  		$q = mysql_query("SELECT p.`nama_pelajaran`, k.kode_kelas, p.kode_pelajaran, k.`nama_kelas`, b.`thn_ajaran`, b.nip FROM `data_belajar` b
LEFT JOIN `data_pelajaran` p ON p.`kode_pelajaran` = b.`kode_pelajaran`
LEFT JOIN `data_kelas` k ON k.`kode_kelas` = b.`kode_kelas`
WHERE thn_ajaran in ('$mintahun', '$plustahun') AND nip = '".$_SESSION["userid"]."'");
						  		while($d = mysql_fetch_array($q)) { 
								
								$kodekelas = $d['kode_kelas'];
			if ($kodekelas == "AK01" || $kodekelas == "AP11" || $kodekelas == "AP12" || $kodekelas == "AP13" || $kodekelas == "AP14"){
			
			$tekstsemester = "<a class='btn btn-info' href='?mod=nilaisikaptambahsubmit&kelas=$d[kode_kelas]&pelajaran=$d[kode_pelajaran]&tahun=$d[thn_ajaran]&nip=$d[nip]&semester=1' title='Lihat Detail Nilai sikap'>Semester 1</a> | <a class='btn btn-info' href='?mod=nilaisikaptambahsubmit&kelas=$d[kode_kelas]&pelajaran=$d[kode_pelajaran]&tahun=$d[thn_ajaran]&nip=$d[nip]&semester=2' title='Lihat Detail Nilai sikap'>Semester 2</a>";
		}
		else if ($kodekelas == "AK02" || $kodekelas == "AP21" || $kodekelas == "AP22" || $kodekelas == "AP23" || $kodekelas == "AP24"){
			$tekstsemester = "<a class='btn btn-info' href='?mod=nilaisikaptambahsubmit&kelas=$d[kode_kelas]&pelajaran=$d[kode_pelajaran]&tahun=$d[thn_ajaran]&nip=$d[nip]&semester=3' title='Lihat Detail Nilai sikap'>Semester 3</a> | <a class='btn btn-info' href='?mod=nilaisikaptambahsubmit&kelas=$d[kode_kelas]&pelajaran=$d[kode_pelajaran]&tahun=$d[thn_ajaran]&nip=$d[nip]&semester=4' title='Lihat Detail Nilai sikap'>Semester 4</a>";
		}
		else if ($kodekelas == "AK03" || $kodekelas == "AP31" || $kodekelas == "AP32" || $kodekelas == "AP33" || $kodekelas == "AP34"){
			$tekstsemester = "<a class='btn btn-info' href='?mod=nilaisikaptambahsubmit&kelas=$d[kode_kelas]&pelajaran=$d[kode_pelajaran]&tahun=$d[thn_ajaran]&nip=$d[nip]&semester=5' title='Lihat Detail Nilai sikap'>Semester 5</a> | <a class='btn btn-info' href='?mod=nilaisikaptambahsubmit&kelas=$d[kode_kelas]&pelajaran=$d[kode_pelajaran]&tahun=$d[thn_ajaran]&nip=$d[nip]&semester=6' title='Lihat Detail Nilai sikap'>Semester 6</a>";
		}
						  ?>	
							<tr>	
								<td class="center"><?php echo $d['nama_kelas']; ?></td>
                                <td class="center"><?php echo $d['nama_pelajaran']; ?></td>
                                <td class="center"><?php echo $d['thn_ajaran']; ?></td>
								<td class="center"><?php echo $tekstsemester; ?></td>
							</tr>
							<?php } ?>
					  </table>