<?php
$q = mysql_query("SELECT * FROM `data_belajar` b
LEFT JOIN `data_kelas`k ON k.`kode_kelas` = b.`kode_kelas`
WHERE b.`nip` = '".$_SESSION['userid']."'
GROUP BY B.`kode_kelas`
 order by k.nama_kelas ASC");
$total = mysql_num_rows($q)
?>
<h2>Data Kelas</h2>
					
						<table class="tabel">
							  <tr>
								  <td>Kode Kelas</td>
								  <td>Nama Kelas</td>
								  <td>Action</td>
							  </tr>		
						  <?php		
						  		while($d = mysql_fetch_array($q)) { 
						  ?>
							<tr>
								<td class="center"><?php echo $d['kode_kelas']; ?></td>
								<td class="center"><?php echo $d['nama_kelas']; ?></td>
								<td class="center">
                                <a href='?mod=listdatanilaisiswaview&kelas=<?php echo $d['kode_kelas']; ?>&tahun=<?php echo $d['thn_ajaran']; ?>&nip=<?php echo $d['nip']; ?>'>Detail Nilai</td>
							</tr>
							<?php } ?>
					  </table>            