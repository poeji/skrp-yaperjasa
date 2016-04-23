<?php
$mintahun = (date("Y")-1)."-".date("Y");
$plustahun = (date("Y"))."-".(date("Y")+1);
?>
<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Data Kurikulum</h2>
						
					</div>
					<div class="box-content">
					<form action="?mod=kurikulumproses" method="post">
		
					<div class="control-group">
								<label class="control-label" for="selectError">Mata Pelajaran</label>
								<div class="controls">
								  <select id="selectError" data-rel="chosen" name="kode_pelajaran">
									<?php
                                        $qjur = mysql_query("select * from data_pelajaran order by nama_pelajaran ASC");
                                        while($djur = mysql_fetch_array($qjur)) {
                                  ?>
                                    <option value="<?php echo $djur['kode_pelajaran']; ?>"><?php echo $djur['nama_pelajaran']; ?></option>
                                    <?php } ?>
								  </select>
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="selectError">Kelas</label>
								<div class="controls">
								  <select id="kode_kelas" data-rel="chosen" name="kode_kelas">
                                  <option>--- Pilih Kelas</option>
									<?php
                                        $qjur = mysql_query("select * from data_kelas order by nama_kelas ASC");
                                        while($djur = mysql_fetch_array($qjur)) {
                                  ?>
                                    <option value="<?php echo $djur['kode_kelas']; ?>"><?php echo $djur['nama_kelas']; ?></option>
                                    <?php } ?>
								  </select>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="selectError">Pengajar</label>
								<div class="controls">
								  <select id="selectError3" data-rel="chosen" name="nip">
									<?php
                                        $qjur = mysql_query("select * from data_guru order by nama_guru ASC");
                                        while($djur = mysql_fetch_array($qjur)) {
                                  ?>
                                    <option value="<?php echo $djur['nip']; ?>"><?php echo $djur['nama_guru']." [".$djur['nip']."]"; ?></option>
                                    <?php } ?>
								  </select>
								</div>
							  </div>
							  <div class="control-group">
                              <label class="control-label" for="typeahead">Tahun Ajaran </label>
                              <div class="controls">
                                <select id="tahun_ajaran" name="tahun_ajaran" data-rel="chosen" class="required">
                                    <option value="<?php echo $mintahun; ?>"><?php echo $mintahun; ?></option>
                                   <option value="<?php echo $plustahun; ?>"><?php echo $plustahun; ?></option>
                                  </select>
                              </div>
                            </div>
							  <button type="submit" class="btn btn-primary" name="submit" value="submit">Proses</button>
							  <button type="button" class="btn" onclick="location.href='?mod=nilaipengetahuandata'">Cancel</button>
					
         	
				<hr />
                <table  class="tabel" width="100%" border="0">
  <tr>
    <td>NO.</td>
    <td>Nama Pelajaran</td>
    <td>Kelas</td>
    <td>Nama Guru</td>
    <td>Tahun Ajaran</td>
    
    <td>Action</td>
  </tr>
  <?php
  $no = 1;
  	$dkr =mysql_query("SELECT b.`id_belajar`, p.`nama_pelajaran`, k.`nama_kelas`, g.`nip`, g.`nama_guru`, b.thn_ajaran FROM `data_belajar` b
LEFT JOIN `data_pelajaran` p ON p.`kode_pelajaran` = b.`kode_pelajaran`
LEFT JOIN `data_kelas` k ON k.`kode_kelas` = b.`kode_kelas`
LEFT JOIN `data_guru` g ON g.`nip` = b.`nip`");
while($d= mysql_fetch_array($dkr)) {
  ?>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $d['nama_pelajaran']; ?></td>
    <td><?php echo $d['nama_kelas']; ?></td>
    <td><?php echo $d['nama_guru']. "[".$d['nama_guru']."]"; ?></td>
    <td><?php echo $d['thn_ajaran']; ?></td>
    <td><a href="?mod=kurikulumhapus&id=<?php echo $d['id_belajar']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?');">Hapus</td>
  </tr>
  <?php $no++; } ?>
</table>
