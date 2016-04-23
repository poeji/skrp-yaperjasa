<h3>Data Pelajaran</h3>

<a href="?mod=pelajarantambah">Tambah Data Pelajaran</a>
<br /><br />
						<table class="tabel">
							  <tr>
								  <td>Kode Pelajaran</th>
								  <td>Nama Pelajaran</th>
								  <td>Singkatan</th>
								  <td>Kelas</th>
								  <td>Jurusan</th>
								  <td>Actions</th>
							  </tr>
						  <?php
						  		$q = mysql_query("SELECT p.`kode_pelajaran`, p.`nama_pelajaran`, p.`singk_pelajaran`, p.`kelas_pelajaran`,j.`nama_jurusan` FROM `data_pelajaran` p LEFT JOIN `data_jurusan` j ON j.`id_jurusan` = p.`id_jurusan`");
						  		while($d = mysql_fetch_array($q)) {
						  ?>
							<tr>
								<td class="center"><?php echo $d['kode_pelajaran']; ?></td>
								<td class="center"><?php echo $d['nama_pelajaran']; ?></td>
								<td class="center"><?php echo $d['singk_pelajaran']; ?></td>
								<td class="center"><?php echo $d['kelas_pelajaran']; ?></td>
								<td class="center"><?php echo $d['nama_jurusan']; ?></td>
								<td class="center">
									<a href="?mod=pelajaranedit&id=<?php echo $d['kode_pelajaran']; ?>">
										Edit
									</a>
									<a href="?mod=pelajaranhapus&id=<?php echo $d['kode_pelajaran']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $d['nama_pelajaran']; ?>?');">
										Hapus
									</a>
								</td>
							</tr>
							<?php } ?>
					  </table>