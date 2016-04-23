<?php
$q = mysql_query("SELECT * FROM `data_siswa` WHERE kode_kelas = '".$_GET['kelas']."' ORDER BY nama_siswa ASC");
$total = mysql_num_rows($q)
?>
<h2>Tambah Data Nilai sikap</h2>
					<form action="?mod=nilaisikaptambahproses" method="post">
					<input type="hidden" value="<?php echo $_GET['pelajaran']; ?>" name="kode_pelajaran">
					<input type="hidden" value="<?php echo $_GET['kelas']; ?>" name="kode_kelas">
					<input type="hidden" value="<?php echo $_GET['nip']; ?>" name="nip">
					<input type="hidden" value="<?php echo $_GET['tahun']; ?>" name="tahun_ajaran">
                    <input type="hidden" value="<?php echo $_GET['semester']; ?>" name="semester">
					<?php if($total > 0) { ?>
					<button type="submit" class="btn btn-primary" name="submit" value="submit">Save changes</button>
					<?php } ?>
					<button type="button" class="btn" onclick="location.href='?mod=nilaisikap'">Cancel</button>
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
								  <td>Observasi</td>
								  <td>Antar Teman</td>
								  <td>Diri Sendiri</td>
								  <td>Jurnal Guru</td>
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
						  $det = mysql_fetch_array(mysql_query("SELECT * FROM `nilai_sikap` 
						  	WHERE kode_pelajaran = '".$_GET['pelajaran']."' AND nip = '".$_GET['nip']."' AND kode_kelas = '".$_GET['kelas']."' AND tahun_ajaran = '".$_GET['tahun']."' and nis = '".$d['nis']."' and semester = '".$_GET['semester']."'"));
						  ?>
							<tr>
								<input type="hidden" name="nis[]" value="<?php echo $d['nis']; ?>">
								<td class="center"><?php echo $d['nis']; ?></td>
								<td class="center"><?php echo $d['nama_siswa']; ?></td>
								<td class="center"><input type="text" name="ob[]" style="width:40px" title="Observasi" value="<?php echo $det['observasi']; ?>"></td>
								<td class="center"><input type="text" name="ant[]" style="width:40px" title="Antar Teman" value="<?php echo $det['antarteman']; ?>"></td>
								<td class="center"><input type="text" name="ds[]" style="width:40px" title="Diri Sendiri" value="<?php echo $det['dirisendiri']; ?>"</td>
								<td class="center"><input type="text" name="jg[]" style="width:40px" title="Jurnal Guru" value="<?php echo $det['jurnalguru']; ?>"</td>
							</tr>
							<?php $no++; $no2++; $no3++; $no4++; $no5++; $no6++; $no7++; } ?>
					  </table>            