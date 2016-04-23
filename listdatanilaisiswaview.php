<?php
$q = mysql_query("SELECT * FROM `data_siswa` WHERE kode_kelas = '".$_GET['kelas']."' ORDER BY nama_siswa ASC");
$total = mysql_num_rows($q)
?>
<h2>Data Nilai</h2>
					<form action="?mod=nilaisikaptambahproses" method="post">
					<input type="hidden" value="<?php echo $_GET['pelajaran']; ?>" name="kode_pelajaran">
					<input type="hidden" value="<?php echo $_GET['kelas']; ?>" name="kode_kelas">
					<input type="hidden" value="<?php echo $_GET['nip']; ?>" name="nip">
					<input type="hidden" value="<?php echo $_GET['tahun']; ?>" name="tahun_ajaran">
					<button type="button" class="btn" onclick="location.href='?mod=listdatanilaisiswa'">Cancel</button>
					<br><br>		
                    <?php 

					$kl = mysql_fetch_array(mysql_query("SELECT nama_kelas FROM `data_kelas` WHERE kode_kelas = '".$_GET['kelas']."'"));
					$gr = mysql_fetch_array(mysql_query("SELECT nama_guru FROM `data_guru` WHERE nip = '".$_GET['nip']."'"));
					?>
					Kelas : <strong><?php echo $kl['nama_kelas']; ?></strong><br />
  
                    Pengajar : <strong><?php echo $gr['nama_guru']; ?></strong><br>
                    Tahun Ajaran : <strong><?php echo $_GET['tahun']; ?></strong>
                    <br />
						<table class="tabel">
							  <tr>
								  <td>NIS</td>
								  <td>Nama Siswa</td>
								  <td>Action</td>
							  </tr>
						  <input type="hidden" name="total" value="<?php echo $total; ?>">		
						  <?php		
						  		while($d = mysql_fetch_array($q)) { 
						  $det = mysql_fetch_array(mysql_query("SELECT * FROM `nilai_sikap` 
						  	WHERE nip = '".$_GET['nip']."' AND kode_kelas = '".$_GET['kelas']."' AND tahun_ajaran = '".$_GET['tahun']."' and nis = '".$d['nis']."'"));
							
			$kodekelas = $_GET['kelas'];
			if ($kodekelas == "AK01" || $kodekelas == "AP11" || $kodekelas == "AP12" || $kodekelas == "AP13" || $kodekelas == "AP14"){
			
			$tekstsemester = "<a href=?mod=listdatanilaisiswadetail&kelas=$d[kode_kelas]&tahun=$_GET[tahun]&nip=$_GET[nip]&nis=$d[nis]&semester=1>Semester 1</a> | <a href=?mod=listdatanilaisiswadetail&kelas=$d[kode_kelas]&tahun=$_GET[tahun]&nip=$_GET[nip]&nis=$d[nis]&semester=2>Semester 2</a>";
		}
		else if ($kodekelas == "AK02" || $kodekelas == "AP21" || $kodekelas == "AP22" || $kodekelas == "AP23" || $kodekelas == "AP24"){
			$tekstsemester = "<a href=?mod=listdatanilaisiswadetail&kelas=$d[kode_kelas]&tahun=$_GET[tahun]&nip=$_GET[nip]&nis=$d[nis]&semester=3>Semester 3</a> | <a href=?mod=listdatanilaisiswadetail&kelas=$d[kode_kelas]&tahun=$_GET[tahun]&nip=$_GET[nip]&nis=$d[nis]&semester=4>Semester 4</a>";
		}
		else if ($kodekelas == "AK03" || $kodekelas == "AP31" || $kodekelas == "AP32" || $kodekelas == "AP33" || $kodekelas == "AP34"){
			$tekstsemester = "<a href=?mod=listdatanilaisiswadetail&kelas=$d[kode_kelas]&tahun=$_GET[tahun]&nip=$_GET[nip]&nis=$d[nis]&semester=5>Semester 5</a> | <a href=?mod=listdatanilaisiswadetail&kelas=$d[kode_kelas]&tahun=$_GET[tahun]&nip=$_GET[nip]&nis=$d[nis]&semester=6>Semester 6</a>";
		}
		
						  ?>
							<tr>
								<input type="hidden" name="nis[]" value="<?php echo $d['nis']; ?>">
								<td class="center"><?php echo $d['nis']; ?></td>
								<td class="center"><?php echo $d['nama_siswa']; ?></td>
								<td class="center">
                                <?php echo $tekstsemester; ?>
                                </td>
							</tr>
							<?php } ?>
					  </table>            