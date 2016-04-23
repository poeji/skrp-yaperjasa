<?php
$d = mysql_fetch_array(mysql_query("select * from struktur where id = '1'"));
?>
<script src="ckeditor/ckeditor.js"></script>
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
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Struktur</h2>
					</div>
					<div class="box-content">
		<form id="register-form" action="?mod=strukturupdate" method="post" enctype="multipart/form-data">
						  <input name="id" type="hidden" value="1">
                          <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Struktur Title </label>
							  <div class="controls">
	<input type="text" id="page_title" name="struktur_title" placeholder="struktur title" value="<?php echo $d['struktur_title']; ?>" style="width:480px" >
								
							  </div>
							</div>
                            <br>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Struktur </label>
							  <div class="controls">
								<img src="../images/<?php echo $d['struktur']; ?>" height="300px">
							  </div>
							</div>
                            <br>
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Struktur </label>
							  <div class="controls">
								<input name="struktur" type="file">
							  </div>
							</div>
                            <br>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" name="submit" value="submit">Save changes</button>
							  <button type="button" class="btn" onClick="location.href='?mod=page'">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->