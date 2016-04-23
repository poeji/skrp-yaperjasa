<h3>Data Nilai Pengetahuan</h3>

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
						  ?>	
							<tr>	
								<td class="center"><?php echo $d['nama_kelas']; ?></td>
                                <td class="center"><?php echo $d['nama_pelajaran']; ?></td>
                                <td class="center"><?php echo $d['thn_ajaran']; ?></td>
								<td class="center">
									<a class="btn btn-info" href="?mod=listdatanilaisiswaview&kelas=<?php echo $d['kode_kelas']; ?>&pelajaran=<?php echo $d['kode_pelajaran']; ?>&tahun=<?php echo $d['thn_ajaran']; ?>&nip=<?php echo $d['nip']; ?>" title="Lihat Detail Nilai Pengetahuan">
								 		Detail  
									</a>
								</td>
							</tr>
							<?php } ?>
					  </table>