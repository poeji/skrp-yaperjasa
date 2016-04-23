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
   <div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Tambah Pelajaran</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" id="register-form" name="formpelajaran" novalidate="novalidate" action="?mod=pelajarantambahproses" method="post">
						  <fieldset>
							<div class="control-group">
                              <label class="control-label" for="typeahead">Kode Pelajaran </label>
                              <div class="controls">
                                <input type="text" class="span6 typeahead required" id="kode_pelajaran" name="kode_pelajaran" placeholder="Kode Pelajaran" >
                                
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Nama Pelajaran </label>
                              <div class="controls">
                                <input type="text" class="span6 typeahead required" id="nama_pelajaran" name="nama_pelajaran" placeholder="Nama Pelajaran" >
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Singkatan Pelajaran </label>
                              <div class="controls">
                                <input type="text" class="span6 typeahead required" id="singk_pelajaran" name="singk_pelajaran" placeholder="Singkatan Pelajaran" >
                              </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="selectError1">Kelas</label>
                                <div class="controls">
                                  <select id="selectError1" multiple data-rel="chosen" name="kelas_pelajaran[]">
                                    <option value="1">Kelas 1</option>
                                    <option value="2">Kelas 2</option>
                                    <option value="3">Kelas 3</option>
                                  </select>
                                </div>
                              </div>
                            <div class="control-group">
                                <label class="control-label" for="selectError">Kelas</label>
                                <div class="controls">
                                  <select id="id_jurusan" name="id_jurusan" data-rel="chosen" class="required">
                                  <?php
                                        $qjur = mysql_query("select * from data_jurusan order by nama_jurusan ASC");
                                        while($djur = mysql_fetch_array($qjur)) {
                                  ?>
                                    <option value="<?php echo $djur['id_jurusan']; ?>"><?php echo $djur['nama_jurusan']; ?></option>
                                    <?php } ?>
                                  </select>
                                </div>
                              </div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" name="submit" value="submit">Save changes</button>
							  <button type="button" class="btn" onclick="location.href='?mod=pelajaran'">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->