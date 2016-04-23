<script type="text/javascript" src="js/jquery.validate.min.js"></script>
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
					nip: {
					required: true,
					  number: true
					},
                    firstname: "required",
                    lastname: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 4
                    },
                    agree: "required"
                },
                messages: {
					nip: "NIP harus diisi dengan angka",
                    firstname: "Please enter your firstname",
                    lastname: "Please enter your lastname",
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
<h2>Tambah Guru</h2>
					</div>
                    <form id="register-form" name="formguru"  action="?mod=gurutambahproses" method="post">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">NIP </label>
							  <div class="controls">
								<input name="nip" type="text" class="span6 typeahead required pendek" id="nip" style="width: 200px;" maxlength="16" placeholder="NIP" >
								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Nama Guru </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead required" id="nama_guru" name="nama_guru" placeholder="Nama guru" >
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
                                <input type="text" class="span6 typeahead required datepicker" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" >
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
                                  <?php
                                        $qagama = mysql_query("select * from data_agama order by nama_agama ASC");
                                        while($dagm = mysql_fetch_array($qagama)) {
                                  ?>
                                    <option value="<?php echo $dagm['id_agama']; ?>" <?php if($dagm['nama_agama']=="ISLAM") { ?>selected="selected"<?php } ?>><?php echo $dagm['nama_agama']; ?></option>
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
                                <label class="control-label" for="selectError">Status Menikah</label>
                                <div class="controls">
                                  <select id="st_menikah" name="st_menikah" data-rel="chosen" class="required">
                                    <option value="">PILIH</option>
                                    <option value="KAWIN">KAWIN</option>
                                    <option value="BELUM KAWIN">BELUM KAWIN</option>
                                  </select>
                                </div>
                              </div>
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Telepon Rumah</label>
                              <div class="controls">
                                <input type="text" class="span6 typeahead required" id="tlp_rmh" name="tlp_rmh" placeholder="Telepon Rumah" >
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Telepon HP</label>
                              <div class="controls">
                                <input type="text" class="span6 typeahead required" id="hp" name="hp" placeholder="Telepon HP" >
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Password </label>
                              <div class="controls">
                                <input type="text" class="span6 typeahead required" id="password" name="password" placeholder="Password" >
                              </div>
                            </div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" name="submit" value="submit">Save changes</button>
							  <button type="button" class="btn" onclick="location.href='?mod=guru'">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->