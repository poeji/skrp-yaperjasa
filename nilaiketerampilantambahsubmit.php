<?php
$q = mysql_query("SELECT * FROM `data_siswa` WHERE kode_kelas = '".$_GET['kelas']."' ORDER BY nama_siswa ASC");
$total = mysql_num_rows($q)
?>
<h2>Tambah Data Nilai Keterampilan</h2>
					<form action="?mod=nilaiketerampilantambahproses" method="post">
					<input type="hidden" value="<?php echo $_GET['pelajaran']; ?>" name="kode_pelajaran">
					<input type="hidden" value="<?php echo $_GET['kelas']; ?>" name="kode_kelas">
					<input type="hidden" value="<?php echo $_GET['nip']; ?>" name="nip">
					<input type="hidden" value="<?php echo $_GET['tahun']; ?>" name="tahun_ajaran">
                    <input type="hidden" value="<?php echo $_GET['semester']; ?>" name="semester">
					<?php if($total > 0) { ?>
					<button type="submit" class="btn btn-primary" name="submit" value="submit">Save changes</button>
					<?php } ?>
					<button type="button" class="btn" onclick="location.href='?mod=nilaiketerampilan'">Cancel</button>
					<br><br>		
                    <?php 
					$mp = mysql_fetch_array(mysql_query("SELECT nama_pelajaran FROM `data_pelajaran` WHERE kode_pelajaran = '".$_GET['pelajaran']."'"));
					$kl = mysql_fetch_array(mysql_query("SELECT nama_kelas FROM `data_kelas` WHERE kode_kelas = '".$_GET['kelas']."'"));
					$gr = mysql_fetch_array(mysql_query("SELECT nama_guru FROM `data_guru` WHERE nip = '".$_GET['nip']."'"));
					?>
					Kelas : <strong><?php echo $kl['nama_kelas']; ?></strong><br />
                    Mata Pelajaran : <strong><?php echo $mp['nama_pelajaran']; ?></strong><br />
                    Pengajar : <strong><?php echo $gr['nama_guru']; ?></strong><br>
                    Tahun Ajaran : <strong><?php echo $_GET['tahun']; ?></strong><br />
                    Semester : <strong><?php echo $_GET['semester']; ?></strong>
                    <br />
						<table class="tabel">
							  <tr>
								  <td>NIS</td>
								  <td>Nama Siswa</td>
								  <td>NP1</td>
								  <td>NP2</td>
								  <td>NP3</td>
								  <td>NP4</td>
								  <td>NP5</td>
								  <td>NILAI P.FOLIO</td>
								  <td>NILAI PROYEK</td>
							  </tr>
						  <?php
						  $no = 10;
						  $no2 = 15;
						  $no3 = 20;
						  $no4 = 25;
						  $no5 = 35;
						  $no6 = 40;
						  $no7 = 45;
						  ?>
						  <input type="hidden" name="total" value="<?php echo $total; ?>">		
						  <?php		
						  		while($d = mysql_fetch_array($q)) { 
						  $det = mysql_fetch_array(mysql_query("SELECT * FROM `nilai_keterampilan` 
						  	where kode_pelajaran = '".$_GET['pelajaran']."' AND nip = '".$_GET['nip']."' AND kode_kelas = '".$_GET['kelas']."' 
						  	AND tahun_ajaran = '".$_GET['tahun']."' and nis = '".$d['nis']."' and semester = '".$_GET['semester']."'"));
						  ?>
							<tr>
								<input type="hidden" name="nis[]" value="<?php echo $d['nis']; ?>">
								<td class="center"><?php echo $d['nis']; ?></td>
								<td class="center"><?php echo $d['nama_siswa']; ?></td>
								<td class="center"><input type="text" name="np1[]" style="width:40px" title="NP 1" value="<?php echo $det['np1']; ?>"></td>
								<td class="center"><input type="text" name="np2[]" style="width:40px" title="NP 2" value="<?php echo $det['np2']; ?>"></td>
								<td class="center"><input type="text" name="np3[]" style="width:40px" title="NP 3" value="<?php echo $det['np3']; ?>"</td>
								<td class="center"><input type="text" name="np4[]" style="width:40px" title="NP 4" value="<?php echo $det['np4']; ?>"</td>
								<td class="center"><input type="text" name="np5[]" style="width:40px" title="NP 5" value="<?php echo $det['np5']; ?>"</td>
								<td class="center"><input type="text" name="nfolio[]" style="width:40px" title="N. FOLIO" value="<?php echo $det['nfolio']; ?>"</td>
								<td class="center"><input type="text" name="nproyek[]" style="width:40px" title="NILAI PROYEK" value="<?php echo $det['nproyek']; ?>"</td>
							</tr>
							<?php $no++; $no2++; $no3++; $no4++; $no5++; $no6++; $no7++; } ?>
					  </table>            