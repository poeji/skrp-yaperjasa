<h3>Data User</h3>

						<table class="tabel">
							  <tr>
								  <td>No.</td>
                                  <td>User ID</td>
								  <td>Nama</td>
                                  <td>Akses</td>
								  <td>Actions</td>
							  </tr>
						  <?php
						  		$no = 1;
						  		$qgr = mysql_query("select nip, nama_guru from data_guru order by nama_guru ASC");
						  		while($dgr = mysql_fetch_array($qgr)) {
						  ?>
							<tr>
								<td class="center"><?php echo $no; ?>.</td>
                                <td class="center"><?php echo $dgr['nip']; ?></td>
								<td class="center"><?php echo $dgr['nama_guru']; ?></td>
                                <td class="center">Guru</td>
								<td class="center">
									<a class="menu" href="?mod=useredit&id=<?php echo $dgr['nip']; ?>&akses=guru">
										Edit  
									</a>
									
								</td>
							</tr>
							<?php $no++; } ?>
                            <?php
						  		$no2 = $no;
						  		$qs = mysql_query("select nis, nama_siswa from data_siswa order by nama_siswa ASC");
						  		while($ds = mysql_fetch_array($qs)) {
						  ?>
							<tr>
								<td class="center"><?php echo $no2; ?>.</td>
                                <td class="center"><?php echo $ds['nis']; ?></td>
								<td class="center"><?php echo $ds['nama_siswa']; ?></td>
                                <td class="center">Siswa</td>
								<td class="center">
									<a class="menu" href="?mod=useredit&id=<?php echo $ds['nis']; ?>&akses=siswa">
										Edit  
									</a>
									
								</td>
							</tr>
							<?php $no2++; } ?>
                            <?php
						  		$no3 = $no2;
						  		$qadm = mysql_query("select id_admin, userid, namaadmin from admin order by namaadmin ASC");
						  		while($dadm = mysql_fetch_array($qadm)) {
						  ?>
							<tr>
								<td class="center"><?php echo $no3; ?>.</td>
                                <td class="center"><?php echo $dadm['userid']; ?></td>
								<td class="center"><?php echo $dadm['namaadmin']; ?></td>
                                <td class="center">Admin</td>
								<td class="center">
									<a class="menu" href="?mod=useredit&id=<?php echo $dadm['id_admin']; ?>&akses=admin">
										Edit  
									</a>
									
								</td>
							</tr>
							<?php $no3++; } ?>
					  </table>            