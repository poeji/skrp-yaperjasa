<h3>Data Siswa</h3>

<a href="?mod=siswatambah">Tambah Data Siswa</a>
<br /><br />
						<table class="tabel">
							  <tr>
								  <td>Nama Kelas</td>
								  <td>Jumlah Siswa</td>
								  <td>Actions</td>
							  </tr>  
						  <?php
						  		$q = mysql_query("select * from data_kelas order by nama_kelas ASC");
						  		while($d = mysql_fetch_array($q)) {
						  		$total = mysql_num_rows(mysql_query("select nis from data_siswa where kode_kelas = '".$d['kode_kelas']."'"));
						  ?>
							<tr>
								<td class="center"><?php echo $d['nama_kelas']; ?></td>
								<td class="center"><strong><?php echo $total; ?></strong> Siswa</td>
								<td class="center">
									<a href="?mod=siswadetail&id=<?php echo $d['kode_kelas']; ?>">
										Detail
									</a>
								</td>
							</tr>
							<?php } ?>
					  </table>