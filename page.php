<h3>Data page</h3>

						<table class="tabel">
							  <tr>
								  <td>No.</td>
                                  <td>ID</td>
								  <td>Title</td>
								  <td>Actions</td>
							  </tr>
						  <?php
						  		$no = 1;
						  		$q = mysql_query("select * from page where page_id in (1,2,3) order by page_title ASC");
						  		while($d = mysql_fetch_array($q)) {
						  ?>
							<tr>
								<td class="center"><?php echo $no; ?>.</td>
                                <td class="center"><?php echo $d['page_id']; ?></td>
								<td class="center"><?php echo $d['page_title']; ?></td>
								<td class="center">
									<a class="menu" href="?mod=pageedit&id=<?php echo $d['page_id']; ?>">
										Edit  
									</a>
								</td>
							</tr>
							<?php $no++; } ?>
					  </table>            