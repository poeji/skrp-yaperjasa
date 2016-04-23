<?php
$limit = 10;
?>
<h3>Data Guru</h3>

<a href="?mod=gurutambah">Tambah Data Guru</a>
<br /><br />
						<table class="tabel">							  <tr>
								  <td>NIP</td>
								  <td>Nama Guru</td>
								  <td>Tanggal Lahir</td>
								  <td>Alamat</td>
								  <td>Agama</td>
								  <td>Jenis Kelamin</td>
								  <td>Status Menikah</td>
								  <td>No. HP</td>
								  <td>Status Login</td>
								  <td>Actions</td>
							  </tr>
						  <?php
		$rec_count = mysql_num_rows(mysql_query("select nip from data_guru"));
		$rec_limit = 10;
		if( isset($_GET{'page'} ) ) {
            $page = $_GET{'page'} + 1;
            $offset = $rec_limit * $page ;
         }else {
            $page = 0;
            $offset = 0;
         }
         
						  $left_rec = $rec_count - ($page * $rec_limit);
						  
						  		$q = mysql_query("SELECT *, DATE_FORMAT(tgl_lahir, '%d %M %Y')AS tgl FROM data_guru ORDER BY nama_guru ASC LIMIT $offset, $rec_limit");
						  		while($d = mysql_fetch_array($q)) {

						  ?>
							<tr>
								<td class="center"><?php echo $d['nip']; ?></td>
								<td class="center"><?php echo $d['nama_guru']; ?></td>
								<td class="center"><?php echo $d['tgl']; ?></td>
								<td class="center"><?php echo $d['alamat']; ?></td>
								<td class="center"><?php echo $d['agama']; ?></td>
								<td class="center"><?php if($d['jenis_kelamin']=="L") { echo "Pria"; } else { echo "Wanita"; } ?></td>
								<td class="center"><?php echo $d['st_menikah']; ?></td>
								<td class="center"><?php echo $d['hp']; ?></td>
								<td class="center"><?php  if($d['status_guru']==1) { echo "Aktif"; } else { echo "Tidak Aktif"; } ?></td>
								<td class="center">
									<a class="btn btn-info" href="?mod=guruedit&id=<?php echo $d['nip']; ?>">
										Edit
									</a>
									<a class="btn btn-danger" href="?mod=guruhapus&id=<?php echo $d['nip']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $d['nama_guru']; ?>?');">
										Hapus
									</a>
								</td>
							</tr>
							<?php } ?>
					  </table>        
						<br />
<?php
if($page > 0 ) {
            $last = $page - 2;
            echo "<a href = \"?mod=guru&page=$last\">Last 10 Records</a> |";
            echo "<a href = \"?mod=guru&page=$page\">Next 10 Records</a>";
         }else if( $page == 0 ) {
            echo "<a href = \"?mod=guru&page=$page\">Next 10 Records</a>";
         }else if( $left_rec < $rec_limit ) {
            $last = $page - 2;
            echo "<a href = \"?mod=guru&page=$last\">Last 10 Records</a>";
         }
?>