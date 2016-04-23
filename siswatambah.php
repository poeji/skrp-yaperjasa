<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<style>

 /* example styles for validation form demo */
</style>

<script type="text/javascript">
/**
  * Basic jQuery Validation Form Demo Code
  * Copyright Sam Deering 2012
  * Licence: http://www.jquery4u.com/license/
  */
(function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#register-form").validate({
                rules: {
                    firstname: "required",
					nis: {
					required: true,
					  number: true
					},
                    lastname: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 5
                    },
                    agree: "required"
                },
                messages: {
                    firstname: "Please enter your firstname",
                    lastname: "Please enter your lastname",
					nis: "NIS harus diisi dengan angka",
                    password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long"
                    },
                    email: "Please enter a valid email address",
                    agree: "Please accept our policy"
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }

    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

})(jQuery, window, document);
</script>
<?php
$mintahun = (date("Y")-1)."-".date("Y");
$plustahun = (date("Y"))."-".(date("Y")+1);
?>

<h2>Tambah Siswa</h2>
					</div>
                    <form id="register-form" name="formsiswa"  action="?mod=siswatambahproses" method="post">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">NIS </label>
							  <div class="controls">
								<input name="nis" type="text" class="span6 typeahead required pendek" id="nis" style="width: 200px;" maxlength="4" placeholder="NIS" >
								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Nama Siswa </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead required" id="nama_siswa" name="nama_siswa" placeholder="Nama Siswa" >
							  </div>
							</div>
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Tempat Lahir </label>
                              <div class="controls">
                                <input type="text" class="span6 typeahead required" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" >
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Tanggal Lahir </label>
                              <div class="controls">
                                <input type="text" class="span6 typeahead required datepicker tgl" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" >
                              </div>
                            </div>
                            <div class="control-group hidden-phone">
                              <label class="control-label" for="textarea2">Alamat</label>
                              <div class="controls">
                                <textarea  id="alamat" name="alamat" rows="2"  style="width: 420px;"></textarea>
                              </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="selectError">Agama</label>
                                <div class="controls">
                                  <select id="agama" name="agama" data-rel="chosen" class="required">
                                    <option value="ISLAM">ISLAM</option>
                                    <option value="KRISTEM PROTESTAN">KRISTEM PROTESTAN</option>
                                    <option value="KRISTEN KATOLIK">KRISTEN KATOLIK</option>
                                    <option value="HINDU">HINDU</option>
                                    <option value="BUDA">BUDA</option>
                                  <?php
                                        $qagama = mysql_query("select * from data_agama order by nama_agama ASC");
                                        while($dagm = mysql_fetch_array($qagama)) {
                                  ?>
                                    <?php } ?>
                                  </select>
                                </div>
                              </div>
                              <div class="control-group">
                                <label class="control-label" for="selectError">Jenis Kelamin</label>
                                <div class="controls">
                                  <select id="jenis_kelamin" name="jenis_kelamin" data-rel="chosen" class="required">
                                    <option value="">PILIH</option>
                                    <option value="L">LAKI-LAKI</option>
                                    <option value="P">PEREMPUAN</option>
                                  </select>
                                </div>
                              </div>
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Nama Orang Tua </label>
                              <div class="controls">
                                <input type="text" class="span6 typeahead required" id="nama_orangtua" name="nama_orangtua" placeholder="Nama Orang Tua" >
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Telepon Orang Tua </label>
                              <div class="controls">
                                <input type="text" class="span6 typeahead required" id="telepon_orangtua" name="telepon_orangtua" placeholder="Telepon Orang Tua" >
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Password </label>
                              <div class="controls">
                                <input type="password" class="span6 typeahead required" id="password" name="password" placeholder="Password" >
                              </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="selectError">Kelas</label>
                                <div class="controls">
                                  <select id="kode_kelas" name="kode_kelas" data-rel="chosen" class="required">
                                  <?php
                                        $qkls = mysql_query("select * from data_kelas order by nama_kelas ASC");
                                        while($dkls = mysql_fetch_array($qkls)) {
                                  ?>
                                    <option value="<?php echo $dkls['kode_kelas']; ?>"><?php echo $dkls['nama_kelas']; ?></option>
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
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" name="submit" value="submit">Save changes</button>
							  <button type="button" class="btn" onclick="location.href='?mod=siswa'">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->