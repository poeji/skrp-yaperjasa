<h3>Data Kelas</h3>

<a href="?mod=kelastambah">Tambah Data Kelas</a>
<br /><br />
						<table class="tabel">
							  <tr>
								  <td>No.</td>
                                  <td>Kode Kelas</td>
								  <td>Nama Kelas</td>
                                  <td>Jumlah Siswa</td>
								  <td>Actions</td>
							  </tr>
						  <?php
						  		$no = 1;
						  		$q = mysql_query("select * from data_kelas order by nama_kelas ASC");
						  		while($d = mysql_fetch_array($q)) {
								$total = mysql_num_rows(mysql_query("select nis from data_siswa where kode_kelas = '".$d['kode_kelas']."'"))
						  ?>
							<tr>
								<td class="center"><?php echo $no; ?>.</td>
                                <td class="center"><?php echo $d['kode_kelas']; ?></td>
								<td class="center"><?php echo $d['nama_kelas']; ?></td>
                                <td class="center"><strong><?php echo $total; ?></strong> Siswa</td>
								<td class="center">
									<a class="menu" href="?mod=siswakelas&id=<?php echo $d['kode_kelas']; ?>">
										Lhat Siswa  
									</a>
                                    <a class="menu" href="?mod=kelasedit&id=<?php echo $d['kode_kelas']; ?>">
										Edit  
									</a>
									<a class="menu" href="?mod=kelashapus&id=<?php echo $d['kode_kelas']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $d['nama_kelas']; ?>?');">
										Hapus
									</a>
								</td>
							</tr>
							<?php $no++; } ?>
					  </table>            