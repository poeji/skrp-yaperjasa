<h3>Data Siswa</h3>

<a href="?mod=siswa">Kembali</a>
<br /><br />
						<table class="tabel">
							  <tr>
								  <td>NIS</td>
								  <td>Nama Siswa</td>
								  <td>Tempat Lahir</td>
								  <td>Tanggal Lahir</td>
								  <td>Alamat</td>
								  <td>Agama</td>
								  <td>Jenis Kelamin</td>
								  <td>Nama Orang Tua</td>
								  <td>Telepon Orang Tua</td>
								  <td>Status</td>
								  <td>Actions</td>
							  </tr>  
						  <?php
						  		$q = mysql_query("select *, DATE_FORMAT(tanggal_lahir, '%d %M %Y')AS tgl from data_siswa where kode_kelas= '".$_GET['id']."' order by nama_siswa ASC");
						  		while($d = mysql_fetch_array($q)) {

						  		//Data Agama
						  		$dagma = mysql_fetch_array(mysql_query("select nama_agama from data_agama where id_agama = '$d[id_agama]'")) 
						  ?>
							<tr>
								<td class="center"><?php echo $d['nis']; ?></td>
								<td class="center"><?php echo $d['nama_siswa']; ?></td>
								<td class="center"><?php echo $d['tempat_lahir']; ?></td>
								<td class="center"><?php echo $d['tgl']; ?></td>
								<td class="center"><?php echo $d['alamat']; ?></td>
								<td class="center"><?php echo $d['agama']; ?></td>
								<td class="center"><?php if($d['jenis_kelamin']=="L") { echo "Pria"; } else { echo "Wanita"; } ?></td>
								<td class="center"><?php echo $d['nama_orangtua']; ?></td>
								<td class="center"><?php echo $d['telepon_orangtua']; ?></td>
								<td class="center"><?php  if($d['status_siswa']==1) { echo "Aktif"; } else { echo "Tidak Aktif"; } ?></td>
								<td class="center">
									<a href="?mod=siswaedit&id=<?php echo $d['nis']; ?>">
										Edit
									</a>
									<a href="?mod=siswahapus&id=<?php echo $d['nis']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $d['nama_siswa']; ?>?');">
										Hapus
									</a>
								</td>
							</tr>
							<?php } ?>
					  </table>